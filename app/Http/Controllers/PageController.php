<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cafe;
use App\Models\Review;

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

    public function activityCafe($id)
    {
        // Find the cafe by its ID
        $cafe = Cafe::find($id);

        // Fetch the ratings for this cafe (assuming a rating relationship exists)
        $ratings = Review::where('cafe_id', $cafe->id)->get();
        $averageRating = $cafe->reviews->avg('rating');

        // Return the view and pass both models
        return view('cafeview', compact('cafe', 'ratings', 'averageRating'));
    }
}
