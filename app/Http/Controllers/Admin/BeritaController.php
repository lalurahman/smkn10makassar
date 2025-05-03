<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\JurusanDataTable;
use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::latest()->paginate(10);
        return view('pages.admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $request->validate([
                'name' => 'required|string|max:255|unique:beritas,name',
                'description' => 'nullable|string|max:255',
            ]);
            Berita::create($data);
            DB::commit();
            return back()->with('success', 'Berita created successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Failed to create Berita: ' . $th->getMessage());
        }
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
