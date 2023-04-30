<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpareParts extends Model
{
    use HasFactory;

    protected $table = 'spare_parts';
    protected $fillable = [
        'name',
        'part_number',
        'type',
        'vehicle_id',
    ];

    public function vehicles(){
        return $this->belongsToMany(Vehicle::class, 'vehicles');
    }
}
