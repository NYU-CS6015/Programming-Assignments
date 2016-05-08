<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WeatherController extends Controller
{

public function getWeather($location)
{
  return "The weather at " . $location . "location is okay!!";
}

}
