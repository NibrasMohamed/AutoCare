<?php

namespace App\Repositories;

use App\Models\SupplierInventory;
use App\Repositories\BaseRepository;

/**
 * Class SupplierInventoryRepository
 * @package App\Repositories
 * @version April 30, 2023, 6:05 pm UTC
*/

class SupplierInventoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'quantity_on_hand',
        'price',
        'supplier_id',
        'spare_part_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SupplierInventory::class;
    }
}
