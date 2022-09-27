<nav class="navbar navbar-expand-lg navbar-light sticky-top " style="background-color: #fff !important;">
    <a class="navbar-brand pl-4" href="/">
            <img src="{{asset('logo/asd.png')}}" height="40px" width="300px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item pl-4">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item pl-4">
                    <a class="nav-link" href="/#about">About</a>
                </li>

                <li class="nav-item pl-4">
                    <a class="nav-link " href="/#brand">Feature Brands</a>
                </li>
                <li class="nav-item pl-4">
                    <a class="nav-link " href="/brands">Brands</a>
                </li>
                <li class="nav-item pl-4">
                    <a class="nav-link " href="/cars">Cars</a>
                </li>
                @guest
                @if (Route::has('login'))
                @endif

                @if (Route::has('register'))
                @endif
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <a id="navbarDropdown" class="dropdown-item " href="/dashboard" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            dashboard
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>

    </div>
  
</nav>