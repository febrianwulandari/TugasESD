@extends('layout/main')
@section('title','UPDATE DATA PENYEWA')
@section('konten')
<section id="main-content">
    <section class="wrapper">
        <div class="agileinfo-grap">
            <div class="agileits-box">
                <header class="agileits-box-header clearfix">
                @foreach($penyewa as $pyw)
                <form action="/penyewa/update" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                <input type="hidden" name="id" value="{{ $pyw->id}}"> <br/>
                </div>
                <div class="form-group">
                <label for ="nama">Username</label>
               <input type="text" class="form-control" required="required" name="username" value="{{ $pyw->username }}"> <br/>
                </div>
                <div class="form-group">
                <label for ="nama">Alamat</label>
               <input type="text" class="form-control" required="required" name="alamat" value="{{ $pyw->alamat }}"> <br/>
                </div>
                <div class="form-group">
                <label for ="nama">ID Lapangan</label>
                <input type="text" class="form-control" required="required" name="id_lapangan" value="{{ $pyw->id_lapangan }}"> <br/>
                </div>
                <div class="form-group">
                <label for ="nama">No Telp</label>
                <input type="text"class="form-control" required="required" name="nohp" value="{{ $pyw->nohp }}"> <br/>
                </div>
                <div class="form-group">
                <label for ="nama">Jam Sewa</label>
                <input type="date" class="form-control" required="required" name="jam_sewa" value="{{ $pyw->jam_sewa }}"> <br/>
                </div>
                <input  type="submit" class="btn btn-primary" value="Update Data"> 
                </form>
                @endforeach
                </header>
                    <div class="agileits-box-body clearfix">
                <div id="hero-area"></div>
            </div>
        </div>
    </div>      
</section>
@endsection