<?php

namespace App\Repositories;

use App\Models\SparePart;
use App\Repositories\BaseRepository;

/**
 * Class SparePartRepository
 * @package App\Repositories
 * @version April 30, 2023, 6:59 pm UTC
*/

class SparePartRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'part_number',
        'type',
        'vehicle_id'
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
        return SparePart::class;
    }
}
