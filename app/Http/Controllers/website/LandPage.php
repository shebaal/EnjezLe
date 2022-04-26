<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandPage extends Controller
{
 
    //
    public function ShowHome(){
        return view('website.home');
    }
    public function ShowPerson(){
        return view('website.pages.profiles_display');
    }
    public function ShowJobs(){
        return view('website.pages.jobdisplay');
    }
}
