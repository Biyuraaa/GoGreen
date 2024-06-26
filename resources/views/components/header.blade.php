<header class="main-header">
    <!-- header top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="logo-box">
                        <a href="index.html">
                            <figure><img src="{{asset('assets/images/home/logo.png')}}" alt="" /></figure>
                        </a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="info-area">
                        <div class="">
                            <div class="single-info">
                                <div class="icon-box"><i class="flaticon-home"></i></div>
                                <div class="text">
                                    Kampus C Unair,<br />
                                    Surabaya, Indonesia
                                </div>
                            </div>
                            <div class="single-info">
                                <div class="icon-box">
                                    <i class="flaticon-telephone"></i>
                                </div>
                                <div class="text">
                                    (+62) 8222211111<br />
                                    (+62) 8111122222
                                </div>
                            </div>
                            <ul class="social-top trn_5">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top end -->

    @if (Auth::user())
    <div class="theme_menu stricky">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 menu-column">
                    <div class="menu-area">
                        <nav class="main-menu">
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('services')}}">Services</a></li>
                                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                                    <li><a href="{{route('blogs.index')}}">Blog</a></li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li> 
                                    <li><a href="{{route('doLogout')}}">Log out</a></li>
                                    @if (Auth::user())
                                    <li>
                                        <a href="{{route('profile.index')}}">
                                            @if (Auth::user()->image)
                                                <img src="{{ asset('assets/images/users/' . Auth::user()->image) }}"
                                                    alt="{{ Auth::user()->name }}" class=""
                                                    style="width: 30px; height: 30px;" />
                                            @else
                                                <img src="{{ asset('assets/images/users/default.png') }}"
                                                    alt="{{ Auth::user()->name }}" class="img-circle"
                                                    style="width: 30px; height: 30px;" />
                                            @endif

                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </nav>
                        <div class="donate-box">
                            <a href="{{route('dashboard')}}">
                                <button onclick="">Dashboard</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</header>
