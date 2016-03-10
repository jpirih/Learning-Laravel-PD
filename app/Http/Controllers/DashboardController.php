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
    
    
}
