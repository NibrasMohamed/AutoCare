<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Order
 * @package App\Models
 * @version April 30, 2023, 6:03 pm UTC
 *
 * @property integer $customer_id
 * @property integer $spare_part_id
 * @property integer $quantity
 * @property string $status
 */
class Order extends Model
{

    use HasFactory;

    public $table = 'orders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'customer_id',
        'spare_part_id',
        'quantity',
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
        'spare_part_id' => 'integer',
        'quantity' => 'integer',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customer_id' => 'required',
        'spare_part_id' => 'required',
        'quantity' => 'required|integer',
        'status' => 'required|string|max:192',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
