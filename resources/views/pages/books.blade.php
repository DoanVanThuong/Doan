<?php 
$curr = 'books';

?>

@extends('master')
@section('title')
Sách | Khoa CNTT - ĐH Mở TP.HCM
@stop
@section('define-css')
	<link rel="stylesheet" type="text/css" href="css/books.css">
@stop

@section('main-content')
	<main class="main-content" data-ix="float-in-on-load">
	  	@include('templates.books.books-banner')
	  	@include('templates.books.books-info')        
	  	@include('templates.books.books-content')
	</main>
@stop


@section('define-js')
	<script src="js/books.js"></script>
@stop

