<?php
$curr = 'search';


?>
@extends('master')
@section('define-css')
<link rel="stylesheet" type="text/css" href="{{asset('css/news.css')}}">
@stop
@section('title')Tìm kiếm | Khoa CNTT Trường ĐH Mở TP.HCM @stop
@section('main-content')
	<main class="main-content">
        <section class="header-news">
            <ul class="breadcrumb">
                <li><a href="index.html">Trang Chủ</a></li>
                <li class="active"><a href="news.html">Tìm kiếm</a></li>
            </ul>
            <div class="news-title">Tìm kiếm: &nbsp;<span style="color:#E57022">{{$keyword}}</span> </div>

        </section>
        <section class="content-news">
            <div class="container">
                <div class="row">
                    <?php 
                        function higlight($string,$keyword)
                        {
                            return str_replace($keyword , "<strong style='color:red;'>$keyword</strong>" ,$string);
                        }   

                    ?>
                    <?php 
                        $n = 0;
                    ?>
                    @if($keyword != null)
                    	@foreach($tintuc as $item)

                        @if($item !=null)
                        <?php
                            $n++;
                         ?>

                        <div class="col-md-6 item-news clearfix">
                            <a href="javascript:void(0)" title="" class="thumb">
                                <img src="{{asset($item->image)}}" class="img-responsive"  alt="">
                            </a>
                            <div class="content-wp" data-toggle="tooltip">
                                <a href="news-detail.html" title="{{$item->name}} ">{!! higlight($item->name ,$keyword)!!}<span><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;({{$item->created_at}})</span></a>
                                <p>{!! higlight($item->sumary ,$keyword)!!}</p>
                                <a href="/tin-tuc/{{$item->slug}} " data-toggle="tooltip" class="view-more" title="Xem chi tiết">Xem chi tiết &nbsp;</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        {{-- neu không tim thay được tin nao --}}
                        @if($n == 0)
                        <div class="text-danger text-center" style="font-size:30px"><span><i class="fa fa-frown-o" aria-hidden="true"></i></span>&nbsp;Không tìm thấy kết quả tìm kiếm của bạn !</div>
                        @endif
                    @else
                    <div class="text-danger text-center" style="font-size:30px"><span><i class="fa fa-frown-o" aria-hidden="true"></i></span>&nbsp;Bản phải nhập từ khóa tìm kiếm</div>
                    @endif

                        
                </div>
            </div>
        </section>
        {{-- phan trang --}}
        {{-- <section class="footer-news">           
            {!!$tintuc->links()!!}    
        </section> --}}
    </main>

@stop


@section('define-js')
@stop