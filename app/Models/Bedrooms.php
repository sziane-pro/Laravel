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
        'nombrePlace',
        'prix',
    ];

    public function hotel(){
        return $this->belongsTo(Hotels::class, 'hotel_id');
    }
}
