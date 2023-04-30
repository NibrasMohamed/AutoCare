<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateManufacturerRequest;
use App\Http\Requests\UpdateManufacturerRequest;
use App\Repositories\ManufacturerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ManufacturerController extends AppBaseController
{
    /** @var ManufacturerRepository $manufacturerRepository*/
    private $manufacturerRepository;

    public function __construct(ManufacturerRepository $manufacturerRepo)
    {
        $this->manufacturerRepository = $manufacturerRepo;
    }

    /**
     * Display a listing of the Manufacturer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $manufacturers = $this->manufacturerRepository->all();

        return view('manufacturers.index')
            ->with('manufacturers', $manufacturers);
    }

    /**
     * Show the form for creating a new Manufacturer.
     *
     * @return Response
     */
    public function create()
    {
        return view('manufacturers.create');
    }

    /**
     * Store a newly created Manufacturer in storage.
     *
     * @param CreateManufacturerRequest $request
     *
     * @return Response
     */
    public function store(CreateManufacturerRequest $request)
    {
        $input = $request->all();

        $manufacturer = $this->manufacturerRepository->create($input);

        Flash::success('Manufacturer saved successfully.');

        return redirect(route('manufacturers.index'));
    }

    /**
     * Display the specified Manufacturer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $manufacturer = $this->manufacturerRepository->find($id);

        if (empty($manufacturer)) {
            Flash::error('Manufacturer not found');

            return redirect(route('manufacturers.index'));
        }

        return view('manufacturers.show')->with('manufacturer', $manufacturer);
    }

    /**
     * Show the form for editing the specified Manufacturer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $manufacturer = $this->manufacturerRepository->find($id);

        if (empty($manufacturer)) {
            Flash::error('Manufacturer not found');

            return redirect(route('manufacturers.index'));
        }

        return view('manufacturers.edit')->with('manufacturer', $manufacturer);
    }

    /**
     * Update the specified Manufacturer in storage.
     *
     * @param int $id
     * @param UpdateManufacturerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateManufacturerRequest $request)
    {
        $manufacturer = $this->manufacturerRepository->find($id);

        if (empty($manufacturer)) {
            Flash::error('Manufacturer not found');

            return redirect(route('manufacturers.index'));
        }

        $manufacturer = $this->manufacturerRepository->update($request->all(), $id);

        Flash::success('Manufacturer updated successfully.');

        return redirect(route('manufacturers.index'));
    }

    /**
     * Remove the specified Manufacturer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $manufacturer = $this->manufacturerRepository->find($id);

        if (empty($manufacturer)) {
            Flash::error('Manufacturer not found');

            return redirect(route('manufacturers.index'));
        }

        $this->manufacturerRepository->delete($id);

        Flash::success('Manufacturer deleted successfully.');

        return redirect(route('manufacturers.index'));
    }
}
