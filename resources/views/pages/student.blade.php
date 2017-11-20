<?php 

$curr = 'sinhvien';


?>
@extends('master')
@section('title') Thông Tin sinh viên @stop
@section('define-css')
	<link rel="stylesheet" href="{{asset('css/students.css')}}">
@stop

@section('main-content')
	 <main class="main-content">
        <section class="content">
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-9 col-sm-9 left-content">
                        @include('templates.student.students')
                    </div>
                   
                    <div class="col-md-3 col-sm-3 right-content">
                        @include('templates.student.change-password')
                        @include('templates.index.info-Utilitie')
                    </div>
                    <!-- end right-content -->
                </div>
            </div>
        </section>
    </main>
@stop

@section('define-js')
@stop