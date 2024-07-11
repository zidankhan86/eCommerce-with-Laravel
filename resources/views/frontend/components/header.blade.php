<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            @php
                                $title = App\Models\Title::latest()->first();
                            @endphp
                            <li><i class="fa fa-envelope"></i>{{ optional($title)->title }}</li>
                            <li>ORDER NOW</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a>
                        </div>
                        <div class="header__top__right__language">


                            @guest
                                <a href="{{ route('registration') }}">
                                    <div>Registration</div>
                                </a>
                            @endguest

                            @auth
                                @if (auth()->user()->role == 'customer')
                                    <a href="{{ url('/profile') }}">
                                        <div>Profile</div>
                                    </a>
                                @endif
                            @endauth


                        </div>


                        <div class="header__top__right__auth">
                            @auth
                                @if (auth()->user()->role == 'customer')
                                    <a href="{{ route('logout') }}"><i class="fa fa-user"></i> Logout</a>
                                @endif
                            @endauth


                            @auth
                            @else
                                <a href="{{ route('login.frontend') }}"><i class="fa fa-user"></i> Login</a>
                            @endauth
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @php
                    $logo = App\Models\CompanyLogo::latest()->first();
                @endphp
                <div class="header__logo">
                    @if ($logo)
                        <a href="{{ route('home') }}"><img src="{{ url('/public/uploads/', $logo->image) }}"
                                alt=""></a>
                    @else
                        <a href="{{ route('home') }}">Inseart a logo</a>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/product') }}">Shop</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="{{ route('wishlist.index') }}"><i class="fa fa-heart"></i> <span> @auth
                                        <button>
                                            {{ Auth::user()->wishlistProducts->count() }}
                                        </button>
                                    @else
                                        <button>
                                            0
                                        </button>
                                    @endauth
                                </span></a></li>
                        <li><a href="{{ url('/view-cart') }}"><button class="btn btn-pink"><i
                                        class="fa fa-shopping-bag"><span>{{ session()->has('cart') ? count(session()->get('cart')) : 0 }}</span></i>BAG</button>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->
<style>
    .btn-pink {
        background-color: #e83e8c;
        color: white;
        border: none;
    }

    .btn-pink:hover {
        background-color: #d63384;
        color: white;
    }
</style>
