<?php

namespace App\Http\Controllers;

use App\Event;
use App\Hiker;
use App\Http\Requests\SaveHikerRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{

    // event signup fnction
    public function eventSignUp($id)
    {
        $event = Event::find($id);
        $event->start = Carbon::createFromTimestamp(strtotime($event->start));
        $event->end = Carbon::createFromTimestamp(strtotime($event->end));
        return view('pages.event_signup', ['event' => $event]);
    }

    // shrani podatke o pohodniku
    public function saveEventSignup( SaveHikerRequest $request, $event_id)
    {
        $event= Event::find($event_id);
        $email = $request->get('email');
        $hikerExists = Hiker::where('email', '=', $email)->get()->first();
       
        $hiker = new Hiker;
        
        if($hikerExists === null)
        {
            $hiker->hiker_type_id = 1;
            $hiker->name = $request->get('name');
            $hiker->surname = $request->get('surname');
            $hiker->email = $email;
            $hiker->phone = $request->get('phone');
            $hiker->birth_date = $request->get('birth_date');
            $hiker->save();

            $event->hikers()->attach($hiker->id);
            return redirect(route('hikes'))->with('status','Hvala za prijavo na izlet '.$event->hike->name.'!');
        }
        else
        {
            $hikerExists->phone = $request->get('phone');
            $hikerExists->save();

            $event->hikers()->attach($hikerExists->id);
            return redirect(route('home'))->with('status','Hvala za prijavo na izlet '.$event->hike->name.'!');

        }





    }


}
