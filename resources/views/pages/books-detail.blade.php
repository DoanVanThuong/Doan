<?php 
$curr = 'books';

?>

@extends('master')
@section('title')
Sách | Khoa CNTT - ĐH Mở TP.HCM
@stop
@section('define-css')
	<link rel="stylesheet" type="text/css" href="{{asset('css/books.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/books-detail.css')}}">

@stop

@section('main-content')
	<main class="main-content" data-ix="float-in-on-load">
	  	<section class="content">    		
    		@include('templates.detail.books-detail')	
        </section>
    	@include('templates.detail.books-relative')	
    	
	</main>
@stop


@section('define-js')
	<script src="{{asset('js/books.js')}}"></script>
	<script src="{{asset('js/books-detail.js')}}"></script>

@stop

