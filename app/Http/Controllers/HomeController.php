<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function getFirst(){
        return 'this is First action';
    }
    public function getSecond(){
        return 'this is Second action';
    }
    // public function postThird(){
    //     return 'this is Third action';
    // }
}
