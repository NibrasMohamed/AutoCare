<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Inventory
 * @package App\Models
 * @version April 30, 2023, 5:50 pm UTC
 *
 * @property integer $spare_part_id
 * @property integer $quantity_on_hand
 * @property number $price
 */
class Inventory extends Model
{

    use HasFactory;

    public $table = 'inventory';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'spare_part_id',
        'quantity_on_hand',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'spare_part_id' => 'integer',
        'quantity_on_hand' => 'integer',
        'price' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'spare_part_id' => 'required',
        'quantity_on_hand' => 'required|integer',
        'price' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function sparePart()
    {
        return $this->belongsTo(SparePart::class, 'spare_part_id');
    }
}
