<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Post;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Review;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function getCategory()
    {
        $data['category'] = Category::orderBy('id', 'desc')->paginate(100);
        return view('category.index', $data);
    }
    public function getCars($id)
    {
        $data['car'] = Post::where('category_id', '=', $id)->with('category')->with('review')->get();
        return view('product.index', $data);
    }
    public function getCarsDetails($id)
    {
        $data['car'] = Post::where('id', '=', $id)->with('category')->with('review')->with('offer')->get();
        return view('product.details', $data);
    }
    public function search(Request $request)
    {
        $post['car'] = Post::where('title', 'LIKE', "%{$request->get('search')}%")->with('review')->get();
        return view('product.search', $post);
    }
    public function cars(Request $request)
    {
        $posts = Post::orderBy('id', 'desc')->with('category')->with('review')->paginate(15);
        return view('product.cars', compact('posts'));
    }
    public function offers(Request $request)
    {
        $offer = Offer::orderBy('id', 'desc')->with('post')->paginate(7);
        return view('offer.index', compact('offer'));
    }
    public function home()
    {
        $data['car'] = Post::where('feature', '1')->with('category')->with('review')->paginate(25);
        $data['brands'] = Category::where('feature', '1')->paginate(25);
        $data['category'] = Category::orderBy('id', 'desc')->get();
        return view('welcome', $data);
    }
    public function dashboard()
    {
        $data['car'] = Post::where('feature', '1')->paginate(5);
        $data['brands'] = Category::orderBy('id', 'desc')->paginate(5);
        $data['review'] = Review::where('rating', '5')->with('post')->paginate(5);
        $data['booking'] = Booking::where('status', '1')->with('post')->paginate(5);
        return view('admin.dashboard', $data);
    }
}
