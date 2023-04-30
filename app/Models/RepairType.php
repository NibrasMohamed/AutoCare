<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class RepairType
 * @package App\Models
 * @version April 30, 2023, 6:04 pm UTC
 *
 * @property string $name
 * @property string $description
 */
class RepairType extends Model
{

    use HasFactory;

    public $table = 'repair_types';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:192',
        'description' => 'required|string|max:192',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
