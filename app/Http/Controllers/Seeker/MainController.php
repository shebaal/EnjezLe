<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function home()
    {
        return view('website.SeekerPanel.Home.index');
    }
    public function wallet()
    {
        return view('website.SeekerPanel.wallet.index');
    }
    public function personalinfo()
    {
        return view('website.SeekerPanel.personalinfo.index');
    }
    public function setting()
    {
        return view('website.SeekerPanel.setting.index');
    }
    public function works()
    {
        return view('website.SeekerPanel.works.work');
    }
}
