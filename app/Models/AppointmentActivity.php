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
class AppointmentActivity extends EloquentModel
{
    use HasFactory;

    public $table = 'appointment_activity';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'project_id',
        'user_id',
        'description',
        'image_url'
    ];
}
