@extends('layout/main')
@section('title','HOME')
@section('konten')
<section id="main-content">
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-eye"> </i>
                    </div>
                     <div class="col-md-8 market-update-left">
                     <h4>FUTSAL</h4>
                    <h3>13,500</h3>
                    <p>Banyak Data Penyewa Lapangan Futsal</p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-users" ></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                    <h4>VOLI</h4>
                        <h3>1,250</h3>
                        <p>Banyak Data Penyewa Lapangan Voli</p>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-usd"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>BULUTANGKIS</h4>
                        <h3>1,500</h3>
                        <p>Banyak Data Penyewa Lapangan Bulutangkis</p>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-4">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>RENANG</h4>
                        <h3>1,500</h3>
                        <p>Banyak Data Penyewa Kolam Renang</p>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
           <div class="clearfix"> </div>
        </div>  
        <!-- //market-->
        <div class="row">
            <div class="panel-body">
                <div class="col-md-12 w3ls-graph">
                    <!--agileinfo-grap-->
                        <div class="agileinfo-grap">
                            <div class="agileits-box">
                                <header class="agileits-box-header clearfix">
                                    <h3>ABOUT SPORTIFY</h3>
                                        <div class="toolbar">
                                            <h5>
                                                Sportify is a rental application for sports venues such as basketball courts, futsal courts, soccer fields, badminton courts, etc. This application was made with the aim of making it easier for users to rent a sports field where the user does not need to go to the sport venue directly to book a place. the sportify features are as follows:
                                                <p>1. Create Data</p>
                                                <p>2. Update Data</p>
                                                <p>3. Delete Data</p>
                                                <p>4. Show Data</p>
                                            </h5>
                                        </div>
                                </header>
                                <div class="agileits-box-body clearfix">
                                    <div id="hero-area"></div>
                                </div>
                            </div>
                        </div>
    <!--//agileinfo-grap-->

                </div>
            </div>
        </div>
</section>
@endsection
