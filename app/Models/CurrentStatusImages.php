<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentStatusImages extends Model
{
    use HasFactory;

    protected $table = 'current_status_images';

    protected $fillable = [
        'appointment_id', 'image_path', 'description',
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
