<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairUpdates extends Model
{
    use HasFactory;

    protected $table = 'repair_updates';
    protected $fillable = ['repair_id', 'description', 'employee_id', 'created_at'];
    public $timestamps = true;
    
    public function repair()
    {
        return $this->belongsTo('App\Repair');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
