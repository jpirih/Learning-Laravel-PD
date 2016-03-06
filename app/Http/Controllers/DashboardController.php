<?php

namespace App\Http\Controllers;

use App\Hiker;
use App\HikerType;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class DashboardController extends Controller
{
    // dashboard main page
    public function dashboard(){
        return view('pages.dashboard');
    }
    
    //hiker types management page
    public function hikerTypes(){
        $hikerTypes = HikerType::all();
        $hikers = Hiker::all();
        return view('pages.hiker_management', ['hikerTypes' => $hikerTypes, 'hikers' => $hikers]);
    }

    // save new hiker type
    public function saveHikerType(){
        $hikerType = new HikerType;

        $name = Request::get('name');
        $hikerType->name = $name;
        $hikerType->save();

        return redirect(route('hiker_panel'));
    }
    
    // insert hiker data 
    public function addHiker(){
        $hikerTypes = HikerType::all();
        return view('pages.prijava', ['hikerTypes' => $hikerTypes]);
    }
    
    // save hiker data to database 
    public function saveHiker(){
        $hiker = new Hiker;

        $name = Request::get('name');
        $surname = Request::get('surname');
        $email = Request::get('email');
        $phone = Request::get('phone');
        // gets array with single element
        $hikerType = Request::get('hikerTypes');
        $birth_date = Request::get('birth_date');

        $hiker->name = $name;
        $hiker->surname = $surname;
        $hiker->email = $email;
        $hiker->phone = $phone;
        // index is necessary because  $hikerType is an array
        $hiker->hiker_type_id = $hikerType[0];
        $hiker->birth_date = $birth_date;

        $hiker->save();

        return redirect(route('hiker_panel'));

    }
}
