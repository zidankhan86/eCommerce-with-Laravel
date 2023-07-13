@extends('frontend.master')

  @section('content')

  <!DOCTYPE html>
  <html lang="zxx">



  <body>


      <!-- Hero Section Begin -->
      <section class="hero hero-normal">
          <div class="container">
              <div class="row">
                  <div class="col-lg-3">
                      <div class="hero__categories">
                          <div class="hero__categories__all">
                              <i class="fa fa-bars"></i>
                              <span>All departments</span>
                          </div>
                          <ul>
                              <li><a href="#">Fresh Meat</a></li>
                              <li><a href="#">Vegetables</a></li>
                              <li><a href="#">Fruit & Nut Gifts</a></li>
                              <li><a href="#">Fresh Berries</a></li>
                              <li><a href="#">Ocean Foods</a></li>
                              <li><a href="#">Butter & Eggs</a></li>
                              <li><a href="#">Fastfood</a></li>
                              <li><a href="#">Fresh Onion</a></li>
                              <li><a href="#">Papayaya & Crisps</a></li>
                              <li><a href="#">Oatmeal</a></li>
                              <li><a href="#">Fresh Bananas</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-9">
                      <div class="hero__search">
                          <div class="hero__search__form">
                              <form action="#">
                                  <div class="hero__search__categories">
                                      All Categories
                                      <span class="arrow_carrot-down"></span>
                                  </div>
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
                  </div>
              </div>
          </div>
      </section>
      <!-- Hero Section End -->

      <!-- Breadcrumb Section Begin -->
      <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <div class="breadcrumb__text">
                          <h2>Vegetable’s Package</h2>
                          <div class="breadcrumb__option">
                              <a href="./index.html">Home</a>
                              <a href="./index.html">Vegetables</a>
                              <span>Vegetable’s Package</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Breadcrumb Section End -->

      <!-- Product Details Section Begin -->
      <section class="product-details spad">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-md-6">
                      <div class="product__details__pic">
                          <div class="product__details__pic__item">
                              <img class="product__details__pic__item--large"


                                  src="{{ asset('/public/uploads/' . $details->image) }}" alt="">


                          </div>
                          <div class="product__details__pic__slider owl-carousel">
                              <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                  src="img/product/details/thumb-1.jpg" alt="">
                              <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                  src="img/product/details/thumb-2.jpg" alt="">
                              <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                  src="img/product/details/thumb-3.jpg" alt="">
                              <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                  src="img/product/details/thumb-4.jpg" alt="">
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                      <div class="product__details__text">
                          <h3>{{$details->name}}</h3>
                          <div class="product__details__rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                              <span>(18 reviews)</span>
                          </div>
                          <div class="product__details__price">{{$details->price}}.00 Tk</div>
                          <p>{{$details->description}}</p>
                          <div class="product__details__quantity">
                              <div class="">
                                  <div class="pro-qty">
                                      <a href="{{route('product.checkout',$details->id)}}" class="primary-btn">ORDER</a>
                                  </div>
                              </div>
                          </div>
                          <a href="#" class="primary-btn">ADD TO CARD</a>
                          {{-- <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> --}}
                          <ul>
                              <li><b>Availability</b> <span>In Stock</span></li>
                              <li><b>Shipping</b> <span>{{$details->time}} Days inside Dhaka <samp>5 Days Outside</samp></span></li>
                              <li><b>Weight</b> <span>{{$details->weight}} Kg</span></li>
                              <li><b>Share on</b>
                                  <div class="share">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-instagram"></i></a>
                                      <a href="#"><i class="fa fa-pinterest"></i></a>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="product__details__tab">
                          <ul class="nav nav-tabs" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                      aria-selected="true">Description</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                      aria-selected="false">Information</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                      aria-selected="false">Reviews <span>(1)</span></a>
                              </li>
                          </ul>
                          <div class="tab-content">
                              <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                  <div class="product__details__tab__desc">
                                      <h6>Products Infomation</h6>



                                      <p> <p>{{$details->product_information}}</p></p>



                                          
                                  </div>
                              </div>
                              <div class="tab-pane" id="tabs-2" role="tabpanel">
                                  <div class="product__details__tab__desc">
                                      <h6>Products Infomation</h6>
                                      <p>{{$details->product_information}}</p>

                                  </div>
                              </div>
                              <div class="tab-pane" id="tabs-3" role="tabpanel">
                                  <div class="product__details__tab__desc">
                                      <h6>Products Infomation</h6>
                                      <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                          Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                          Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                          sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                          eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                          Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                          sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                          diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                          ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                          Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                          Proin eget tortor risus.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Product Details Section End -->



  </body>

  </html>



  @endsection
