@extends('layouts.master')

@section('content')

    <div class="container">
        <h1>Buat Data</h1>
        <form action="/mahasiswa/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Buku</label>
                <input type="text" name="nama_buku" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <select class="form-select" name="pengembalian">
                <option value="">Pilih Pengembalian</option>
                <option value="S">Sudah</option>
                <option value="B">Belum</option>
            </select><br>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Catatan</label>
                <textarea class="form-control" name="catatan" rows="10"></textarea><br>
            </div>
            <input type="submit" name="submit" class="btn btn-secondary" value="Simpan">

        </form>
    </div>
    
@endsection