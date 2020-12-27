@extends('layout/main')
@section('title','UPDATE ADMIN LAPANGAN')
@section('konten')
<section id="main-content">
    <section class="wrapper">
        <div class="agileinfo-grap">
            <div class="agileits-box">
                <header class="agileits-box-header clearfix">
                @foreach($user as $us)
                <form action="/user/update" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                <input type="hidden" name="id" value="{{ $us->id }}"> <br/>
                </div>
                <div class="form-group">
                <label for ="nama">Nama Admin</label>
               <input type="text" class="form-control" required="required" name="name" value="{{ $us->name }}"> <br/>
                </div>
                <div class="form-group">
                <label for ="nama">Email</label>
               <input type="text" class="form-control" required="required" name="email" value="{{ $us->email}}"> <br/>
                </div>
                <div class="form-group">
                <label for ="nama">Password</label>
                <input type="Password" class="form-control" required="required" name="password" value="{{ $us->password}}"> <br/>
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