<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Post;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    //
    public function index()
    {
        $data['booking'] = Booking::orderBy('id', 'desc')->with('post')->paginate(3);

        return view('admin.booking.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['posts'] = Post::orderBy('id', 'desc')->get();
        return view('admin.booking.create', $data);
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
            'email' => 'required',
            'pick_up_from' => 'required',
            'pick_up_time' => 'required',
            'drop_off_time' => 'required',
            'drop_off_to' => 'required',
            'post_id' => 'required',
        ]);
        $post = new Booking;
        $post->email = $request->email;
        $post->pick_up_from = $request->pick_up_from;
        $post->pick_up_time = $request->pick_up_time;
        $post->drop_off_time = $request->drop_off_time;
        $post->drop_off_to = $request->drop_off_to;
        $post->post_id = $request->post_id;
        $post->status = $request->status ? $request->status : null;
        $post->save();
        Alert::success('Success', 'Your Request For Booking Has Been Sent To Admin!');
        return redirect()->back()
            ->with('success', 'Your Booked a Ride!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $Booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('admin.booking.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $Booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('admin.booking.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $Booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $booking = Booking::find($id);
        $booking->status = $request->status;
        $booking->save();
        if ($request->status == 1) {
            $details = [
                'title' => 'SAIM Luxury Car Rental',
                'body' => $booking->post->title,
                'car'=>$booking
            ];
            Mail::to($booking->email)->send(new \App\Mail\BookingMail($details));
        }

        return redirect()->route('booking.index')
            ->with('success', 'Booking updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $Booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->back()
            ->with('success', 'Booking has been deleted successfully');
    }
}
