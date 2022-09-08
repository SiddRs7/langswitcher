<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class UserLocationController extends Controller
{
    public function index()
    {
        $ip = '115.247.148.6';
        $userDetails = Location::get($ip);
        dd($userDetails);
        return view('location', compact('userDetails'));
    }
}
