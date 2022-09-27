<section class="destination-area padding-top-50px padding-bottom-70px" id="brand">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="section-heading">
                    <h2 class="sec__title">Top Brands</h2>
                    <p class="sec__desc pt-3">Morbi convallis bibendum urna ut viverra Maecenas quis
                    </p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="btn-box btn--box text-right">
                    <a href="/brands" class="theme-btn">Discover More <i class="fa fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div><!-- end row -->
        <div class="row padding-top-50px">
            @foreach($brands as $cat)
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

<section class="cta-area padding-top-100px padding-bottom-180px text-center">
    <div class="video-bg">
        <video autoplay="" loop="" muted="">
            <source src="{{ asset('videos/car.mp4')}}" type="video/mp4" poster="videos/792bd98f3e617786c850493560e11c45.jpg">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title text-white line-height-55">Let us show you the world <br> Discover our most popular Cars</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
        <path d="M-31.31,170.22 C164.50,33.05 334.36,-32.06 547.11,196.88 L500.00,150.00 L0.00,150.00 Z"></path>
    </svg>
</section>
<div id="about">
    <section class="funfact-area padding-bottom-70px">
        <div class="">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">We Have Many Popular Brands</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="counter-box counter-box-2 margin-top-60px mb-0">
                <div class="row">
                    @foreach($category as $cat)
                    <div class="col-lg-2 responsive-column">
                        <div class="counter-item counter-item-layout-2 d-flex">
                            <img src="{{ Storage::url($cat->logo) }}" height="50px" width="65px" alt="">

                            <div class="counter-content">
                                <p class="counter__title pl-1 pt-2">{{$cat->title}}</p>
                            </div><!-- end counter-content -->
                        </div><!-- end counter-item -->
                    </div><!-- end col-lg-3 -->
                    @endforeach
                </div><!-- end row -->
            </div><!-- end counter-box -->
        </div><!-- end container -->
    </section>
</div>