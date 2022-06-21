<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);

        $this->validate($request, [
            'review' => 'required|max:255'
        ], [
            'review.required' => 'Please be so kind and fill-in the text field',
            'review.max' => "Please write less than 255 characters"
        ]);

        $review = new Review;

        $review->user_id = Auth::id();
        $review->book_id = $request->input('book_id');
        $review->review = $request->input('review');

        $review->save();
        session()->flash('success_adding', 'The review was ADDED.');

        return redirect()->back();
    }
}
