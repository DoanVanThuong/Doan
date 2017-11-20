<?php 
$curr = 'index';

?>
@extends('master')
@section('title')Trang Chủ | Khoa CNTT Trường ĐH Mở Tp.HCM
@stop
@section('main-content')
<main class="main-content">
    @include('templates.index.banner')
    <section class="content">
        <div class="container">
            <div class="row">
                <!-- left-content -->
            <div class="col-md-9 col-sm-9 left-content">
                @include('templates.index.news-info')
                @include('templates.index.news-student-info')
                @include('templates.index.news-study-info')                
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
    @include('templates.index.quick-link')    
    @include('templates.index.logo-slider')    
</main>

@stop