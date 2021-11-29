<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Weather;
use App\Models\Locale;

class MainController extends Controller
{

    public function getAll() {
        
        $json = Http::get('http://127.0.0.1:8000/api/weather/sao%20paulo');
        $data = json_decode($json);
        
        return view('index', ['array' => $data]);
    }

    public function get($cidade) {
        $json = Http::get('http://127.0.0.1:8000/api/weather/' . $cidade);
        $data = json_decode($json);

        return view('index', ['array' => $data]);
    }
}
