<?php
$curr = 'login';

 ?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập | Khoa CNTT ĐH Mở Tp.HCM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:image" content="image url here" />
    <meta property="og:type" content="website" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('lib/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('lib/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    @yield('define-css')
    <link rel="icon" href="{{asset('img/icon/map-logo.png')}}" type="image/gif" sizes="16x16">
    <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
@section('title') Đăng nhập | Khoa CNTT - ĐH Mở Tp.HCM @stop

	<div id="container">
		<main class="main-content">
            <div class="container">
                <div class="row" style="padding: 10px 0px 100px 0;">
                    <div id="login" style="margin:0px auto;width:50%;">
                        <h2 class="text-primary  text-center">Sinh viên dùng mã số sinh viên để đăng nhập</h2>
                        {{-- hàm hiển thị lỗi --}}
                        @if( count($errors) > 0 )
	                        <div class="alert alert-danger">
	                        	@foreach($errors ->all() as $item)
	                        	{{ $item }} <br>
	                        	@endforeach
	                        </div>
                        @endif
                        @if( session('thongbao') )
                        	<div class="alert alert-success">
                        		{{ session('thongbao') }}
                        	</div>
                        @endif()
                        {{--  --}}
                        <form action="/dang-nhap" style="" method="POST">

                            <div class="form-group">
                                <label for="mssv">Mã số sinh viên:</label>
                                <span style="color:red">*</span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user" ></i></span>
                                    <input type="mssv" class="form-control" id="mssv" placeholder="Nhập mssv" name="mssv">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <span style="color:red">*</span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                            {!!csrf_field()!!}
                            <button type="submit" style="box-shadow: 0 3px 2px #777" class="btn btn-primary">Đăng nhập</button>
                            &nbsp;&nbsp;
                            <button type="button" style="box-shadow: 0 3px 2px #777" class="btn btn-default right">

                            	<a href="/" class="text-success">Hủy</a>
                            </button>

                        </form>
                    </div>
                </div>
            </div>
    	</main>
    	<section class="bottom-footer">
	        <div class="container">
	            <p class="">Copyright © 2016 - OUHCMC. All Rights Reserved.</p>
	        </div>
    	</section>
	</div>
	
    <!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
    <script src="{{asset('js/vendor/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('lib/slick/slick.min.js')}}"></script>
    <!-- <script src="js/jquery-2.1.1.js"></script> -->
    <script src="{{asset('js/master.js')}}"></script>
    <script src="{{asset('js/webflow.js')}}"></script>      
    <script src="{{asset('js/home.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.0/TweenMax.min.js"></script>

  
    

