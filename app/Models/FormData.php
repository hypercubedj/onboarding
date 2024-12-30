<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;

    // Nom de la table
    protected $table = 'forms';

    // Colonnes qui peuvent être assignées en masse
    protected $fillable = [
        'name',
        'last_name',
        'dob',
        'birth_place',
        'gender',
        'email',
        'phone',
        'postal_address',
        'street',
        'city',
        'postal_code',
    ];
}
