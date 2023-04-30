<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SupplierInventory
 * @package App\Models
 * @version April 30, 2023, 6:05 pm UTC
 *
 * @property integer $quantity_on_hand
 * @property number $price
 * @property integer $supplier_id
 * @property integer $spare_part_id
 */
class SupplierInventory extends Model
{

    use HasFactory;

    public $table = 'supplier_inventory';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'quantity_on_hand',
        'price',
        'supplier_id',
        'spare_part_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'quantity_on_hand' => 'integer',
        'price' => 'float',
        'supplier_id' => 'integer',
        'spare_part_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'quantity_on_hand' => 'required|integer',
        'price' => 'required|numeric',
        'supplier_id' => 'required',
        'spare_part_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
