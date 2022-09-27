@extends('admin.app')

@section('content')


<div class="container mt-2 section-padding">
    <div class="form-box">
        <div class="form-title-wrap">
            <h3 class="title">Add New Offer
                <a class="btn btn-primary float-right" href="{{ route('offer.index') }}"> Back</a>
            </h3>
        </div>
        <div class="form-content contact-form-action">


            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('offer.store') }}" method="POST" class="contact-form aos-init aos-animate" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Car :</strong>
                            <select name="post_id" class="form-control">
                                <option value="">select One</option>
                                @foreach($post as $cat)
                                <option value="{{$cat->id}}">{{$cat->title}}</option>@endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 pt-4 pb-4">
                        <div class="form-group">
                            <strong>Offer Valid Date:</strong>
                            <input type="text" name="valid_date" class="form-control" placeholder="Offer Valid Date">
                            @error('valid_date')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong>One Month Price:</strong>
                            <input type="number" name="one_month_price" class="form-control" placeholder="One Month Price">
                            @error('one_month_price')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong>One Week Price:</strong>
                            <input type="number" name="One_week_price" class="form-control" placeholder="One Week Price">
                            @error('one_week_price')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong>Three Days Price:</strong>
                            <input type="number" name="three_days_price" class="form-control" placeholder="Three Days Price">
                            @error('three_days_price')
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