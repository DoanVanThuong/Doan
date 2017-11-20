<?php 
$curr = "news";
?>
@extends('master')
@section('title')
Tin Tức | Khoa CNTT - ĐH Mở TP.HCM
@stop
@section('define-css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/news-detail.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/news.css')}}">
    <style type="text/css" media="screen">
        #modal-login .modal-footer a{
            padding:8px 6px;
            background: #1C5EBE;
            color:#fff;

        }
    </style>

@stop

@section('main-content')
    <main class="main-content">
        <section class="header-news">
            <ul class="breadcrumb">
                <li><a href="/">Trang Chủ</a></li>
                <li class="active"><a href="/tin-tuc">Tin Tức</a></li>
            </ul>
            <div class="news-title"><a href="/tin-tuc " title="">Tin Tức</a></div>
        </section>
        @include('templates.detail.detail-news')
        <section class="footer-news-detail-wp">
            <div class="news-title"><a href="javascript:void(0) " title="">Tin liên quan</a></div>
            <div class="container">
                 @include('templates.detail.detail-news-relative')    
                
            </div>
        </section>   
        
    </main>
@stop
<!-- Modal -->
<div id="modal-login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Khoa CNTT | ĐH Mở TP.HCM</h4>
      </div>
      <div class="modal-body">
        <p>Bạn phải đăng nhập mới được comment</p>
      </div>
      <div class="modal-footer">       
            <button >
            <a href="/dang-nhap"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Đăng nhập</a>
            </button>            
      </div>
    </div>
  </div>
</div>
@section('define-js')
    <script src="{{asset('js/news.js')}}"></script>

@stop

