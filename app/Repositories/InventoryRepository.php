<?php

namespace App\Repositories;

use App\Models\Inventory;
use App\Repositories\BaseRepository;

/**
 * Class InventoryRepository
 * @package App\Repositories
 * @version April 30, 2023, 5:50 pm UTC
*/

class InventoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'spare_part_id',
        'quantity_on_hand',
        'price'
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
        return Inventory::class;
    }
}
