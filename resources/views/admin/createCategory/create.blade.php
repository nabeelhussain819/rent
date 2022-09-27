@extends('admin.app')

@section('content')

<div class="container mt-2 section-padding">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="form-box">
        <div class="form-title-wrap">
            <h3 class="title"><i class="la la-gear mr-2 text-gray"></i>Add New Brand</h3>
            <a class="btn btn-primary float-right" href="{{ route('category.index') }}"> Back</a>
        </div><!-- form-title-wrap -->
        <div class="form-content contact-form-action">
            <form action="{{ route('category.store') }}" method="POST" class="row MultiFile-intercepted" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12 responsive-column">
                    <div class="input-box">
                        <label class="label-text">Brand Name</label>
                        <div class="form-group">
                            <span class="la la-map form-icon"></span>
                            <input type="text" name="title" class="form-control" placeholder="Brand Title">
                            @error('title')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6 responsive-column">
                    <div class="form-group">
                        <strong>Brand video:</strong>
                        <input type="file" name="image" class="multi file-upload-input with-preview MultiFile-applied MultiFile" multiple="" id="MultiFile1_F1" value="">
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6 responsive-column">
                    <div class="form-group">
                        <strong>Brand Logo:</strong>
                        <input type="file" name="logo" class="multi file-upload-input with-preview MultiFile-applied MultiFile" multiple="" id="MultiFile1_F1" value="">
                        @error('logo')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div><!-- end col-lg-6 -->
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
                <div class="col-lg-12">
                    <div class="input-box">
                        <label class="label-text mb-0 line-height-20">Description of your Brand</label>
                        <p class="font-size-13 mb-3 line-height-20">400 character limit</p>
                        <div class="form-group">
                            <span class="la la-pencil form-icon"></span>
                            <textarea class="message-control form-control" name="description" placeholder="In English only, no HTML, no web or email address, no ALL CAPS           "></textarea>
                            @error('description')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
                <button type="submit" class="btn btn-primary ml-3 mt-4">Submit</button>
            </form>
        </div><!-- end form-content -->
    </div>

</div>
@endsection