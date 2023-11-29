<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    function PatientsData() {
        return view('consultation-form');
    }
}
