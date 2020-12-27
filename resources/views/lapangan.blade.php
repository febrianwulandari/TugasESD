@extends('layout/main')
@section('title','DATA LAPANGAN')
@section('konten')
<section id="main-content">
    <section class="wrapper">
    <div class="agileinfo-grap">
        <div class="agileits-box">
        <header class="agileits-box-header clearfix">
        <a href="/lapangan/create" class="btn btn-primary my-5"> Tambah Data Lapangan</a>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">ID Lapangan</th>
            <th scope="col">Nama Lapangan</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

        @foreach($lapangan as $lap)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$lap->id}}</td>
            <td>{{$lap->nama_lapangan}}</td>
            <td>{{$lap->status}}</td>
            <td>{{$lap->harga}}</td>
            <td>
            <a href="/lapangan/edit/{{ $lap->id}}" class="btn btn-success">UPDATE</a>
            <a href="/lapangan/destroy/{{ $lap->id}}" class="btn btn-danger">HAPUS</a>
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