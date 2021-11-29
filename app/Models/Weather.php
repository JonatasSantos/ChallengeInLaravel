<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{

    public $fillable = [
        'date',
        'text',
        'temperature_min',
        'temperature_max',
        'rain_probability',
        'rain_precipitation'
    ];
}
