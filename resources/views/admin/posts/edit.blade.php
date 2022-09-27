@extends('admin.app')

@section('content')


<div class="container mt-2 section-padding">
    <div class="form-box">
        <div class="form-title-wrap">
            <h3 class="title">Edit Car
                <a class="btn btn-primary float-right" href="{{ route('posts.index') }}"> Back</a>
            </h3>
        </div>
        <div class="form-content contact-form-action">


            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('posts.update',$post->id) }}" method="POST" class="contact-form aos-init aos-animate" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Car Image:</strong>
                            <input type="file" name="image[]" class="form-control" placeholder="Car Title" multiple>
                            @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Card Image:</strong>
                            <input type="file" name="image1" class="form-control" placeholder="Car Title">
                            @error('image1')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Car Title:</strong>
                            <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Car Title">
                            @error('title')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-checkbox"> <label for="AirportTransportation">Feature</label>
                            <input type="checkbox" value="0" name="feature" id="AirportTransportation1">
                            <label for="AirportTransportation1">no</label>
                            <input type="checkbox" value="1" name="feature" id="AirportTransportation2">
                            <label for="AirportTransportation2">Yes</label>
                            @error('feature')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong>Car Price:</strong>
                            <input type="number" name="price" value="{{ $post->price }}" class="form-control" placeholder="Car price">
                            @error('price')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Car Description:</strong>
                            <textarea class="form-control" style="height:150px" name="description" placeholder="Car Description">{{ $post->description }}</textarea>
                            @error('description')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-3 mt-4">Submit</button>

                </div>

            </form>
        </div>
    </div>
</div>
@endsection