<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRepairTypeRequest;
use App\Http\Requests\UpdateRepairTypeRequest;
use App\Repositories\RepairTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RepairTypeController extends AppBaseController
{
    /** @var RepairTypeRepository $repairTypeRepository*/
    private $repairTypeRepository;

    public function __construct(RepairTypeRepository $repairTypeRepo)
    {
        $this->repairTypeRepository = $repairTypeRepo;
    }

    /**
     * Display a listing of the RepairType.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $repairTypes = $this->repairTypeRepository->all();

        return view('repair_types.index')
            ->with('repairTypes', $repairTypes);
    }

    /**
     * Show the form for creating a new RepairType.
     *
     * @return Response
     */
    public function create()
    {
        return view('repair_types.create');
    }

    /**
     * Store a newly created RepairType in storage.
     *
     * @param CreateRepairTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateRepairTypeRequest $request)
    {
        $input = $request->all();

        $repairType = $this->repairTypeRepository->create($input);

        Flash::success('Repair Type saved successfully.');

        return redirect(route('repairTypes.index'));
    }

    /**
     * Display the specified RepairType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $repairType = $this->repairTypeRepository->find($id);

        if (empty($repairType)) {
            Flash::error('Repair Type not found');

            return redirect(route('repairTypes.index'));
        }

        return view('repair_types.show')->with('repairType', $repairType);
    }

    /**
     * Show the form for editing the specified RepairType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $repairType = $this->repairTypeRepository->find($id);

        if (empty($repairType)) {
            Flash::error('Repair Type not found');

            return redirect(route('repairTypes.index'));
        }

        return view('repair_types.edit')->with('repairType', $repairType);
    }

    /**
     * Update the specified RepairType in storage.
     *
     * @param int $id
     * @param UpdateRepairTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRepairTypeRequest $request)
    {
        $repairType = $this->repairTypeRepository->find($id);

        if (empty($repairType)) {
            Flash::error('Repair Type not found');

            return redirect(route('repairTypes.index'));
        }

        $repairType = $this->repairTypeRepository->update($request->all(), $id);

        Flash::success('Repair Type updated successfully.');

        return redirect(route('repairTypes.index'));
    }

    /**
     * Remove the specified RepairType from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $repairType = $this->repairTypeRepository->find($id);

        if (empty($repairType)) {
            Flash::error('Repair Type not found');

            return redirect(route('repairTypes.index'));
        }

        $this->repairTypeRepository->delete($id);

        Flash::success('Repair Type deleted successfully.');

        return redirect(route('repairTypes.index'));
    }
}
