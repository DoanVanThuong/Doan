<?php 
$curr = "news";
?>
@extends('master')
@section('title')
Hoạt động | Khoa CNTT - ĐH Mở TP.HCM
@stop
@section('define-css')
	<link rel="stylesheet" type="text/css" href="css/news.css">
@stop

@section('main-content')
	<main class="main-content">
        <section class="header-news">
            <ul class="breadcrumb">
                <li><a href="/">Trang Chủ</a></li>
                <li class="active"><a href="/hoat-dong">Hoạt động sinh viên</a></li>
            </ul>
            <div class="news-title"><a href="/hoat-dong " title="">Hoạt động sinh viên</a></div>
        </section>
        <section class="content-news">
            <div class="container">
                    <div class="row" data-toggle="tooltip">
                        @foreach($v_news as $item)
                            <div class="col-md-6 item-news clearfix">
                                <a href="/tin-tuc/{{$item->slug}}" title="{{$item->name}}" class="thumb">
                                    <img src="{{$item->image}}" class="img-responsive"  alt="">
                                </a>
                                <div class="content-wp">
                                    <a href="/tin-tuc/{{$item->slug}}" title="{{$item->name}}">{{$item ->name}}<span><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;({{$item->created_at}})</span></a>
                                    <p>{!!$item->sumary!!}</p>
                                    <a href="/tin-tuc/{{$item->slug}}" data-toggle="tooltip" class="view-more" title="Xem chi tiết">Xem chi tiết &nbsp;</a>
                                </div>
                            </div>    
                        @endforeach                       
                    </div>
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

