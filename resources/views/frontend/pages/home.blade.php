  @extends('frontend.master')

  @section('content')



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

                <li><a href="{{ route('category.wize.products',$item->id) }}">{{ $item->type }}

                @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">

                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                    <div class="hero__text">
                        <span>FRUIT FRESH</span>
                        <h2>Vegetable <br />100% Organic</h2>
                        <p>Free Pickup and Delivery Available</p>
                        <a href="#" class="primary-btn">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                        <h5><a href="#">Fresh Fruit</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
                        <h5><a href="#">Dried Fruit</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                        <h5><a href="#">Vegetables</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                        <h5><a href="#">drink fruits</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                        <h5><a href="#">drink fruits</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">

                </div>
            </div>
        </div>
        <div class="row featured__filter">

            @foreach ($products as $item)

            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic">
                        <a href="{{route('product.details',$item->id)}}"> <img src="{{ asset('/public/uploads/' . $item->image) }}" alt="Product Image"></a>
                        <ul class="featured__item__pic__hover">
                            {{-- <li><a href="#"><i class="fa fa-heart"></i></a></li> --}}
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">{{$item->name}}</a></h6>
                        <h5>{{$item->price}} Tk.</h5>
                    </div><br>


                    {{-- <a href="{{route('product.details',$item->id)}}" class="btn btn-info btn-lg" style="width: 150px;">Details</a>
                    <a href="" class="btn btn-success btn-lg" style="width: 100px;">Order</a> --}}



                </div>


            </div>


            @endforeach






        </div >

        <div class="pagination justify-content-end">
            {{ $products->links() }}
        </div>

    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<h3>fbfbfb</h3>
<div class="banner">
    <div class="container">
        <div class="row">

            @foreach ($banners as $item)
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{url('/public/uploads/'.$item->image)}}" alt="">
                        
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

<!-- Banner End -->


<!-- latest Product -->

<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Latest Products</h2>
                </div>
                <div class="featured__controls">

                    <ul>
                        <li class="active" data-filter="*">All</li>

                        @foreach ($latestCategories as $item)

                       <a href="{{ route('category.wize.products',$item->id) }}"> <li>{{$item->type}}</li> </a>

                        @endforeach
                    </ul>


                </div>
            </div>
        </div>
        <div class="row featured__filter">

            @foreach ($latestProducts as $item)

            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="featured__item">
                    <div class="featured__item__pic">
                        <a href="{{route('product.details',$item->id)}}"> <img src="{{ asset('/public/uploads/' . $item->image) }}" alt="Product Image"></a>
                        <ul class="featured__item__pic__hover">
                            {{-- <li><a href="#"><i class="fa fa-heart"></i></a></li> --}}
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">{{$item->name}}</a></h6>
                        <h5>{{$item->price}} Tk.</h5>
                    </div><br>


                    {{-- <a href="{{route('product.details',$item->id)}}" class="btn btn-info btn-lg" style="width: 150px;">Details</a>
                    <a href="" class="btn btn-success btn-lg" style="width: 100px;">Order</a> --}}



                </div>


            </div>


            @endforeach






        </div>
    </div>
</section>

<!-- Blog Section Begin -->
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($blogs as $item)



           <div class="col-lg-4 col-md-4 col-sm-6">
    <div class="blog__item">
        <div class="blog__item__pic">
            <img src="{{asset('/public/uploads/'.$item->image)}}" alt="">
        </div>
        <div class="blog__item__text">
            <ul>
                <li><i class="fa fa-calendar-o"></i> {{$item->updated_at}}</li>
                <li><i class="fa fa-comment-o"></i> 5</li>
                {{-- <li><i class="fa fa-calendar-o"></i> {{$item->comment}}</li> --}}
                <li>
                    <form action="{{route('commentStore')}}" method="POST" style="display: flex; align-items: center;">
                        @csrf

                        <input type="hidden" name="blog_id" value="{{ $item->id }}">
                        <input type="text" name="comment" placeholder="Write a comment" style="height: 40px; width: 180%;">
                        <button type="submit" style="background-color: #1877f2; color: white; border: none; padding: 8px 16px; border-radius: 4px; font-size: 14px; font-weight: bold; margin-left: 8px;">Post</button>
                    </form>

                </li>
            </ul>
            <h5><a href="#">{{$item->tittle}}</a></h5>
            <p>{{$item->description}}</p>
        </div>
    </div>
</div>



            @endforeach


        </div>
    </div>
</section>
<!-- Blog Section End -->


    <!-- Contact Section Begin -->
    <div class="text-center">
        <h2 style="color: black">Contact Us</h2>
    </div>
    <section class="contact spad">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>+01-3-8888-6868</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>60-49 Road 11378 New York</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>10:00 am to 23:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>hello@colorlib.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49116.39176087041!2d-86.41867791216099!3d39.69977417971648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886ca48c841038a1%3A0x70cfba96bf847f0!2sPlainfield%2C%20IN%2C%20USA!5e0!3m2!1sen!2sbd!4v1586106673811!5m2!1sen!2sbd"
            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>New York</h4>
                <ul>
                    <li>Phone: +12-345-6789</li>
                    <li>Add: 16 Creek Ave. Farmingdale, NY</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->



    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>

            <form action="{{route('contact.form.store')}}" method="POST">
                @csrf


                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                  @endif

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="name" value="{{old('name')}}" placeholder="Your name">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="email" value="{{old('email')}}" placeholder="Your Email">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Your message" name="message">{{old('message')}}</textarea>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->



@endsection
