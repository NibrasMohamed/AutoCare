<?php

namespace App\Http\Controllers;

use App\DataTables\SparePartDataTable;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSparePartRequest;
use App\Http\Requests\UpdateSparePartRequest;
use App\Repositories\SparePartRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Models\SparePart;
use Response;
use Datatables;

class SparePartController extends AppBaseController
{
    /** @var SparePartRepository $sparePartRepository*/
    private $sparePartRepository;

    public function __construct(SparePartRepository $sparePartRepo)
    {
        $this->sparePartRepository = $sparePartRepo;
    }

    /**
     * Display a listing of the SparePart.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of((new SparePartDataTable())->get())->make(true);
        }
    
        return view('spare_parts.index');
    }

    /**
     * Show the form for creating a new SparePart.
     *
     * @return Response
     */
    public function create()
    {
        return view('spare_parts.create');
    }

    /**
     * Store a newly created SparePart in storage.
     *
     * @param CreateSparePartRequest $request
     *
     * @return Response
     */
    public function store(CreateSparePartRequest $request)
    {
        $input = $request->all();

        $sparePart = $this->sparePartRepository->create($input);

        Flash::success('Spare Part saved successfully.');

        return redirect(route('spareParts.index'));
    }

    /**
     * Display the specified SparePart.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sparePart = $this->sparePartRepository->find($id);

        if (empty($sparePart)) {
            Flash::error('Spare Part not found');

            return redirect(route('spareParts.index'));
        }

        return view('spare_parts.show')->with('sparePart', $sparePart);
    }

    /**
     * Show the form for editing the specified SparePart.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sparePart = $this->sparePartRepository->find($id);

        if (empty($sparePart)) {
            Flash::error('Spare Part not found');

            return redirect(route('spareParts.index'));
        }

        return view('spare_parts.edit')->with('sparePart', $sparePart);
    }

    /**
     * Update the specified SparePart in storage.
     *
     * @param int $id
     * @param UpdateSparePartRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSparePartRequest $request)
    {
        $sparePart = $this->sparePartRepository->find($id);

        if (empty($sparePart)) {
            Flash::error('Spare Part not found');

            return redirect(route('spareParts.index'));
        }

        $sparePart = $this->sparePartRepository->update($request->all(), $id);

        Flash::success('Spare Part updated successfully.');

        return redirect(route('spareParts.index'));
    }

    /**
     * Remove the specified SparePart from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sparePart = $this->sparePartRepository->find($id);

        $sparePart->delete();

        return $this->sendSuccess('Spare Part deleted successfully.');
    }

    public function getSpareParts(Request $request)
    {
       $spareParts = SparePart::join('vehicles', 'vehicles.id', 'spareparts.vehicle_id')->select('spareparts.*', 'vehicles.model as vehicle')->get();

       return response()->json(['data' => $spareParts, 'recordsTotal' => $spareParts->count()]);
    }
}
