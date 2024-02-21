<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotels;

class Bedrooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'hotelId',
        'nombrePlace',
        'prix',
        'image',
    ];

    public function hotel(){
        return $this->belongsTo(Hotels::class, 'hotelId');
    }

    public function reservations(){
        return $this->hasMany(Reservations::class, 'bedroomId');
    }
}
