<?php

namespace App\Http\Controllers;

use App\Event;
use App\Hike;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index(){
        $events = Event::where('start','>',Carbon::now('Europe/Ljubljana'))->get();
        return view('pages.index', ['events' => $events]);
    }
    public function hikes(){
        $hikes =Hike::all();
        $events = Event::where('start','>=', Carbon::now('Europe/Ljubljana'))->get();
        return view('pages.hikes', ['hikes' => $hikes, 'events' => $events]);
    }

    // all you need to know about  hike
    public function hikeDetails($id){
        $hike = Hike::find($id);
        return view('pages.about_hike', ['hike' => $hike]);
    }
    public function about(){
        return view('pages.about');
    }
}
