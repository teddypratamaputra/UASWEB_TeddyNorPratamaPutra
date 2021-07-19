@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nilai Mahasiswa
                <a href="{{ route('tambah.nilai') }}" class="btn btn-md btn-dark float-right"> <i class="fa fa-fw fa-plus-circle"></i>Tambah Nilai</a></div>
                <div class="card-body">
                   <div class="table-responsive">
                    <table class="table table-bordered">
                    <tr>
                            <th style="text-align: center;">No.</th>
                            <th style="text-align: center;">NPM</th>
                            <th style="text-align: center;">Nama Lengkap</th>
                            <th style="text-align: center;">Nama Makul</th>
                            <th style="text-align: center;">SKS</th>
                            <th style="text-align: center;">Nilai</th>
                            <th style="text-align: center;">AKSI</th>
                        </tr>
                        @php
                            $no = 1;
                        @endphp

                        @foreach ($nilai as $n)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $n->mahasiswa->npm}}</td>
                            <td>{{ $n->mahasiswa->user->name }}</td>
                            <td>{{ $n->makul->nama_makul}}</td>
                            <td>{{ $n->makul->sks }}</td>
                            <td>{{ $n->nilai}}</td>
                            <td>
                            <a href="{{ route('edit.nilai', $n->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('hapus.nilai', $n->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
