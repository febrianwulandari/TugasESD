@extends('layout/main')
@section('title','UPDATE DATA LAPANGAN')
@section('konten')
<section id="main-content">
    <section class="wrapper">
        <div class="agileinfo-grap">
            <div class="agileits-box">
                <header class="agileits-box-header clearfix">
                @foreach($lapangan as $lp)
                <form action="/lapangan/update" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                <input type="hidden" name="id" value="{{ $lp->id }}"> <br/>
                </div>
                <div class="form-group">
                <label for ="nama">Nama Lapangan</label>
               <input type="text" class="form-control" required="required" name="nama_lapangan" value="{{ $lp->nama_lapangan }}"> <br/>
                </div>
                <div class="form-group">
                <label for ="nama">Kategori</label>
               <input type="text" class="form-control" required="required" name="status" value="{{ $lp->status }}"> <br/>
                </div>
                <div class="form-group">
                <label for ="nama">Harga</label>
                <input type="text" class="form-control" required="required" name="harga" value="{{ $lp->harga}}"> <br/>
                </div>
                <button type="submit" class="btn btn-primary" value="Update Data"> Update Data</button>  
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