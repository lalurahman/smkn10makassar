@extends('layouts.admin')

@section('title', 'Berita')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="p-6">
                <h1 class="text-xl font-bold mb-4">Daftar Berita</h1>
                {{-- <a href="{{ route('') }}" class="mb-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Tambah Berita</a> --}}
                <div class="mb-5">
                    <!-- Tombol -->
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreate">+ Tambah Berita</a>
        
                </div>
        
                <table class="w-full border">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border px-4 py-2">Judul</th>
                            <th class="border px-4 py-2">Isi</th>
                            <th class="border px-4 py-2">Kategori</th>
                            <th class="border px-4 py-2">Penulis</th>
                            <th class="border px-4 py-2">Ditulis pada</th>
                            <th class="border px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($berita as $b)
                            <tr>
                                <td class="border px-4 py-2">{{ $b->judul }}</td>
                                <td class="border px-4 py-2">{{ $b->isi }}</td>
                                <td class="border px-4 py-2">{{ $b->nama}}</td>
                                <td class="border px-4 py-2">{{ $b->penulis }}</td>
                                <td class="border px-4 py-2">{{ $b->created_at}}</td>
                                <td class="border px-4 py-2">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="#" class="text-primary hover:text-blue-600">
                                            <i class="bi bi-eye fs-5"></i>
                                        </a>
                                        <a href="#" class="text-warning hover:text-orange-600">
                                            <i class="bi bi-pencil-square fs-5"></i>
                                        </a>
                                        <a href="#" class="text-danger hover:text-red-600">
                                            <i class="bi bi-trash fs-5"></i>
                                        </a>
                                        
                                    </div>
                                </td>
                               
                                    <!-- Edit/Delete buttons -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@endsection


<!-- Modal -->
<div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="modalCreateLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="{{ route('admin.berita.store') }}">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreateLabel">Tambah Berita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi</label>
                    <textarea name="isi" class="form-control" rows="4" required></textarea>
                </div>
                {{-- <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <textarea name="kategori" class="form-control" rows="4" required></textarea>
                </div> --}}
                <div class="mb-3">
                    <label for="kategori_id" class="form-label">Kategori</label>
                    <select name="kategori_berita_id" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach($kategori as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                            {{-- {{dd($kategori-> all())}} --}}
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" name="penulis" class="form-control" required>
                </div>
                {{-- <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="ditampilkan_pada" class="form-control" required>
                </div> --}}
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
    </form>
  </div>
</div>
