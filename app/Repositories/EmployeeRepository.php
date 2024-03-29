<?php

namespace App\Repositories;

use App\Models\Employee;
use App\Repositories\BaseRepository;

/**
 * Class EmployeeRepository
 * @package App\Repositories
 * @version April 30, 2023, 5:20 pm UTC
*/

class EmployeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'address',
        'phone_number',
        'role',
        'remember_token'
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
        return Employee::class;
    }
}
