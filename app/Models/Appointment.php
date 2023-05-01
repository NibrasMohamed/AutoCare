<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * Class Appointment
 * @package App\Models
 * @version April 30, 2023, 6:07 pm UTC
 *
 * @property integer $customer_id
 * @property integer $vehicle_id
 * @property string|\Carbon\Carbon $appointment_date
 * @property string $status
 */
class Appointment extends EloquentModel
{

    use HasFactory;

    public $table = 'appointments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'customer_id',
        'vehicle_id',
        'appointment_date',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'vehicle_id' => 'integer',
        'appointment_date' => 'datetime',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customer_id' => 'required',
        'vehicle_id' => 'required',
        'appointment_date' => 'required',
        'status' => 'required|string|max:192',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
