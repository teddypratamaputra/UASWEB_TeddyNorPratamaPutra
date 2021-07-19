@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                    <a href="{{ route('tambah.mahasiswa') }}"  class="float-right btn btn-dark btn-md"><i class="fa fa-fw fa-plus-circle"></i>Tambah Data</a></div>
                <div class="card-body">
                   <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th style="text-align: center;">No.</th>
                            <th style="text-align: center;">NPM</th>
                            <th style="text-align: center;">NAMA LENGKAP</th>
                            <th style="text-align: center;">TEMPAT, TANGGAL LAHIR</th>
                            <th style="text-align: center;">JENIS KELAMIN</th>
                            <th style="text-align: center;">TELEPON</th>
                            <th style="text-align: center;">ALAMAT</th>
                            <th style="text-align: center;">AKSI</th>
                        </tr>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($mahasiswa as $mhs)
                        <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $mhs->npm}}</td>
                        <td>{{ $mhs->user->name }}</td>
                        <td>{{ $mhs->tempat_lahir.', '.$mhs->tgl_lahir }}</td>
                        <td>{{ $mhs->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $mhs->telepon }}</td>
                        <td>{{ $mhs->alamat }}</td>
                        <td>
                            <a href="{{ route('edit.mahasiswa', $mhs->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                            <a href="{{ route('hapus.mahasiswa', $mhs->id) }}" class="btn btn-sm btn-danger">HAPUS</a>
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
