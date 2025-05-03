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
use App\Models\Kategori;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $berita = Berita::latest()->paginate(10);
        // $berita = Berita::with('kategori')->get();
        
        $berita = DB::table('berita')
        ->join('kategori', 'berita.kategori_berita_id', '=', 'kategori.id')
        ->select('berita.*', 'kategori.nama as nama')
        ->paginate(10);
        
        $kategori = Kategori::All();



        return view('pages.admin.berita.index', compact('berita','kategori'));
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
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
        ]);
        $validated['slug'] = Str::slug($validated['judul']);
        $validated['kategori_berita_id'] = $request->kategori_berita_id;
        $validated['penulis'] = $request->penulis;
        Berita::create($validated);
   
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan');
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
