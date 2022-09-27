<div class="sidebar-nav sidebar--nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="author-content">
            <div class="d-flex align-items-center">
                <div class="author-img avatar-sm">
                    <img src="{{asset('logo/main.png')}}" alt="testimonial image">
                </div>
                <div class="author-bio">
                    <h4 class="author__title">SAIM Luxury Car Rental</h4>
                    <span class="author__meta">Welcome to Admin Panel</span>
                </div>
            </div>
        </div>
        <div class="sidebar-menu-wrap">
            <ul class="sidebar-menu toggle-menu list-items">
                <li class="page-active"><a href="/dashboard"><i class="la la-dashboard mr-2"></i>Dashboard</a></li>
                <li>
                    <span class="side-menu-icon toggle-menu-icon">
                        <i class="fa fa-angle-down"></i>
                    </span>
                    <a href="/category"><i class="fa fa-list mr-2 text-color-2"></i>Brands</a>
                    <ul class="toggle-drop-menu">
                        <li><a href="/category/create">Create Brands</a></li>
                        <li><a href="/category">All Brands</a></li>
                    </ul>
                </li>
                <li>
                    <span class="side-menu-icon toggle-menu-icon">
                        <i class="fa fa-angle-down"></i>
                    </span>
                    <a href="/booking"><i class="fa fa-list mr-2 text-color-2"></i>booking</a>
                    <ul class="toggle-drop-menu">
                        <li><a href="/booking/create">Create booking</a></li>
                        <li><a href="/booking">All booking</a></li>
                    </ul>
                </li>
                <li>
                    <span class="side-menu-icon toggle-menu-icon ">
                        <i class="fa fa-angle-down"></i>
                    </span>
                    <a href="/posts"><i class="fa fa-list mr-2 text-color-2 bg-red"></i>Cars</a>
                    <ul class="toggle-drop-menu">
                        <li><a href="/posts/create">Create Cars</a></li>
                        <li><a href="/posts">All Cars</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/review"><i class="fa fa-list mr-2 text-color-2 bg-red"></i>Reviews</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="la la-power-off mr-2 text-color-11"></i>Logout</a>

                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </div><!-- end sidebar-menu-wrap -->
    </div>
</div>