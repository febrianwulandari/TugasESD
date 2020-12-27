@extends('layout/main')
@section('title','CREATE DATA LAPANGAN')
@section('konten')
<section id="main-content">
    <section class="wrapper">
        <div class="agileinfo-grap">
            <div class="agileits-box">
                <header class="agileits-box-header clearfix">
                <form action="/lapangan/store" method="POST">
                @csrf
                <div class="form-group">
                <label for ="nama">ID Lapangan</label>
                <input type ="text" class="form-control" id="id" placeholder="Masukkan Id lapangan" name="id">
                </div>
                <div class="form-group">
                <label for ="nama">Nama Lapangan</label>
                <input type ="text" class="form-control" id="nama_lapangan" placeholder="Masukkan Nama Lapangan" name="nama_lapangan">
                </div>
                <div class="form-group">
                <label for ="nama">Kategori</label>
                <input type ="text" class="form-control" id="status" placeholder="Masukkan Kategori" name="status">
                </div>
                <div class="form-group">
                <label for ="nama">Harga</label>
                <input type ="text" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga">
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