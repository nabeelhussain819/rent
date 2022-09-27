@extends('admin.app')

@section('content')


<div class="container mt-2 section-padding">
    <div class="form-box">
        <div class="form-title-wrap">
            <h3 class="title">Edit Offer
                <a class="btn btn-primary float-right" href="{{ route('offer.index') }}"> Back</a>
            </h3>
        </div>
        <div class="form-content contact-form-action">


            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('offer.update',$offer->id) }}" method="POST" class="contact-form aos-init aos-animate" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <strong>one Week Price:</strong>
                            <input type="number" name="One_week_price" value="{{ $offer->One_week_price }}" class="form-control" placeholder="Car price">
                            <input type="number" name="post_id" value="{{ $offer->post_id }}" class="form-control" placeholder="Car price" hidden>
                            @error('One_week_price')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>One Month Price:</strong>
                            <input type="number" name="one_month_price" value="{{ $offer->one_month_price }}" class="form-control" placeholder="Car price">
                            @error('one_month_price')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Three Days Price:</strong>
                            <input type="number" name="three_days_price" value="{{ $offer->three_days_price }}" class="form-control" placeholder="Car price">
                            @error('three_days_price')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Valid Date:</strong>
                            <input type="text" name="valid_date" value="{{ $offer->valid_date }}" class="form-control" placeholder="Car price">
                            @error('valid_date')
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