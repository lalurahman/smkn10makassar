<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\JurusanDataTable;
use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JurusanController extends Controller
{
    public function index(JurusanDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.jurusan.index');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $request->validate([
                'name' => 'required|string|max:255|unique:jurusans,name',
                'description' => 'nullable|string|max:255',
            ]);
            Jurusan::create($data);
            DB::commit();
            return back()->with('success', 'Jurusan created successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Failed to create jurusan: ' . $th->getMessage());
        }
    }

    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('pages.admin.jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $jurusan = Jurusan::findOrFail($id);
            $data = $request->all();
            $request->validate([
                'name' => 'required|string|max:255|unique:jurusans,name,' . $jurusan->id,
                'description' => 'nullable|string|max:255',
            ]);
            $jurusan->update($data);
            DB::commit();
            return to_route('admin.jurusan.index')->with('success', 'Jurusan updated successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Failed to update jurusan: ' . $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $jurusan = Jurusan::findOrFail($id);
            $jurusan->delete();
            DB::commit();
            return Response::success(NULL, 'Jurusan deleted successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return Response::error(NULL, 'Failed to delete jurusan: ' . $th->getMessage());
        }
    }
}
