<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotels;
use App\Models\Bedrooms;

class Reservations extends Model
{
    use HasFactory;

    protected $fillable = [
        'bedroomId',
        'nom',
        'prenom',
        'email',
        'telephone',
        'nombreAdulte',
        'nombreEnfant',
        'dateDebut',
        'dateFin',
    ];

    public function bedroom(){
        return $this->belongsTo(Bedrooms::class, 'bedroomId');
    }
}
