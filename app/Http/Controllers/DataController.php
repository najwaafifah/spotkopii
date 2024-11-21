<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

class DataController extends Controller
{


    public function submitReview(Request $request, $cafe_id)
    {
        // Validate the form input
        $request->validate([
            'review' => 'required|string',
            'rating' => 'required|integer|between:1,5',
        ]);

        // Get the current authenticated user
        $user = Auth::user();

        // Create a new review in the database
        Review::create([
            'cafe_id' => $cafe_id,
            'nama_reviewer' => $user->name,  // Assuming the user's name is in the 'name' column
            'rating' => $request->rating,
            'review_text' => $request->review,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}
