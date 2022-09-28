@extends('layout.app')

@section('content')
@foreach($car as $cars)
<section class="breadcrumb-area gradient-bg-gray before-none" style="    padding-top: 72px;
    padding-bottom: 30px;">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="section-heading text-left">
                            <h2 class="sec__title">{{$cars->title}} Details</h2>
                            <p class="sec__desc font-weight-regular pb-2">{{$cars->category->title}}</p>
                        </div>
                        <div class="btn-box">
                            <a class="theme-btn text-white" data-src="{{ Storage::url($cars->image1) }}" data-fancybox="gallery" data-caption="Showing image - 02" data-speed="700">
                                <i class="fa fa-folder mr-2"></i>See Photos
                            </a>
                        </div>
                        @foreach(json_decode($cars->image) as $image)
                        <a class="d-none" data-fancybox="gallery" data-src="{{ Storage::url($image) }}" data-caption="Showing image - 02" data-speed="700"></a>
                        @endforeach
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
</section>
<section class="car-detail-area padding-bottom-90px">
    <div class="single-content-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content-wrap padding-top-60px">
                        <div class="card-item blog-card blog-card-layout-2 blog-single-card mb-5">
                            <div class="card-img before-none">
                                <img src="{{ Storage::url($cars->image1) }}" alt="blog-img">
                            </div>
                            <div class="card-body px-0 pb-0">
                                <h3 class="card-title font-size-28">{{$cars->title}}</h3>
                                <p class="card-meta pb-3">
                                    <span class="post__time"><a href="#" class="text-gray"> @if($cars->review)
                                            <i class="fa fa-star"></i> {{round($cars->review->avg('rating'), 2)}}/5
                                            @else
                                            <i class="fa fa-star"></i> 4.5/5
                                            @endif</a>Rating</span>
                                </p>
                                <div class="single-content-item py-4">
                                    <div class="row">
                                        <div class="col-lg-6 responsive-column">
                                            <div class="single-feature-titles mb-3">
                                                <h3 class="title font-size-16">Whats App Number</h3>
                                                <span class="font-size-13">Phone: 00971568895574</span>
                                            </div>
                                            <div class="section-block"></div>
                                            <div class="single-feature-titles my-3">
                                                <h3 class="title font-size-15 font-weight-medium">Phone Number</h3>
                                                <span class="font-size-13">00971568895574</span>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="single-feature-titles mb-3">
                                                <h3 class="title font-size-16">FaceBook</h3>
                                                <span class="font-size-13">Saimluxury cars rentals</span>
                                            </div>
                                            <div class="section-block"></div>
                                            <div class="single-feature-titles my-3">
                                                <h3 class="title font-size-15 font-weight-medium">Email Address</h3>
                                                <span class="font-size-13">saimluxurycarrentals@gmail.com</span>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12">
                                            <div class="section-block margin-bottom-35px"></div>
                                        </div><!-- end col-lg-12 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="fa fa-car"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Brand</h3>
                                                    <span class="font-size-13">{{$cars->category->title}}</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="fa fa-car"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Car Type</h3>
                                                    <span class="font-size-13">Private</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="fa fa-car"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Car Name</h3>
                                                    <span class="font-size-13">{{$cars->title}}</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Passengers</h3>
                                                    <span class="font-size-13">{{$cars->passenger}}</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Baggage</h3>
                                                    <span class="font-size-13">{{$cars->Luggage}}</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                    </div><!-- end row -->
                                </div>
                                <div class="section-block"></div>
                                <p class="card-text py-3">{{$cars->description}}</p>
                                <div class="photo-block-gallery">
                                    <h3 class="title pb-2">Car Highlight</h3>
                                    <div class="row">
                                        @foreach(json_decode($cars->image) as $image)
                                        <div class="col-lg-6 responsive-column">
                                            <div class="photo-block-item">
                                                <a href="{{ Storage::url($image) }}" data-fancybox="gallery" data-caption="Showing image - 04" data-speed="700">
                                                    <img src="{{ Storage::url($image) }}" alt="img">
                                                </a>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        @endforeach

                                    </div><!-- end row -->
                                </div>
                            </div>
                        </div>

                    </div><!-- end single-content-wrap -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4 padding-top-60px ">

                    <div class="sidebar mb-0">
                        <div class="sidebar-widget">
                            <div class="card-item shadow-none radius-none mb-0">
                                <div class="card-img pb-4">
                                    <a href="car-single.html" class="d-block">
                                        <img src="{{ Storage::url($cars->category->logo) }}" alt="car-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Book Now &amp; Connect To Us</h3>
                            <ul class="social-profile">
                                <li><a href="https://wa.me/00971568895574/?text=I want Booking On {{$cars->title}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" id="IconChangeColor">
                                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" id="mainIconPathAttribute" fill="green"></path>
                                        </svg></a></li>
                                <li><a href="mailto:saimluxurycarrentals@gmail.com"><svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" id="IconChangeColor">
                                            <path d="M44 24V9H24H4V24V39H24" stroke="#ff0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="mainIconPathAttribute"></path>
                                            <path d="M31 36L36 40L44 30" stroke="#ff0000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" id="mainIconPathAttribute"></path>
                                            <path d="M4 9L24 24L44 9" stroke="#ff0000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" id="mainIconPathAttribute"></path>
                                        </svg>
                                    </a></li>
                                <li><a href="https://www.facebook.com/profile.php?id=100070931906606">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16" id="IconChangeColor">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" id="mainIconPathAttribute" fill="blue"></path>
                                        </svg>
                                    </a></li>
                                <li><a href="#book">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M256 512c141.4 0 256-114.6 256-256s-114.6-256-256-256C114.6 0 0 114.6 0 256S114.6 512 256 512zM129.2 265.9C131.7 259.9 137.5 256 144 256h64V160c0-17.67 14.33-32 32-32h32c17.67 0 32 14.33 32 32v96h64c6.469 0 12.31 3.891 14.78 9.875c2.484 5.984 1.109 12.86-3.469 17.44l-112 112c-6.248 6.248-16.38 6.248-22.62 0l-112-112C128.1 278.7 126.7 271.9 129.2 265.9z" />
                                        </svg>
                                    </a></li>
                            </ul>
                        </div>
                        @include('product.booking')
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Give A Review</h3>

                            @if(session()->has('message'))
                            <div class="alert alert-success mb-1 mt-1">
                                {{ session()->has('message') }}
                            </div>
                            @endif
                            <div class="enquiry-forum">
                                <div class="form-box">
                                    <div class="form-content">
                                        <div class="contact-form-action">
                                            <form method="post" action="{{ route('review.store') }}">
                                                @csrf
                                                <div class="input-box">
                                                    <label class="label-text">Your Name</label>
                                                    <div class="form-group">
                                                        <span class="la la-user form-icon"></span>
                                                        <input class="form-control" type="text" name="name" placeholder="Your name">
                                                        @error('name')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="input-box">
                                                    <label class="label-text">Your Email</label>
                                                    <div class="form-group">
                                                        <span class="la la-envelope-o form-icon"></span>
                                                        <input class="form-control" type="email" name="email" placeholder="Email address">
                                                        @error('email')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="input-box">
                                                    <label class="label-text">Message</label>
                                                    <div class="form-group">
                                                        <span class="la la-pencil form-icon"></span>
                                                        <textarea class="message-control form-control" name="description" placeholder="Write message"></textarea>
                                                        @error('description')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 responsive-column">
                                                    <div class="rate-option-item">
                                                        <label>Rating In Stars</label>
                                                        <div class="rate-stars-option">
                                                            <input type="checkbox" id="vm1" value="5" name="rating">
                                                            <label for="vm1"></label>
                                                            <input type="checkbox" id="vm2" value="4" name="rating">
                                                            <label for="vm2"></label>
                                                            <input type="checkbox" id="vm3" value="3" name="rating">
                                                            <label for="vm3"></label>
                                                            <input type="checkbox" id="vm4" value="2" name="rating">
                                                            <label for="vm4"></label>
                                                            <input type="checkbox" id="vm5" value="1" name="rating">
                                                            <label for="vm5"></label>

                                                        </div>
                                                        @error('rating')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror
                                                        <input type="text" value="{{ $cars->id }}" name="post_id" hidden>
                                                    </div>
                                                </div>
                                                <div class="btn-box">
                                                    <button type="submit" class="theme-btn">Submit Enquiry</button>
                                                </div>
                                            </form>
                                        </div><!-- end contact-form-action -->
                                    </div><!-- end form-content -->
                                </div><!-- end form-box -->
                            </div><!-- end enquiry-forum -->
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end single-content-box -->
</section>
@endforeach

@endsection