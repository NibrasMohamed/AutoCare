<?php

namespace App\DataTables;

use App\Models\Employee;

/**
 * Class EmployeeDataTable
 */
class EmployeeDataTable
{
    /**
     * @return Employee
     */
    public function get()
    {
        /** @var Employee $query */
        $query = Employee::query()->select('employees.*');

        return $query;
    }
}
