<?php

namespace App\Http\Controllers;

use App\Models\Review;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function index()
    {
        $data['review'] = Review::orderBy('id', 'desc')->with('post')->paginate(5);
        
        return view('admin.review.index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'rating' => 'required',
            'post_id' => 'required',
        ]);
        Review::create($request->all());
        Alert::success('Success', 'You Have SuccessFully Reviewed!');
        return redirect()->back()
            ->with('success', 'You Have SuccessFully Reviewed');
    }
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('review.index')
            ->with('success', 'Car has been deleted successfully');
    }
}
