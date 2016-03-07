<?php

namespace App\Http\Controllers;

use App\Hike;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
   public function index(){
       return view('pages.index');
   }

    public function hikes(){
        $hikes =Hike::all();
        return view('pages.hikes', ['hikes' => $hikes]);
    }

    public function about(){
        return view('pages.about');
    }


}
