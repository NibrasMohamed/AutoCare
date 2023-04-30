<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSupplierInventoryRequest;
use App\Http\Requests\UpdateSupplierInventoryRequest;
use App\Repositories\SupplierInventoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SupplierInventoryController extends AppBaseController
{
    /** @var SupplierInventoryRepository $supplierInventoryRepository*/
    private $supplierInventoryRepository;

    public function __construct(SupplierInventoryRepository $supplierInventoryRepo)
    {
        $this->supplierInventoryRepository = $supplierInventoryRepo;
    }

    /**
     * Display a listing of the SupplierInventory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $supplierInventories = $this->supplierInventoryRepository->all();

        return view('supplier_inventories.index')
            ->with('supplierInventories', $supplierInventories);
    }

    /**
     * Show the form for creating a new SupplierInventory.
     *
     * @return Response
     */
    public function create()
    {
        return view('supplier_inventories.create');
    }

    /**
     * Store a newly created SupplierInventory in storage.
     *
     * @param CreateSupplierInventoryRequest $request
     *
     * @return Response
     */
    public function store(CreateSupplierInventoryRequest $request)
    {
        $input = $request->all();

        $supplierInventory = $this->supplierInventoryRepository->create($input);

        Flash::success('Supplier Inventory saved successfully.');

        return redirect(route('supplierInventories.index'));
    }

    /**
     * Display the specified SupplierInventory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $supplierInventory = $this->supplierInventoryRepository->find($id);

        if (empty($supplierInventory)) {
            Flash::error('Supplier Inventory not found');

            return redirect(route('supplierInventories.index'));
        }

        return view('supplier_inventories.show')->with('supplierInventory', $supplierInventory);
    }

    /**
     * Show the form for editing the specified SupplierInventory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $supplierInventory = $this->supplierInventoryRepository->find($id);

        if (empty($supplierInventory)) {
            Flash::error('Supplier Inventory not found');

            return redirect(route('supplierInventories.index'));
        }

        return view('supplier_inventories.edit')->with('supplierInventory', $supplierInventory);
    }

    /**
     * Update the specified SupplierInventory in storage.
     *
     * @param int $id
     * @param UpdateSupplierInventoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSupplierInventoryRequest $request)
    {
        $supplierInventory = $this->supplierInventoryRepository->find($id);

        if (empty($supplierInventory)) {
            Flash::error('Supplier Inventory not found');

            return redirect(route('supplierInventories.index'));
        }

        $supplierInventory = $this->supplierInventoryRepository->update($request->all(), $id);

        Flash::success('Supplier Inventory updated successfully.');

        return redirect(route('supplierInventories.index'));
    }

    /**
     * Remove the specified SupplierInventory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $supplierInventory = $this->supplierInventoryRepository->find($id);

        if (empty($supplierInventory)) {
            Flash::error('Supplier Inventory not found');

            return redirect(route('supplierInventories.index'));
        }

        $this->supplierInventoryRepository->delete($id);

        Flash::success('Supplier Inventory deleted successfully.');

        return redirect(route('supplierInventories.index'));
    }
}
