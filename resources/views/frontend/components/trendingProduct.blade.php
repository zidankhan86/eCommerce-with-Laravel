<!-- <section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="latest-product__text">
                    <h4 style="text-align: center"><b>Trending Products</b> </h4>
                    <div class="latest-product__slider owl-carousel">




                        <div class="latest-prdouct__slider__item" style="display: flex;">
                            @foreach ($trendingProduct as $item)
                            <a href="{{ url('/product-details',$item->id) }}" class="latest-product__item" >
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('/public/uploads/' . $item->image) }}" alt="">
                                    <div class="latest-product__item__text">
                                    <h6>{{ $item->name }}</h6>
                                    @if ($item->discount)
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <h5 style="color: rgb(214, 57, 17); margin-right: 10px;"><small><del>{{ $item->price }} Tk.</del></small></h5>
                                        <h5 style="color: rgb(214, 57, 17;"><small>{{ $item->discounted_price }} Tk.</small></h5>
                                    </div>
                                    @else
                                    <h5 style="color: rgb(214, 57, 17)"><small>{{ $item->price }} Tk.</small></h5>
                                    @endif
                                </div>
                                </div>

                            </a>
                            @endforeach

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
