<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        $nameCity = ($request->cityName) ? $request->cityName : 'hanoi';
        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
                "q" => $nameCity,
                "appid" => "02e3323f29bc461c2346db2fe3989729"
            ]
        );
        $city=$request->cityName;
        $data = json_decode($response->body());
        $temperature = $data->main->temp - 273;
        $weather = $data->weather[0]->main;
        return view('admin. weather.weather', compact('temperature','city', 'weather'));

    }
}
