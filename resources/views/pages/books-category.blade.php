<?php 
$curr = "books";
?>

@extends('master')
@section('title')
Sách | Khoa CNTT - ĐH Mở TP.HCM
@stop
@section('define-css')
	<link rel="stylesheet" type="text/css" href="{{asset('css/books.css')}}">
	<style type="text/css" media="screen">
		.caption{
			font-size: 24px;
    line-height: 22px;
    font-family: 'Roboto-Light';
    padding: 10px 0px;

		}
		.caption a{
			color: #444444;
		    -webkit-transition: all 0.2s;
		    transition: all 0.2s;
		}
		.thumbnail img{
     		height: 220px;
		    margin: 0px auto;
		    text-align: center;
		    -webkit-transition: all 0.4s;
		    transition: all 0.4s;
		}
	</style>

@stop

@section('main-content')
	<main class="main-content" data-ix="float-in-on-load">
	  	@include('templates.books.books-banner')
	  	@include('templates.books.books-info')        
	  	@include('templates.books.books-category')	
	</main>
@stop


@section('define-js')
	
	{{-- <script src="{{asset('js/books.js')}}"></script> --}}

@stop

