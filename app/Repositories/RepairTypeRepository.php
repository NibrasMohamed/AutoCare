<?php

namespace App\Repositories;

use App\Models\RepairType;
use App\Repositories\BaseRepository;

/**
 * Class RepairTypeRepository
 * @package App\Repositories
 * @version April 30, 2023, 6:04 pm UTC
*/

class RepairTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
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
        return RepairType::class;
    }
}
