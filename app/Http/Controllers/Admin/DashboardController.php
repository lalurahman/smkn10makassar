<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countJurusan = Jurusan::count();
        return view('pages.admin.dashboard.index', compact([
            'countJurusan',
        ]));
    }
}
