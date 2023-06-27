@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mahasiswa') }}</div>

                <div class="card-body">
                <a class="btn btn-secondary" href="/mahasiswa/create">Tambah Data</a>
                    <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>NAMA BUKU</th>
                <th>TANGGAL</th>
                <th>PENGEMBALIAN</th>
                <th>CATATAN</th>
                <th>AKSI</th>
            </tr>
            @foreach($mahasiswa as $m)
                <tr>
                    <td>{{$m->id}}</td>
                    <td>{{$m->nama}}</td>
                    <td>{{$m->nim}}</td>
                    <td>{{$m->nama_buku}}</td>
                    <td>{{$m->tanggal}}</td>
                    <td>{{$m->pengembalian}}</td>
                    <td>{{$m->catatan}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-secondary" href="/mahasiswa/{{$m->id}}/edit">Edit</a>
                            <form action="/mahasiswa/{{$m->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-dark" type="submit" value="Delete">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection


