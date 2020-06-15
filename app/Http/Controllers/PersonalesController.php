<?php

namespace App\Http\Controllers;

use App\Personales;
use Illuminate\Http\Request;

class PersonalesController extends Controller
{
    public function personales()
    {
        return view('personales');
    }

    public function post(Personales $personales)
    {
        return view('personales');
    }
}
