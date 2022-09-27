<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Post;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['offer'] = Offer::orderBy('id', 'desc')->with('post')->paginate(5);
        return view('admin.offer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['post'] = Post::orderBy('id', 'desc')->get();
        return view('admin.offer.create', $data);
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
            'valid_date' => 'required',
            'one_month_price' => 'required',
            'One_week_price' => 'required',
            'three_days_price' => 'required',
            'post_id' => 'required',
        ]);
        Offer::create($request->all());
        return redirect()->route('offer.index')
            ->with('success', 'Offer has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        return view('offer.show', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $offer = Offer::orderBy('id', 'desc')->first();
        return view('admin.offer.edit', compact('post', 'offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'valid_date' => 'required',
            'one_month_price' => 'required',
            'One_week_price' => 'required',
            'three_days_price' => 'required',
        ]);
        $offer = Offer::find($id);

        $offer->valid_date = $request->valid_date;
        $offer->one_month_price = $request->one_month_price;
        $offer->One_week_price = $request->One_week_price;
        $offer->three_days_price = $request->three_days_price;
        $offer->post_id = $request->post_id;
        $offer->save();

        return redirect()->route('offer.index')
            ->with('success', 'offer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();

        return redirect()->route('offer.index')
            ->with('success', 'offer has been deleted successfully');
    }
}
