<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairImage extends Model
{
    use HasFactory;

    protected $table = 'repair_images';
   
    protected $fillable = [
        'repair_id', 'path'
    ];

    public function repair()
    {
        return $this->belongsTo(Repair::class);
    }
}
