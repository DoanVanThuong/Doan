<?php 
$curr = "jobs";
?>
@extends('master')

@section('title')
Tin tuyển dụng | Khoa CNTT - ĐH Mở TP.HCM
@stop
@section('main-content')
<main class="main-content" data-ix="float-in-on-load">
    <section class="header-news">
        <ul class="breadcrumb">
            <li><a href="/index">Trang Chủ</a></li>
            <li class="active"><a href="/tuyen-dung">Tuyển dụng</a></li>
        </ul>
    </section>
	<section class="job-header" data-ix="float-in-on-load">
        <div class="job-banner">
            <div class="job-banner-title">Tuyển dụng Việc làm & Thực tập Công nghệ thông tin</div>    
        </div>
    </section>
    <section class="content" data-ix="float-in-on-scroll">
        <div class="container">
            <!-- left-content -->
            <div class="col-md-9 col-sm-9 left-content">
                <div class="row">
                    @include('templates.detail.jobs-detail')
                </div>
                {{-- @include('templates.jobs.jobs-comment')					 --}}
                @include('templates.jobs.jobs-relative')
            </div>                	
            <!-- end-left-content -->
            <!-- right=-content -->
            <div class="col-md-3 col-sm-3 right-content">
                @include('templates.index.info-tuyensinh')
                @include('templates.index.info-Utilitie')
            </div>
            <!-- end right-content -->
        </div>
    </section>
    @include('templates.jobs.logo-company-slider')            
</main>
@stop

@section('define-css')
<link rel="stylesheet" type="text/css" href="{{asset('css/jobs.css')}}">
<link rel="stylesheet" href="{{asset('css/job-detail.css')}}">
<link rel="stylesheet" href="{{asset('css/news-detail.css')}}">



@stop

@section('define-js')
<script src="{{asset('js/jobs.js')}}"></script>
<script src="{{asset('js/news.js')}}"></script>

@stop