<!DOCTYPE html>
<html lang="zxx">



<body>





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

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$details->name}}</h3>

                        <div class="product__details__price">{{$details->price}}.00 Tk</div>
                        <p>{{$details->description}}</p>
                        <div class="product__details__quantity">
                            <div class="">
                                <div class="">
                                    <a href="{{url('/product-checkout-single/product',$details->id)}}" class="primary-btn">ORDER</a>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('add.to.cart',$details->id)}}" class="primary-btn">ADD TO CART</a>
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


                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                              <div class="product__details__tab__desc">
                                  <h6>Products Information</h6>
                                  <p>{!! nl2br(e($details->product_information)) !!}</p>
                              </div>
                          </div>


                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>{!! nl2br(e($details->product_information)) !!}</p>



    <!-- Product Details  -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$details->name}}</h3>
                        <form action="{{ route('product.rate',$details->id) }}" method="POST">
                            @csrf
                            <div class="rating-css">
                                <div class="star-icon">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <input type="radio" value="{{ $i }}" name="rating" id="rating{{ $i }}">
                                        <label for="rating{{ $i }}" class="fa fa-star"></label>
                                    @endfor
                                </div>
                                <button type="submit" class="btn btn-info">Rate This Product</button>
                            </div>
                        </form>

                        <p>{{$details->description}}</p>
                        <div class="product__details__quantity">

                        </div>


                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">

                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">


                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                              <div class="product__details__tab__desc">
                                  <h6>Products Information</h6>
                                  <p>{!! nl2br(e($details->product_information)) !!}</p>
                              </div>
                          </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
    <style>
        /* rating */
    .rating-css div {
        color: #ffe400;
        font-size: 5px;
        font-family: sans-serif;
        font-weight: 300;
        text-align: ;
        text-transform: uppercase;
        padding: 10px 0;
      }
      .rating-css input {
        display: none;
      }
      .rating-css input + label {
        font-size: 25px;
        text-shadow: 1px 1px 0 #8f8420;
        cursor: pointer;
      }
      .rating-css input:checked + label ~ label {
        color: #b4afaf;
      }
      .rating-css label:active {
        transform: scale(0.8);
        transition: 0.3s ease;
      }

    /* End of Star Rating */
    </style>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
    <style>
        /* rating */
    .rating-css div {
        color: #ffe400;
        font-size: 5px;
        font-family: sans-serif;
        font-weight: 300;
        text-align: ;
        text-transform: uppercase;
        padding: 10px 0;
      }
      .rating-css input {
        display: none;
      }
      .rating-css input + label {
        font-size: 25px;
        text-shadow: 1px 1px 0 #8f8420;
        cursor: pointer;
      }
      .rating-css input:checked + label ~ label {
        color: #b4afaf;
      }
      .rating-css label:active {
        transform: scale(0.8);
        transition: 0.3s ease;
      }

    /* End of Star Rating */
    </style>



</body>

</html>
