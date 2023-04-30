<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Employee
 * @package App\Models
 * @version April 30, 2023, 5:20 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $address
 * @property string $phone_number
 * @property string $role
 * @property string $remember_token
 */
class Employee extends Model
{

    use HasFactory;

    public $table = 'employees';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone_number',
        'role',
        'remember_token'
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
        'password' => 'string',
        'address' => 'string',
        'phone_number' => 'string',
        'role' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:192',
        'email' => 'required|string|max:192',
        'password' => 'required|string|max:192',
        'address' => 'required|string|max:192',
        'phone_number' => 'required|string|max:192',
        'role' => 'required|string',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function RepairUpdates()
    {
        return $this->hasMany(RepairUpdates::class);
    }
    
}
