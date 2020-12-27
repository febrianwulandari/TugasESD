@extends('layout/main')
@section('title','DATA ADMIN')
@section('konten')
<section id="main-content">
    <section class="wrapper">
    <div class="agileinfo-grap">
        <div class="agileits-box">
        <header class="agileits-box-header clearfix">
        <a href="/user/create" class="btn btn-primary my-5"> Tambah Data Admin</a>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">ID Admin</th>
            <th scope="col">Nama Admin</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

        @foreach($user as $us)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$us->id}}</td>
            <td>{{$us->name}}</td>
            <td>{{$us->email}}</td>
            <td>{{$us->password}}</td>
            <td>
            <a href="/user/edit/{{ $us->id}}" class="btn btn-success">UPDATE</a>
            <a href="/user/destroy/{{ $us->id}}" class="btn btn-danger">HAPUS</a>
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