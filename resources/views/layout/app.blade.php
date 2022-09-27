<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

    <link rel="icon" href="{{asset('logo/white.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <title>Car App</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Fonts -->
</head>

<body>
    <div class="preloader" id="preloader">
        <div class="">
            <div class="wrapper1">
                <img src="{{asset('logo/main.png')}}" height="180px" width="200px" alt="">
            </div>
            <div class="spinner"></div>
        </div>
    </div>
    </div>
    <div id="app">
        <main>
            @include('sweetalert::alert')
            @include('components.header')
            @yield('content')
            @include('components.footer')
        </main>
    </div>
    <a id="hide" class="float bg-search">
        <i class="text-light fa fa-arrow-right my-float font-size-20"></i>
    </a>
    <a id="show" class="float bg-search " data-toggle="tooltip" data-placement="left" title="Search A Car Here! By Name">
        <i class="text-light fa fa-search-plus my-float font-size-20"></i>
    </a>
    <div id="back-to-top" class="bg-search">
        <i class="fa fa-angle-up text-white " title="Go top"></i>
    </div>
    <div class="float1" style="display: none;">
        <div class="card p-2 bg-search" style="border-radius: 4.5rem;">
            <form class="form-inline my-2 my-lg-0 mr-4" action="{{ route('cars.search') }}">
                <input class="form-control mr-sm-2" style="border-radius:20px;" type="search" name="search" placeholder="Search Car By Name" aria-label="Search">
                <button class="border-0 bg-transparent mt-1" type="submit"><i class="fa fa-search text-white font-size-20"></i></button>
            </form>
        </div>
    </div>
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/daterangepicker.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.min.js')}}"></script>
    <script src="{{asset('js/animated-headline.js')}}"></script>
    <script src="{{asset('js/jquery.multi-file.min.js')}}"></script>
    <script src="{{asset('js/jquery.ripples-min.js')}}"></script>
    <script src="{{asset('js/map-add.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</body>
<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?59378';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
        "enabled": true,
        "chatButtonSetting": {
            "backgroundColor": "#4dc247",
            "ctaText": "",
            "borderRadius": "25",
            "marginLeft": "0",
            "marginBottom": "50",
            "marginRight": "50",
            "position": "right"
        },
        "brandSetting": {
            "brandName": "SAIM CAR RENTAL",
            "brandSubTitle": "Available For Your Help",
            "brandImg": "{{asset('logo/main1.png')}}",
            "welcomeText": "Hi there!\nHow can I help you?",
            "messageText": "Hello, I have a question about ",
            "backgroundColor": "#0a5f54",
            "ctaText": "Start Chat",
            "borderRadius": "25",
            "autoShow": false,
            "phoneNumber": "00971568895574"
        }
    };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
<script>
    $(document).ready(function() {
        $("#hide").click(function() {
            $(".float1").hide();
            $("#hide").hide();
            $("#show").show();
        });
        $("#show").click(function() {
            $(".float1").show();
            $("#show").hide();
            $("#hide").show();
        });
    });
</script>
<!-- <script>
    var botmanWidget = {
        title: 'Rent A Car',
        introMessage: 'Hello, I am a Scarlet! I am here to assist you and answer all your questions about our products and services!',
        mainColor: '#007bff',
        aboutText: '',
        bubbleBackground: '#007bff',
        headerTextColor: '#fff',
    };
    
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> -->

</html>