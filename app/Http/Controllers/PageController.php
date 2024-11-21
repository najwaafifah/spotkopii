<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function activityMeeting()
    {
        return view('activitymeeting');
    }

    public function activityFocus()
    {
        return view('activityfocus');
    }

    public function activityTeamwork()
    {
        return view('activityteamwork');
    }

    public function activityCafe()
    {
        return view('cafeview');
    }
}
