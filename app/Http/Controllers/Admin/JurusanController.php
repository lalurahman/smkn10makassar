<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\JurusanDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index(JurusanDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.jurusan.index');
    }
}
