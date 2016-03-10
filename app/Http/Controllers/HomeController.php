<?php

namespace App\Http\Controllers;

use App\Event;
use App\Hike;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
   public function index(){
       $events = Event::where('start','>',Carbon::now('Europe/Ljubljana'))->get();
       return view('pages.index', ['events' => $events]);
   }

    public function hikes(){
        $hikes =Hike::all();
        $events = Event::where('start','>=', Carbon::now('Europe/Ljubljana'))->get();
        return view('pages.hikes', ['hikes' => $hikes, 'events' => $events]);
    }

    public function about(){
        return view('pages.about');
    }


}
