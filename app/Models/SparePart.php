<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SparePart
 * @package App\Models
 * @version April 30, 2023, 6:59 pm UTC
 *
 * @property string $name
 * @property string $part_number
 * @property string $type
 * @property integer $vehicle_id
 */
class SparePart extends Model
{

    use HasFactory;

    public $table = 'spareparts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'part_number',
        'type',
        'vehicle_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'part_number' => 'string',
        'type' => 'string',
        'vehicle_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:192',
        'part_number' => 'required|string|max:192',
        'type' => 'required|string',
        'vehicle_id' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
