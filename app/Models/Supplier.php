<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Supplier
 * @package App\Models
 * @version April 30, 2023, 5:58 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 */
class Supplier extends Model
{

    use HasFactory;

    public $table = 'suppliers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'email',
        'phone',
        'address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:192',
        'email' => 'required|string|max:192',
        'phone' => 'required|string|max:192',
        'address' => 'required|string|max:192',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
