<?php

namespace App\Http\Controllers;

use App\Difficulty;
use App\Event;
use App\Hike;
use App\Hiker;
use App\Http\Requests\SaveDifficultyRequest;
use App\Http\Requests\SaveEventRequest;
use App\Http\Requests\SaveHikeRequest;
use App\Http\Requests\SaveHikerRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Monolog\Handler\NullHandlerTest;

class HikesController extends Controller
{
    // hikes dashboard
    public function hikePanel(){
        Carbon::setLocale('sl');
        $tz = 'Europe/Ljubljana';
        $td = Carbon::now($tz);
        $hikes = Hike::all();
        $difficulties = Difficulty::all();
        $events = Event::where('start', '>=', $td)->get();
        return view('pages.hike_management', ['hikes' => $hikes, 'difficulties' => $difficulties, 'events' => $events]);
    }
    // add new hike
    public function addHike(){
        $difficulties = Difficulty::all();
        $guides = Hiker::where('hiker_type_id','=',3)->get();
        return view('pages.add_hike', ['difficulties' => $difficulties, 'guides' => $guides]);
    }

    // save new hike to the database
    public function saveHike(SaveHikeRequest $request){
        $hike = new Hike;
        $name = $request->get('name');
        $altitude = $request->get('altitude');
        $difficulty = $request->get('difficulties');
        $openFrom = $request->get('open_from');
        $openTo = $request->get('open_to');
        $guide = $request->get('guides');
        $description = $request->get('description');
        $imgUrl = $request->get('img_url');

        $hike->name = $name;
        $hike->altitude = $altitude;
        $hike->difficulty_id = $difficulty[0];
        $hike->open_form = $openFrom;
        $hike->open_to = $openTo;
        $hike->guide_id = $guide[0];
        $hike->description = $description;
        $hike->img_url = $imgUrl;

        $hike->save();

        return redirect(route('hike_panel'));

    }
    // all you need to know about  hike
    public function hikeDetails($id){
        $hike = Hike::find($id);
        return view('pages.about_hike', ['hike' => $hike]);
    }
    // hike diffieculty
    public function saveDifficulty(SaveDifficultyRequest $request){
        $difficulty = new Difficulty();
        $label = $request->get('label');
        $name = $request->get('name');

        $difficulty->label = $label;
        $difficulty->name = $name;

        $difficulty->save();

        return redirect(route('hike_panel'));
    }
    // organize new hike event
    public function createHikeEvent(){
        $hikes = Hike::all();
        return view('pages.create_event', ['hikes' => $hikes]);
    }
    // this function saves the event info
    public function saveHikeEvent(SaveEventRequest $request){
        $event = new Event;
        $start = $request->get('start');
        $end = $request->get('end');
        $hike = $request->get('hikes');
        $price = $request->get('price');
        $info = $request->get('info');

        $event->hike_id = $hike[0];
        $event->start = $start;
        $event->end = $end;
        $event->price = $price;
        $event->info = $info;
        $event->save();

        return redirect(route('hike_panel'));
    }
    // event signup fnction
    public function eventSignUp($id){
        $hike = Hike::find($id);
        $event = Event::where('hike_id' ,'=',$id)->get()->first();
        return view('pages.event_signup', ['hike' => $hike, 'event' => $event]);
    }

    public function saveEventSignup( SaveHikerRequest $request, $hike_id){
        $event= Event::where('hike_id', '=', $hike_id)->get()->first();
        $hiker = new Hiker;
        
        $hiker->hiker_type_id = 1;
        $hiker->name = $request->get('name');
        $hiker->surname = $request->get('surname');
        $hiker->email = $request->get('email');
        $hiker->phone = $request->get('phone');
        $hiker->birth_date = $request->get('birth_date');
        $hiker->save();
        
        $event->hikers()->attach($hiker->id);
        return redirect(route('hikes'))->with('status','Hvala za prijavo na izlet '.$event->hike->name.'!');
        


    }
}
