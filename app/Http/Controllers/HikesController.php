<?php

namespace App\Http\Controllers;

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

    public function smarnaGoraHike(){
        $title = "Šmarna Gora";
        $guide = "Janez Kranjski";
        return view('pages.smarna_gora', ['title' => $title, 'guide' => $guide]);
    }

    public function prijava(){
        return view('pages.prijava');
    }

    /**
     * @return RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function prijavaSave(){
        $name = Request::get('name');
        $surname = Request::get('surname');
        $email = Request::get('email');
        $birth_date = Request::get('birth_date');

        $pohodnik = new Hiker;
        $pohodnik->name = $name;
        $pohodnik->surname = $surname;
        $pohodnik->email = $email;
        $pohodnik->birth_date = $birth_date;

        $pohodnik->save();


        return redirect(route('participants'))->with('status','Hvala za prijavo se vidimo na pohodu! :)');
    }
    // seznam vseh prijavljenih na pohod

    public function seznamVseh(){
        $pohod = 'Šmarna Gora';
        $datum = '13.3.2016';
        $guide = 'Janez Kranjski';

        $pohodniki = Hiker::all();
        $stevPrijavljenih = DB::table('hikers')->count();

        return view('pages.seznam_prijavljenih', ['pohod'=> $pohod, 'datum' => $datum, 'guide' => $guide,
            'pohodniki' => $pohodniki, 'stevPrijavljenih' => $stevPrijavljenih]);
    }
}
