@extends('layout/main')
@section('title','DATA PENYEWA')
@section('konten')
<section id="main-content">
    <section class="wrapper">
    <div class="agileinfo-grap">
        <div class="agileits-box">
        <header class="agileits-box-header clearfix">
        <a href="/penyewa/create" class="btn btn-primary my-5"> Tambah Data Penyewa</a>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">ID Penyewa</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">ID Lapangan</th>
            <th scope="col">No.Telphone</th>
            <th scope="col">Date Sewa</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($penyewa as $pyw)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$pyw->id}}</td>
            <td>{{$pyw->username}}</td>
            <td>{{$pyw->alamat}}</td>
            <td>{{$pyw->id_lapangan}}</td>
            <td>{{$pyw->nohp}}</td>
            <td>{{$pyw->jam_sewa}}</td>
            <td>
            <a href="/penyewa/edit/{{ $pyw->id}}" class="btn btn-success">UPDATE</a>
            <a href="/penyewa/destroy/{{ $pyw->id}}" class="btn btn-danger">HAPUS</a>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>
        <div class="toolbar">
                        </div>
                        </header>
                    <div class="agileits-box-body clearfix">
                 <div id="hero-area"></div>
            </div>
        </div>
    </div>      
    </section>
@endsection