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

    public function index()
    {
        Carbon::setLocale('sl');
        $events = Event::where('start','>',Carbon::now('Europe/Ljubljana'))->get();
        foreach ($events as $event)
        {
            $event->start = Carbon::createFromTimestamp(strtotime($event->start));
        }
        $events= $events->sortBy('start');

        return view('pages.index', ['events' => $events]);
    }
    public function hikes(){
        $hikes =Hike::all();
        $events = Event::where('start','>=', Carbon::now('Europe/Ljubljana'))->get();
        return view('pages.hikes', ['hikes' => $hikes, 'events' => $events]);
    }

    // all you need to know about  hike
    public function hikeDetails($id)
    {
        $dt = new Carbon();
        $dt->setLocale('sl');
        $hike = Hike::find($id);
        $hike->open_form = $dt->createFromTimestamp(strtotime($hike->open_form));
        $hike->open_to = $dt->createFromTimestamp(strtotime($hike->open_to));
       
        return view('pages.about_hike', ['hike' => $hike]);
    }
    public function about(){
        return view('pages.about');
    }
}
