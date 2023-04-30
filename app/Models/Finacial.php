<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finacial extends Model
{
    use HasFactory;

    protected $table = 'financials';

    protected $fillable = [
        'appointment_id', 'amount', 'paid', 'balance'
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
