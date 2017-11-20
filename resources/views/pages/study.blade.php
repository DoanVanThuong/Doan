<?php 
$curr = "study";
?>
@extends('master')

@section('title')
Đào Tạo | Khoa CNTT - ĐH Mở TP.HCM
@stop

@section('define-css')
<link rel="stylesheet"  href="css/study.css">
@stop

@section('main-content')
<main class="main-content">
    <section class="header-news">
        <ul class="breadcrumb">
            <li><a href="/">Trang Chủ</a></li>
            <li class="active"><a href="/dao-tao">Đào tạo</a></li>
        </ul>
    </section>
    <div class="banner-study " data-ix="float-in-on-load">
        <h2 class="banner-study-title">Chương trình Đào tạo khoa công nghệ thông tin</h2>
    </div>
    @include('templates.study.education')    
    @include('templates.study.history')
    @include('templates.study.teacher-list')
    @include('templates.study.science')
    
</main>

@stop

@section('define-js')
<script src="js/webflow.js"></script>
<script src="js/study.js"></script>


@stop