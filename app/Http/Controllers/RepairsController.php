<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRepairsRequest;
use App\Http\Requests\UpdateRepairsRequest;
use App\Repositories\RepairsRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Repair;
use App\Models\Repairs;
use Illuminate\Http\Request;
use Flash;
use Response;
use Barryvdh\DomPDF\Facade\Pdf;

class RepairsController extends AppBaseController
{
    /** @var RepairsRepository $repairsRepository*/
    private $repairsRepository;

    public function __construct(RepairsRepository $repairsRepo)
    {
        $this->repairsRepository = $repairsRepo;
    }

    /**
     * Display a listing of the Repairs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $repairs = Repairs::join('repair_images', 'repair_images.repair_id', 'repairs.id')
                            ->select(
                                'repairs.*',
                                'repair_images.path as image'
                            )
                            ->get();

        return view('repairs.index')
            ->with('repairs', $repairs);
    }

    /**
     * Show the form for creating a new Repairs.
     *
     * @return Response
     */
    public function create()
    {
        return view('repairs.create');
    }

    /**
     * Store a newly created Repairs in storage.
     *
     * @param CreateRepairsRequest $request
     *
     * @return Response
     */
    public function store(CreateRepairsRequest $request)
    {
        $input = $request->all();

        $repairs = $this->repairsRepository->create($input);

        Flash::success('Repairs saved successfully.');

        return redirect(route('repairs.index'));
    }

    /**
     * Display the specified Repairs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $repairs = $this->repairsRepository->find($id);

        if (empty($repairs)) {
            Flash::error('Repairs not found');

            return redirect(route('repairs.index'));
        }

        return view('repairs.show')->with('repairs', $repairs);
    }

    /**
     * Show the form for editing the specified Repairs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $repairs = $this->repairsRepository->find($id);

        if (empty($repairs)) {
            Flash::error('Repairs not found');

            return redirect(route('repairs.index'));
        }

        return view('repairs.edit')->with('repairs', $repairs);
    }

    /**
     * Update the specified Repairs in storage.
     *
     * @param int $id
     * @param UpdateRepairsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRepairsRequest $request)
    {
        $repairs = $this->repairsRepository->find($id);

        if (empty($repairs)) {
            Flash::error('Repairs not found');

            return redirect(route('repairs.index'));
        }

        $repairs = $this->repairsRepository->update($request->all(), $id);

        Flash::success('Repairs updated successfully.');

        return redirect(route('repairs.index'));
    }

    /**
     * Remove the specified Repairs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $repairs = $this->repairsRepository->find($id);

        if (empty($repairs)) {
            Flash::error('Repairs not found');

            return redirect(route('repairs.index'));
        }

        $this->repairsRepository->delete($id);

        Flash::success('Repairs deleted successfully.');

        return redirect(route('repairs.index'));
    }

    public function generatePdf(Request $request){
        $repairs = Repair::get();
        // dd($repairs);
        $pdf = Pdf::loadView('repairs.generate-pdf', ['repairs' => $repairs]);
        return $pdf->download('repairs.pdf');
    }
}
