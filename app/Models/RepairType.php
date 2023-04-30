<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairType extends Model
{
    use HasFactory;

    protected $table = 'repair_types';

    protected $fillable = [
        'name'
    ];

    public function repair_details()
    {
        return $this->hasMany(RepairDetail::class);
    }
}
