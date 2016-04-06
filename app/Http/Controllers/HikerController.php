<?php

namespace App\Http\Controllers;

use App\Hiker;
use App\HikerType;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveHikerRequest;
use App\Http\Requests\SaveHikerType;
use Illuminate\Support\Facades\Request;

class HikerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //hiker  management page
    public function hikerPanel(){
        $hikerTypes = HikerType::all();
        $hikers = Hiker::all();
        return view('pages.hiker_management', ['hikerTypes' => $hikerTypes, 'hikers' => $hikers]);
    }

    // save new hiker type
    public function saveHikerType(SaveHikerType $request){
        $hikerType = new HikerType;

        $name = $request->get('name');
        $hikerType->name = $name;
        $hikerType->save();

        return redirect(route('hiker_panel'));
    }

    // insert hiker data 
    public function addHiker(){
        $hikerTypes = HikerType::all();
        return view('pages.add_hiker', ['hikerTypes' => $hikerTypes]);
    }

    // save hiker data to database 
    public function saveHiker(SaveHikerRequest $request){
        $hiker = new Hiker;

        $name = $request->get('name');
        $surname = $request->get('surname');
        $email = $request->get('email');
        $phone = $request->get('phone');
        // gets array with single element
        $hikerType = $request->get('hikerTypes');
        $birth_date = $request->get('birth_date');

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
