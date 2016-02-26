<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HikesController extends Controller
{

    public function smarnaGoraHike(){
        $title = "Šmarna Gora";
        $guide = "Janez Kranjski";
        return view('pages.smarna_gora', ['title' => $title, 'guide' => $guide]);
    }
}
