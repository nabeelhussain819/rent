<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data['category'] = Category::orderBy('id', 'desc')->paginate(50);

        return view('admin.createCategory.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createCategory.create');
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
            'image' => 'required|max:500000',
            'description' => 'required',
            'feature' => 'required',
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:500000',
        ]);
        $path = $request->file('image')->store('public/images');
        $pathLogo = $request->file('logo')->store('public/images');
        $category = new Category;
        $category->title = $request->title;
        $category->description = $request->description;
        $category->feature = $request->feature;
        $category->image = $path;
        $category->logo = $pathLogo;
        $category->save();

        return redirect()->route('category.index')
            ->with('success', 'category has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $Brand
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.createCategory.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $Brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.createCategory.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $Brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'feature' => 'required',
        ]);

        $category = Category::find($id);
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|max:500000',
            ]);
            $path = $request->file('image')->store('public/images');
            $category->image = $path;
        }
        if ($request->hasFile('logo')) {
            $request->validate([
                'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:500000',
            ]);
            $pathLogo = $request->file('logo')->store('public/images');
            $category->logo = $pathLogo;
        }
        $category->title = $request->title;
        $category->description = $request->description;
        $category->feature = $request->feature;
        $category->save();

        return redirect()->route('category.index')
            ->with('success', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $Brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()
            ->with('success', 'Brand has been deleted successfully');
    }
}
