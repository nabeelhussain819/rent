@extends('admin.app')

@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-lg-4 responsive-column-l">
            <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                <div class="d-flex pb-3 justify-content-between">
                    <div class="info-content">
                        <p class="info__desc">Total Bookings!</p>
                        <h4 class="info__title">{{count($booking)}}</h4>
                    </div><!-- end info-content -->
                </div>
                <div class="section-block"></div>
                <a href="/booking" class="d-flex align-items-center justify-content-between view-all">View All <i class="la la-angle-right"></i></a>
            </div>
        </div><!-- end col-lg-3 -->
        <div class="col-lg-4 responsive-column-l">
            <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                <div class="d-flex pb-3 justify-content-between">
                    <div class="info-content">
                        <p class="info__desc">Total Car!</p>
                        <h4 class="info__title">{{count($car)}}</h4>
                    </div><!-- end info-content -->
                </div>
                <div class="section-block"></div>
                <a href="/posts" class="d-flex align-items-center justify-content-between view-all">View All <i class="la la-angle-right"></i></a>
            </div>
        </div><!-- end col-lg-3 -->
        <div class="col-lg-4 responsive-column-l">
            <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                <div class="d-flex pb-3 justify-content-between">
                    <div class="info-content">
                        <p class="info__desc">Total Brands!</p>
                        <h4 class="info__title">{{count($brands)}}</h4>
                    </div><!-- end info-content -->
                </div>
                <div class="section-block"></div>
                <a href="/category" class="d-flex align-items-center justify-content-between view-all">View All <i class="la la-angle-right"></i></a>
            </div>
        </div><!-- end col-lg-3 -->
    </div><!-- end row -->
</div>
<div class="">
    <div class="row">
        <div class="col-lg-6 responsive-column--m">
            <div class="form-box dashboard-card">
                <div class="form-title-wrap">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="title">Cars</h3>
                        <i class="fa fa-check-square"> Feature </i>
                    </div>
                </div>
                <div class="form-content p-0">
                    <div class="list-group drop-reveal-list">
                        @foreach($car as $car)
                        <a href="#" class="list-group-item list-group-item-action border-top-0">
                            <div class="msg-body d-flex align-items-center">
                                <div class="icon-element flex-shrink-0 mr-3 ml-0"><i class="fa fa-bell"></i></div>
                                <div class="msg-content w-100">
                                    <h3 class="title pb-1">{{$car->title}}</h3>
                                    <p class="msg-text">{{$car->category->title}}</p>
                                </div>
                            </div><!-- end msg-body -->
                        </a>
                        @endforeach
                    </div>
                </div>
            </div><!-- end form-box -->
        </div>
        <div class="col-lg-6 responsive-column--m">
            <div class="form-box dashboard-card">
                <div class="form-title-wrap">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="title">Reviews</h3>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <div class="form-content p-0">
                    <div class="list-group drop-reveal-list">
                        @foreach($review as $rev)
                        <a href="#" class="list-group-item list-group-item-action border-top-0">
                            <div class="msg-body d-flex align-items-center">
                                <div class="icon-element flex-shrink-0 mr-3 ml-0"><i class="fa fa-star"></i></div>
                                <div class="msg-content w-100">
                                    <h3 class="title pb-1">{{$rev->post->title}}</h3>
                                    <p class="msg-text">Rating: {{$rev->rating}}</p>
                                </div>
                            </div><!-- end msg-body -->
                        </a>
                        @endforeach
                    </div>
                </div>
            </div><!-- end form-box -->
        </div>
        <div class="col-lg-6 responsive-column--m">
            <div class="form-box dashboard-card">
                <div class="form-title-wrap">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="title">Bookings</h3>
                        <i class="fa fa-book"></i>
                    </div>
                </div>
                <div class="form-content p-0">
                    <div class="list-group drop-reveal-list">
                        @foreach($booking as $bookings)
                        <a href="#" class="list-group-item list-group-item-action border-top-0">
                            <div class="msg-body d-flex align-items-center">
                                <div class="icon-element flex-shrink-0 mr-3 ml-0"><i class="fa fa-check"></i></div>
                                <div class="msg-content w-100">
                                    <h3 class="title pb-1">Booking For: {{$bookings->post->title}}</h3>
                                    <p class="msg-text">Accepted</p>
                                </div>
                            </div><!-- end msg-body -->
                        </a>
                        @endforeach
                    </div>
                </div>
            </div><!-- end form-box -->
        </div>
        <div class="col-lg-6 responsive-column--m">
            <div class="form-box dashboard-card">
                <div class="form-title-wrap">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="title">Brands</h3> <i class="fa fa-check-square"> Feature</i>
                    </div>
                </div>
                <div class="form-content p-0">
                    <div class="list-group drop-reveal-list">
                        @foreach($brands as $brands)
                        <a href="#" class="list-group-item list-group-item-action border-top-0">
                            <div class="msg-body d-flex align-items-center">
                                <div class="icon-element flex-shrink-0 mr-3 ml-0"><i class="fa fa-bell"></i></div>
                                <div class="msg-content w-100">
                                    <h3 class="title pb-1">Booking For: {{$brands->title}}</h3>
                                    <p class="msg-text">{{date('d-m-Y', strtotime($brands->created_at));}}</p>
                                </div>
                            </div><!-- end msg-body -->
                        </a>
                        @endforeach
                    </div>
                </div>
            </div><!-- end form-box -->
        </div>
    </div>

</div>
@endsection