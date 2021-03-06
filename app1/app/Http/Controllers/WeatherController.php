<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function getWeather()
    {
        $request = 'http://api.openweathermap.org/data/2.5/forecast/?APPID=9a505cc9de1de6dfa3cd808d0dd98695&q=Amman';
        $response  = file_get_contents($request);
        $jsonobj  = json_decode($response);
        return view('welcome',array('temp' => $jsonobj -> message  
                                    ));
    }
}
