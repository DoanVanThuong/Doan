<?php 
$curr = "a";
?>
@extends('404')
@section('title')
Không tìm thấy trang | Khoa CNTT ĐH Mở Tp.HCM
@stop

@section('define-css')
{{-- <link rel="stylesheet" type="text/css" href="css/news.css"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/404.css')}}">

@stop

@section('main-content')
	<main class="main-content">
       <!-- main -->
	<div class="agileits-main"> 
		<div class="agileinfo-row">
				
			<div class="w3layouts-errortext">
				<h2>4<span>0</span>4</h2>				
				<h1>Rất tiếc ! Trang bạn yêu cầu không tìm thấy </h1>
				<p class="w3lstext">Bạn đã được đăng nhập vào một liên kết có thể không tìm thấy. Hãy kiểm tra địa chỉ hoặc đi tới <a href="/">Trang chủ</a> để thử lại </p>
				
				<div class="w3top-nav-right">	
					<ul>
						<li><a href="/">Trang chủ</a></li>
						<li><a href="/tin-tuc">Tin tức</a></li>  
						<li><a href="/gioi-thieu">Giới thiệu</a></li> 
						<li><a href="/lien-he">Liên hệ</a></li>
					</ul> 
				</div>	
			</div>	
		</div>	
	</div>	
	<!-- //main -->
	<!-- copyright -->
	<div class="copyright w3-agile">
		<p>© 2017 Khoa CNTT . All rights reserved </p>
	</div>
	<!-- //copyright --> 
    </main>
@stop


 