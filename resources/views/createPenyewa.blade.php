@extends('layout/main')
@section('title','CREATE DATA PENYEWA')
@section('konten')
<section id="main-content">
    <section class="wrapper">
        <div class="agileinfo-grap">
            <div class="agileits-box">
                <header class="agileits-box-header clearfix">
                <form action="/penyewa/store" method="POST">
                @csrf
                <div class="form-group">
                <label for ="nama">ID Penyewa</label>
                <input type ="text" class="form-control" id="id" placeholder="Masukkan Id_penyewa" name="id">
                </div>
                <div class="form-group">
                <label for ="nama">Nama Penyewa</label>
                <input type ="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
                </div>
                <div class="form-group">
                <label for ="nama">Date Sewa</label>
                <input type ="date" class="form-control" id="jam_sewa" placeholder="Masukkan Tanggal Sewa" name="jam_sewa">
                </div>
                <div class="form-group">
                <label for ="nama">No Telphone</label>
                <input type ="text" class="form-control" id="nohp" placeholder="Masukkan Nomor Telephone" name="nohp">
                </div>
                <div class="form-group">
                <label for ="nama">Alamat</label>
                <input type ="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat">
                </div>
                <div class="form-group">
                <label for ="nama">ID Lapangan</label>
                <input type ="text" class="form-control" id="id_lapangan" placeholder="Masukkan ID Lapangan" name="id_lapangan">
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