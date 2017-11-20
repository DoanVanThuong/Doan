<?php 
$curr = "news";
?>
@extends('master')
@section('title')
Tin Tức | Khoa CNTT - ĐH Mở TP.HCM
@stop
@section('define-css')
	<link rel="stylesheet" type="text/css" href="css/news.css">
@stop

@section('main-content')
	<main class="main-content">
        <section class="header-news" data-toggle="tooltip">
            <ul class="breadcrumb">
                <li><a href="/">Trang Chủ</a></li>
                <li class="active"><a href="/tin-tuc">Tin Tức</a></li>
            </ul>
            <div class="news-title"><a href="/tin-tuc " title="Tin Tức">Tin Tức</a></div>
        </section>
        <section class="content-news">
            <div class="container">
                @include('templates.news.news-content')
            </div>
        </section>
        <section class="footer-news">
            @include('templates.news.pagination')
            <div class="container">            	
                @include('templates.news.news-relative')
            </div>
        </section>
    </main>
@stop


@section('define-js')
	<script src="js/news.js"></script>
@stop

