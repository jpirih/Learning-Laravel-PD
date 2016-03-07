<?php

namespace App\Http\Controllers;

use App\Difficulty;
use App\Hike;
use App\Hiker;
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
        $hikes = Hike::all();
        return view('pages.hike_management', ['hikes' => $hikes]);
    }
    // add new hike
    public function addHike(){
        $difficulties = Difficulty::all();
        $guides = Hiker::where('hiker_type_id','=',3)->get();
        return view('pages.add_hike', ['difficulties' => $difficulties, 'guides' => $guides]);
    }

    // save new hike to the database
    public function saveHike(){
        $hike = new Hike;
        $name = Request::get('name');
        $altitude = Request::get('altitude');
        $difficulty = Request::get('difficulties');
        $openFrom = Request::get('open_from');
        $openTo = Request::get('open_to');
        $guide = Request::get('guides');
        $description = Request::get('description');
        $imgUrl = Request::get('img_url');

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

    public function hikeDetails($id){
        $hike = Hike::find($id);
        return view('pages.about_hike', ['hike' => $hike]);
    }

    public function prijava(){
        return view('pages.prijava');
    }

    /**
     * @return RedirectResponse|\Illuminate\Routing\Redirector
     */


    
}
