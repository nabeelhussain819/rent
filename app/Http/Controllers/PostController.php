<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] = Post::orderBy('id', 'desc')->with('category')->paginate(5);
        return view('admin.posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = Category::orderBy('id', 'desc')->paginate(50);
        return view('admin.posts.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image.*' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:500000',
            'image1' => 'required|max:500000',
            'description' => 'required',
            'feature' => 'required',
            'price' => 'required',
            'Luggage' => 'required',
            'passenger' => 'required',
            'category_id' => 'required',
        ]);
        foreach ($request->file('image') as $image) {
            $path = $image->store('public/images');
            $data[] = $path;
        }
        $pathLogo = $request->file('image1')->store('public/images');
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->feature = $request->feature;
        $post->price = $request->price;
        $post->category_id = $request->category_id;
        $post->image = json_encode($data);
        $post->image1 = $pathLogo;
        $post->Luggage = $request->Luggage;
        $post->passenger = $request->passenger;
        $post->save();

        return redirect()->route('posts.index')
            ->with('success', 'Car has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $category = Category::orderBy('id', 'desc')->paginate(5);
        return view('admin.posts.edit', compact('post', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'feature' => 'required',
            'price' => 'required',
        ]);
        $post = Post::find($id);
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            $post->image = $path;
        }
        if ($request->hasFile('image1')) {
            $request->validate([
                'image1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:500000',
            ]);
            $pathLogo = $request->file('image1')->store('public/images');
            $post->image1 = $pathLogo;
        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->feature = $request->feature;
        $post->price = $request->price;
        $post->save();

        return redirect()->route('posts.index')
            ->with('success', 'Car updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Car has been deleted successfully');
    }
}
