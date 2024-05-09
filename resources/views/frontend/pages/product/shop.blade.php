@extends('frontend.master')

  @section('content')


<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Department</h4>
                        <ul>
                            @foreach ($latestCategories as $category)
                            <li><a href="{{ url('/category',$category->id) }}">{{$category->type}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar__item">
                        <h4>Price</h4>
                        <div class="price-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="10" data-max="540">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__item sidebar__item__color--option">
                        <h4>Colors</h4>
                        <div class="sidebar__item__color sidebar__item__color--white">
                            <label for="white">
                                White
                                <input type="radio" id="white">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--gray">
                            <label for="gray">
                                Gray
                                <input type="radio" id="gray">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--red">
                            <label for="red">
                                Red
                                <input type="radio" id="red">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--black">
                            <label for="black">
                                Black
                                <input type="radio" id="black">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--blue">
                            <label for="blue">
                                Blue
                                <input type="radio" id="blue">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--green">
                            <label for="green">
                                Green
                                <input type="radio" id="green">
                            </label>
                        </div>
                    </div>
                    <div class="sidebar__item">
                        <h4>Popular Size</h4>
                        <div class="sidebar__item__size">
                            <label for="large">
                                Large
                                <input type="radio" id="large">
                            </label>
                        </div>
                        <div class="sidebar__item__size">
                            <label for="medium">
                                Medium
                                <input type="radio" id="medium">
                            </label>
                        </div>
                        <div class="sidebar__item__size">
                            <label for="small">
                                Small
                                <input type="radio" id="small">
                            </label>
                        </div>
                        <div class="sidebar__item__size">
                            <label for="tiny">
                                Tiny
                                <input type="radio" id="tiny">
                            </label>
                        </div>
                    </div>
                    <div class="sidebar__item">
                        <div class="latest-product__text">
                            <h4>Latest Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($latestProducts as $item)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <a href="{{url('/product-details',$item->id)}}"> <img src="{{ asset('/public/uploads/' . $item->image) }}" alt="Product Image"></a>
                                        </div><br><br><br>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $item->name }}</h6>
                                            <span>{{ $item->price }} Tk</span>
                                        </div>
                                    </a>
                                    @endforeach
                                   
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="product__discount">
                    <div class="section-title product__discount__title">
                        <h2>Sale Off</h2>
                    </div>
                    <div class="row">
                        <div class="product__discount__slider owl-carousel">

                            @foreach ($products_has_discount as $sale)
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="{{ asset('/public/uploads/' . $item->image) }}">
                                        <div class="product__discount__percent">-{{$sale->discount}}%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="{{url('/product-details',$sale->id)}}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{route('add.to.cart',$sale->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>{{$sale->ProductCategory->type}}</span>
                                        <h5>{{$sale->name}}</h5>
                                         @if ($sale->discount)
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <h5 style="color: rgb(214, 57, 17); margin-right: 10px;"><del>{{ $sale->price }} Tk.</del></h5>
                                        <h5 style="color: rgb(214, 57, 17;">{{ $sale->discounted_price }} Tk.</h5>
                                    </div>
                                    @else
                                    <h5 style="color: rgb(214, 57, 17)">{{ $sale->price }} Tk.</h5>
                                    @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                           
                        </div>
                    </div>
                </div>
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Sort By</span>
                                <select>
                                    <option value="0">Default</option>
                                    <option value="0">Default</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span>{{$total_products}}</span> Products found</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row featured__filter">

                    @foreach ($products as $item)
        
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
        
                        <div class="featured__item">
                            <div class="featured__item__pic">
                                <a href="{{url('/product-details',$item->id)}}"> <img src="{{ asset('/public/uploads/' . $item->image) }}" alt="Product Image"></a>
                                <ul class="featured__item__pic__hover">
                               @auth
                                <li>
                                    @php
                                    $inWishlist = Auth::check() && Auth::user()->wishlistProducts->contains('id', $item->id);
                                    @endphp
        
                                    <form method="POST" action="{{ route('add.to.wishlist', ['id' => $item->id]) }}">
                                        @csrf
                                        <button type="submit" class="wishlist-button{{ $inWishlist ? ' in-wishlist' : '' }}">
                                            <i class="fa fa-heart"></i>
                                        </button>
                                    </form>
                                    </li>
                                  @endauth
                                    <li><a href="{{url('/product-details',$item->id)}}"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="{{route('add.to.cart',$item->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
        
                                </ul>
                                     </div>
        
                              
                                <div class="featured__item__text">
        
                                    @if($item->discount)
                                    <div class="discount-badge">
                                        <span>-{{ $item->discount }}% OFF</span>
                                    </div>
                                    @endif
        
                                    <h6><a href="#">{{ $item->name }}</a></h6>
                                    <div class="star-rating">
                                        @php
                                            // Retrieve the product ratings for the current product
                                            $productRatings = App\Models\ProductRating::where('product_id', $item->id)->get();
        
                                            // Calculate the average rating and limit it to a maximum of 5
                                            $averageRating = min($productRatings->avg('rating'), 5);
        
                                            // Calculate the number of full stars
                                            $fullStars = floor($averageRating);
        
                                            // Calculate the presence of a half star
                                            $hasHalfStar = ($averageRating - $fullStars) >= 0.5;
                                        @endphp
        
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $fullStars)
                                                <span class="star" style="font-size: 24px; color: gold;">&#9733;</span>
                                            @elseif ($hasHalfStar)
                                                <span class="star half" style="font-size: 24px; color: gold;">&#9733;</span>
                                                @php $hasHalfStar = false; @endphp
                                            @else
                                                <span class="star" style="font-size: 24px; color: gray;">&#9733;</span>
                                            @endif
                                        @endfor
                                    </div>
        
        
                                    @if ($item->discount)
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <h5 style="color: rgb(214, 57, 17); margin-right: 10px;"><del>{{ $item->price }} Tk.</del></h5>
                                        <h5 style="color: rgb(214, 57, 17;">{{ $item->discounted_price }} Tk.</h5>
                                    </div>
                                    @else
                                    <h5 style="color: rgb(214, 57, 17)">{{ $item->price }} Tk.</h5>
                                    @endif
                                </div>

                                <br>
                        </div>
                    </div>
                    @endforeach
                </div >

                <div>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

@endsection
