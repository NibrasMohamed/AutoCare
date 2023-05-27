<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairDetail extends Model
{
    use HasFactory;

    protected $table = 'repair_details';

    protected $fillable = [
        'repair_id','repair_type_id', 'name', 'estimated_cost'
    ];

    public function repairType()
    {
        return $this->belongsTo(RepairType::class);
    }

    public function repair()
    {
        return $this->belongsTo(Repair::class);
    }
}
