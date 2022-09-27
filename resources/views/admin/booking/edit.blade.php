@extends('admin.app')

@section('content')


<div class="container mt-2 section-padding">
    <div class="form-box">
        <div class="form-title-wrap">
            <h3 class="title">Edit Booking
                <a class="btn btn-primary float-right" href="{{ route('booking.index') }}"> Back</a>
            </h3>
        </div>
        <div class="form-content contact-form-action">


            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('booking.update',$booking->id) }}" method="POST" class="contact-form aos-init aos-animate" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-lg-6">
                        <div class="custom-checkbox">
                            <label for="AirportTransportation">Booking Status :</label>
                            <input type="checkbox" value="0" name="status" id="AirportTransportation1">
                            <label for="AirportTransportation1">reject</label>
                            <input type="checkbox" value="1" name="status" id="AirportTransportation2">
                            <label for="AirportTransportation2">Accept - if Accept he will get email of booking</label>
                            @error('status')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="">User Email :</label>
                        <p>{{$booking->email}}</p>
                    </div>
                    <button type="submit" class="btn btn-primary ml-3 mt-4">Submit</button>

                </div>

            </form>
        </div>
    </div>
</div>
@endsection