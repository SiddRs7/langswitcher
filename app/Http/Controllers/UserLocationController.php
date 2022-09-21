<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class UserLocationController extends Controller
{
    public function index()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $userDetails = Location::get($ip);
        dd($userDetails);
        return view('location', compact('userDetails'));
    }
}
