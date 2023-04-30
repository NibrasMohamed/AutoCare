<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Repairs
 * @package App\Models
 * @version April 30, 2023, 5:40 pm UTC
 *
 * @property integer $appointment_id
 * @property string $name
 * @property string $description
 * @property number $cost
 */
class Repairs extends Model
{

    use HasFactory;

    public $table = 'repairs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'appointment_id',
        'name',
        'description',
        'cost'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'appointment_id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'cost' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'appointment_id' => 'required',
        'name' => 'required|string|max:192',
        'description' => 'required|string|max:192',
        'cost' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
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
