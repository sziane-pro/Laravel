<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'étoile',
    ];

    public function bedrooms(){
        return $this->hasMany(Bedrooms::class);
    }
}
