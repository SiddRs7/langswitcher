<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class UserLocationController extends Controller
{
    public function index()
    {
        $ip = '122.173.32.207';
        $userDetails = Location::get($ip);
        dd($userDetails);
        return view('location', compact('userDetails'));
    }
}
