<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.guest.blog');
    }

    public function detail()
    {
        return view('pages.guest.blog-detail');
    }
}
