@extends('layout.app')

@section('content')
@include('category.carousel')
<section class="destination-area padding-top-50px padding-bottom-70px">
    <div class="container">
        <div class="row padding-top-50px">
            @foreach($category as $cat)
            <div class="col-lg-4 responsive-column">
                <div class="card-item ">
                    <div class="card-img"><video autoplay="" loop="" muted="" poster="videos/road.jpg" width="100%">
                            <source src="{{ Storage::url($cat->image) }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-between" style="padding: 4px 20px;">
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="{{ Storage::url($cat->logo) }}" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <a href="{{ route('cars.index',$cat->id) }}" class="author__title">{{$cat->title}}</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <a href="{{ route('cars.index',$cat->id) }}">
                                        <i class="fa fa-arrow-right ml-1"></i>

                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div>
            @endforeach
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection