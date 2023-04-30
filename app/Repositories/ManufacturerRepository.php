<?php

namespace App\Repositories;

use App\Models\Manufacturer;
use App\Repositories\BaseRepository;

/**
 * Class ManufacturerRepository
 * @package App\Repositories
 * @version April 30, 2023, 6:07 pm UTC
*/

class ManufacturerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Manufacturer::class;
    }
}
