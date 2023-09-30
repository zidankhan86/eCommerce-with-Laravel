 <!-- Hero Section Begin -->
 <section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <span>All Categories</span>
                    </div>
                    <ul>
                        @foreach ($categories as $item)
                            <li><a href="{{ url('/category',$item->id) }}">{{ $item->type }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="{{ route('user.search') }}">
                            @csrf
                            <input type="text" name="search_key"  placeholder="What do you need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>01711-004311</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                @foreach ($heroBanners as $item)
                    <div class="hero__item" style="background-image: url('{{ url('/public/uploads/'.$item->image) }}'); background-size: cover;">
                        <div class="hero__text">
                            <span>{{ $item->small_tittle }}</span>
                            <h2>{{ $item->tittle }}</h2>
                            <p>{{ $item->description }}</p>
                            <a href="{{ url('/product') }}" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->


