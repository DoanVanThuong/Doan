<?php 
$curr = "contact";
?>
@extends('master')
@section('title')
	Liên Hệ | Khoa CNTT - ĐH Mở Tp.HCM

@stop
@section('define-css')
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/news.css">


@stop

@section('main-content')
@include('templates.index.banner')
<main class="main-content">
    <section class="content" data-ix="float-in-on-load-2">
        <div class="container" >
            <div class="row">
                <!-- left-content -->
                <div class="col-md-9 col-sm-9 left-content">
                    <section class="address">                      
                        <div class="row">
                            <h2 class="address-title">Thông Tin Liên Hệ</h2>
                            <hr class="hr-news">
                            <div class="info-address">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <i class="fa fa-building" aria-hidden="true"></i> VĂN PHÒNG KHOA CÔNG NGHỆ THÔNG TIN
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        Phòng 401 (Lầu 4), số 35 - 37 Hồ Hảo Hớn, Phường Cô Giang, Quận 1, Thành phố Hồ Chí Minh, Việt Nam
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <i class="fa fa-phone" aria-hidden="true"></i> (84-8) 3838.6603
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <i class="fa fa-envelope" aria-hidden="true"></i> fcs@ou.edu.vn
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </section>
                    <!-- end section address -->
                    <section class="google-map">
                        <div id="map"></div>
                    </section>
                    <!-- /google map -->
                    <section class="branch ">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 item-branches active" data-l="10.7760576" data-lg="106.6893662">
                                <div class="icon-mapker hidden-xs"><i class="fa fa-caret-up" aria-hidden="true"></i></div>
                                <h4 class="branch-title" data-toggle="tooltip" title="Click để xem bản đồ">&nbsp;Cơ Sở Võ Văn Tần</h4>
                                <p>97 Võ Văn Tần, phường 6, quận 3, HCM </p>
                            </div>
                            <div class="col-md-4 col-sm-4 item-branches " data-l="10.817033" data-lg="106.6759040">
                                <div class="icon-mapker hidden-xs"><i class="fa fa-caret-up" aria-hidden="true"></i></div>
                                <h4 class="branch-title" data-toggle="tooltip" title="Click để xem bản đồ">&nbsp;Cơ Sở Nguyễn Kiệm</h4>
                                <p>371 Nguyễn Kiệm quận Gò Vấp, Tp.HCM</p>
                            </div>
                            <div class="col-md-4 col-sm-4 item-branches " data-l="10.7611666" data-lg="106.6925135">
                                <div class="icon-mapker hidden-xs"><i class="fa fa-caret-up" aria-hidden="true"></i></div>
                                <h4 class="branch-title" data-toggle="tooltip" title="Click để xem bản đồ">&nbsp;Cơ Sở Hồ Hảo Hớn</h4>
                                <p>35,37 Hồ Hảo Hớn,P.Cô Giang,Q.1,Tp.HCM</p>
                            </div>
                        </div>
                    </section>
                    <!-- / branch -->
                    <section class="contact ">
                        <div class="banner-contact">
                            <h4 class="banner-contact-title">Liên Hệ</h4>
                            <br>
                            <p>Điền đầy đủ thông tin để liên hệ với văn phòng khoa</p>
                        </div>                       
                            @include('templates.contact.contact')                       
                    </section>
                </div>
                <!-- end-left-content -->
                <!-- right=-content -->
                <div class="col-md-3 col-sm-3 right-content">
                    @include('templates.index.info-tuyensinh')
                	@include('templates.index.info-quickjob')
                	@include('templates.index.info-Utilitie')  
                </div>
                <!-- end right-content -->
            </div>
        </div>
    </section> 
</main>

@stop

@section('define-js')
    <script src="js/contact.js"></script>    
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2Qcxw_0TWYNdIrbrsuju7kjCWxlR5uGc&callback=initMap" async defer></script>


@stop