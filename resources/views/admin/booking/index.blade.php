@extends('admin.app')

@section('content')
<div class="container mt-2 section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="title">BOOKINGS
                                </h3>
                            </div>
                            <a class="btn btn-success float-right" href="{{ route('booking.create') }}"> Create New Booking</a>
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="table-form table-responsive">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">booking for</th>
                                        <th scope="col">pick Up from</th>
                                        <th scope="col">drop Off To</th>
                                        <th scope="col">Pick Up Time</th>
                                        <th scope="col">Drop Off Time</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($booking as $bookings)
                                    <tr>
                                        <th scope="row">{{ $bookings->id }}</th>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $bookings->post->title }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $bookings->pick_up_from }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $bookings->drop_off_to  }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $bookings->pick_up_time }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <h3 class="title">{{ $bookings->drop_off_time }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                @if($bookings->status === null)
                                                <h3 class="text-white btn-sm bg-warning">Pending</h3>
                                                @elseif($bookings->status == 0)
                                                <h3 class="text-white  btn-sm bg-danger">Rejected</h3>
                                                @else
                                                <h3 class="text-white  btn-sm bg-success">Accepted</h3>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-content">
                                                <form action="{{ route('booking.destroy',$bookings->id) }}" method="POST">

                                                    <a class="btn btn-primary" href="{{ route('booking.edit',$bookings->id) }}">Edit</a>
                                                    @if(!$bookings->status === 1)
                                                    <a class="btn btn-primary" href="{{ route('booking.edit',$bookings->id) }}">Send Response</a>
                                                    @endif
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- end form-box -->

                {!! $booking->links('pagination::bootstrap-4') !!}
            </div><!-- end col-lg-12 -->
        </div>
    </div><!-- end container-fluid -->

    @endsection