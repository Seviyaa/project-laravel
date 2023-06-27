@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Edit Data</h1>

    <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->nama}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->nim}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Buku</label>
                <input type="text" name="nama_buku" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->nama_buku}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->tanggal}}">
            </div>

            <select class="form-select" name="pengembalian">
                <option value="">Pilih Pengembalian</option>
                <option value="S" @if($mahasiswa->pengembalian == "S") selected @endif>Sudah</option>
                <option value="B" @if($mahasiswa->pengembalian == "B") selected @endif>>Belum</option>
            </select><br>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Catatan</label>
                <textarea class="form-control" name="catatan" rows="10">{{$mahasiswa->catatan}}</textarea><br>
            </div>
            <input type="submit" name="submit" class="btn btn-secondary" value="Simpan">

    </form>
    </div>

@endsection