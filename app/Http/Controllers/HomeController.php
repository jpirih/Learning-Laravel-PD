<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
   public function index(){
       return view('pages.index');
   }

    public function hikes(){
        return view('pages.hikes');
    }

    public function about(){
        return view('pages.about');
    }


}
