@extends('layout.app')

@section('content')
@include('product.carousel')
<section class="card-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-wrap margin-bottom-30px">
                    <div class="filter-top d-flex align-items-center justify-content-between pb-4">
                        <div>
                            <h3 class="title font-size-24">Available Cars</h3>
                        </div>
                    </div><!-- end filter-top -->
                </div><!-- end filter-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            @foreach($car as $cars)
            <div class="col-lg-4 responsive-column">
                <div class="card-item car-card">
                    <div class="card-img">
                        <a href="{{ route('cars.details',$cars->id) }}" class="d-block">
                            <img src="{{ Storage::url($cars->image1) }}" alt="car-img" style="height: 257px;">
                        </a>
                        <span class="badge">{{$cars->feature ==1 ? "Feature":null}}</span>
                    </div>
                    <div class="card-body">
                        <p class="card-meta">{{$cars->category->name}}</p>
                        <h3 class="card-title"><a href="{{ route('cars.details',$cars->id) }}">{{$cars->title}}</a></h3>
                        <div class="card-rating">
                            @if($cars->review)
                            <span class="badge text-white"><i class="fa fa-star"></i> {{round($cars->review->avg('rating'), 2)}}/5</span>
                            @else
                            <span class="badge text-white"><i class="fa fa-star"></i> 5/5</span>
                            @endif
                        </div>
                        <div class="card-attributes">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="" data-original-title="Passenger"><i class="fa fa-users"></i><span>{{$cars->passenger}}</span></li>
                                        <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="" data-original-title="Luggage"><i class="fa fa-suitcase"></i><span>{{$cars->Luggage}}</span></li>
                                    </ul>
                                </div><div class="card-price d-flex align-items-center justify-content-between">
                            <a href="{{ route('cars.details',$cars->id) }}" class="btn-text">See details<i class="la la-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            @endforeach
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection