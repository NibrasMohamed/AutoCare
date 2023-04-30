<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Vehicle
 * @package App\Models
 * @version April 30, 2023, 6:20 pm UTC
 *
 * @property string $model
 * @property string $type
 * @property integer $manufacturer_id
 * @property string $year
 */
class Vehicle extends Model
{

    use HasFactory;

    public $table = 'vehicles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'model',
        'type',
        'manufacturer_id',
        'year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'model' => 'string',
        'type' => 'string',
        'manufacturer_id' => 'integer',
        'year' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'model' => 'required|string|max:192',
        'type' => 'required|string',
        'manufacturer_id' => 'required',
        'year' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
