<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    public $fillable = [
        'name',
        'state',
        'latitude',
        'longitude'
    ];
}
