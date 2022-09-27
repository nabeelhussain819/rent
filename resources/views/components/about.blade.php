@extends('layout.app')

@section('content')
@include('components.carousel')

<section class="trending-area section-bg position-relative section-padding" id="carousel">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-heading text-center">
                <h2 class="sec__title">Trending Cars</h2>
            </div><!-- end section-heading -->
        </div><!-- end col-lg-12 -->
    </div><!-- end row -->
    <div class="carousel__wrapper">
        <div class="carousel__content">
            <div class="carousel__container">
                @foreach($car as $cars)
                <div class="carousel__slide">
                    <div class="card-item trending-card mb-0 mr-4 m-4" style="    box-shadow: 0 0 0px #fff;border: 1px solid #e2e2f5">
                        <div class="card-img">
                            <a href="{{ route('cars.details',$cars->id) }}" class="d-block">
                                <img src="{{ Storage::url($cars->image1) }}" alt="Destination-img" style="height: 257px;">
                            </a>
                            <span class="badge">Feature</span>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">{{$cars->category->title}}</p>
                            <h3 class="card-title"><a href="{{ route('cars.details',$cars->id) }}">{{$cars->title}}</a></h3>

                            <div class="card-rating">
                                @if($cars->review)
                                <span class="badge text-white"><i class="fa fa-star"></i> {{round($cars->review->avg('rating'), 1)}} /5</span>
                                @else
                                <span class="badge text-white"><i class="fa fa-star"></i> 5/5</span>
                                @endif
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="" data-original-title="Passenger"><i class="fa fa-users"></i><span>{{$cars->passenger}}</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="" data-original-title="Luggage"><i class="fa fa-suitcase"></i><span>{{$cars->Luggage}}</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <a href="{{ route('cars.details',$cars->id) }}" class="btn-text">View details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div id="prev-slide" class="arrow arrow--left">
                <i class="fa fa-arrow-left text-dark"></i>
            </div>
            <div id="next-slide" class="arrow arrow--right">
                <i class="fa fa-arrow-right text-dark"></i>
            </div>
        </div>
    </div>
    <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
        <path d="M-103.55,167.27 C150.39,-132.72 134.59,237.33 517.77,30.09 L500.00,150.00 L0.00,150.00 Z"></path>
    </svg>
</section>

<section class="info-area padding-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">How does it work?</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-3 d-flex">
                    <div class="info-icon flex-shrink-0">
                        <i class="fa fa-search-plus"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Find The Car</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio
                        </p>
                        <span class="info__num">1</span>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-3 d-flex">
                    <div class="info-icon flex-shrink-0">
                        <i class="fa fa-mouse-pointer"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Book It</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio
                        </p>
                        <span class="info__num">2</span>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-3 d-flex">
                    <div class="info-icon flex-shrink-0">
                        <i class="fa fa-check"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Grab And Go</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio
                        </p>
                        <span class="info__num">3</span>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<section class="discount-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="discount-box">
                    <div class="discount-img">
                        <img src="logo/bread-bg7.jpg" alt="discount img">
                    </div><!-- end discount-img -->
                    <div class="discount-content">
                        <div class="section-heading">
                            <p class="sec__desc text-white">Hot deal, save 50%</p>
                            <h2 class="sec__title mb-0 line-height-50 text-white">Discount 50% for the <br> First Booking</h2>
                        </div><!-- end section-heading -->
                    </div><!-- end discount-content -->
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<script>
    const config = {
        autoload: true,
        itemsToBeVisible: 3,
        speed: 5000
    };

    /*-------------------
      Entry point 
      ---------------------*/
    function start() {
        window.onload = function() {
            setSlidersStyle(config);

            const prevSlideButton = document.getElementById("prev-slide");
            const nextSlideButton = document.getElementById("next-slide");

            prevSlideButton.addEventListener("click", () => {
                navigate("backward", config);
            });

            nextSlideButton.addEventListener("click", () => {
                navigate("forward", config);
            });

            if (config.autoload) {
                playCarousel(nextSlideButton, config);
            }
        };
    }

    /*--------------------------------------------------------------
        Sets the style of slides based on the number of visible items.
      ---------------------------------------------------------------*/
    function setSlidersStyle(config) {
        document.querySelector(
            "style"
        ).textContent += `@media screen and (min-width:1180px) { .carousel__slide{ min-width: ${
    100 / config.itemsToBeVisible
  }% } }`;
    }

    /*----------------------------------------
       Performs the sliding behavior of items.
      ----------------------------------------*/
    function navigate(position, config) {
        const carouselEl = document.getElementById("carousel");
        const slideContainerEl = carouselEl.querySelector(".carousel__container");
        const slideEl = carouselEl.querySelector(".carousel__slide");
        let slideWidth = slideEl.offsetWidth;
        slideContainerEl.scrollLeft = this.getNewScrollPosition(
            position,
            slideContainerEl,
            slideWidth,
            config
        );
    }

    /*-------------------------------
       Get the new scroll position.
      ---------------------------------*/
    function getNewScrollPosition(position, slideContainerEl, slideWidth, config) {
        const maxScrollLeft =
            slideContainerEl.scrollWidth - slideWidth * config.itemsToBeVisible;
        if (position === "forward") {
            const x = slideContainerEl.scrollLeft + slideWidth;
            return x <= maxScrollLeft ? x : 0;
        } else {
            const x = slideContainerEl.scrollLeft - slideWidth;
            return x >= 0 ? x : maxScrollLeft;
        }
    }

    /*-------------------------------
      Autoplay
      ---------------------------------*/
    function playCarousel(nextButton, config) {
        const play = () => {
            nextButton.click();
            setTimeout(play, config.speed);
        };
        play();
    }

    start();
</script>
@include('components.portfolio')
@endsection