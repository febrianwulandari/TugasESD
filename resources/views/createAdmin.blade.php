@extends('layout/main')
@section('title','CREATE DATA ADMIN')
@section('konten')
<section id="main-content">
    <section class="wrapper">
        <div class="agileinfo-grap">
            <div class="agileits-box">
                <header class="agileits-box-header clearfix">
                <form action="/user/store" method="POST">
                @csrf
                <div class="form-group">
                <label for ="nama">ID Admin</label>
                <input type ="text" class="form-control" id="id" placeholder="Masukkan Id Admin" name="id">
                </div>
                <div class="form-group">
                <label for ="nama">Nama</label>
                <input type ="text" class="form-control" id="name" placeholder="Masukkan Nama" name="name">
                </div>
                <div class="form-group">
                <label for ="nama">Email</label>
                <input type ="text" class="form-control" id="email" placeholder="Masukkan email" name="email">
                </div>
                <div class="form-group">
                <label for ="nama">Password</label>
                <input type ="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
                </div>
                <button type="submit" class="btn btn-primary"> Submit Data </button>
                </form>
                </header>
                    <div class="agileits-box-body clearfix">
                <div id="hero-area"></div>
            </div>
        </div>
    </div>      
</section>
@endsection