<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'kategoria',
        'leiras',
        'hirdetesDatuma',
        'tehermentes',
        'ar',
        'kepUrl'
    ];
}
