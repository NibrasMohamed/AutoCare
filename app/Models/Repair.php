<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;

    protected $table = 'repairs';

    protected $fillable = [
        'appointment_id', 'repair_detail_id', 'estimated_cost', 'actual_cost', 'status'
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function repairDetail()
    {
        return $this->belongsTo(RepairDetail::class);
    }
}
