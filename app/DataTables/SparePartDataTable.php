<?php

namespace App\DataTables;

use App\Models\SparePart;

/**
 * Class SparePartDataTable
 */
class SparePartDataTable
{
    /**
     * @return SparePart
     */
    public function get()
    {
        /** @var SparePart $query */
        $query = SparePart::query()->select('spareparts.*');

        return $query;
    }
}
