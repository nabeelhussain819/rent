@extends('layout.app')

@section('content')
@include('offer.carousel')
<div class="dashboard-main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="title">Offers Results</h3>
                        </div>
                    </div>
                    <div class="form-content pb-2">
                        @foreach($offer as $offers)
                        <div class="card-item card-item-list card-item--list">
                            <div class="card-img">
                                <img class="avatar__img" alt="" src="{{ Storage::url($offers->post->image1) }}">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h3 class="card-title">{{$offers->post->title}}</h3>
                                    <span class="badge badge-warning text-white ml-2">Valid till: {{$offers->valid_date}}</span>
                                </div>
                                <ul class="list-items list-items-2 pt-2 pb-3">
                                    <li><span>Per day:</span>${{$offers->post->price}}</li>
                                    <li><span>3 days:</span>${{$offers->three_days_price}}</li>
                                    <li><span>1 Week:</span> ${{$offers->One_week_price}}</li>
                                    <li><span>1 Month:</span> ${{$offers->one_month_price}}</li>
                                </ul>
                            </div>
                            <div class="action-btns">
                                <a href="{{ route('cars.details',$offers->post_id) }}" class="btn btn-primary mr-2"><i class="fa fa-check-circle mr-1"></i>See Details</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div><!-- end col-lg-12 -->
            {!! $offer->links('pagination::bootstrap-4') !!}
        </div><!-- end row -->
    </div><!-- end container-fluid -->
</div>

@endsection