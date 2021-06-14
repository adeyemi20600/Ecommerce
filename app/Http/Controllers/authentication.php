<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authentication extends Controller
{
    function index($name)
    {
        return view('home', ['name' => $name]);
    }
}