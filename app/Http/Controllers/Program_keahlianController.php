<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Program_keahlianController extends Controller
{
    public function index()
    {
        return view('pages.guest.program_keahlian');
    }
}

