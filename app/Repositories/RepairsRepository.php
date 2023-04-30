<?php

namespace App\Repositories;

use App\Models\Repairs;
use App\Repositories\BaseRepository;

/**
 * Class RepairsRepository
 * @package App\Repositories
 * @version April 30, 2023, 5:40 pm UTC
*/

class RepairsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'appointment_id',
        'name',
        'description',
        'cost'
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
        return Repairs::class;
    }
}
