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
}
