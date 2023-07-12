@extends('frontend.master')

  @section('content')




<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".oranges">Oranges</li>
                        <li data-filter=".fresh-meat">Fresh Meat</li>
                        <li data-filter=".vegetables">Vegetables</li>
                        <li data-filter=".fastfood">Fastfood</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">


            @foreach ($products as $item)


            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic">
                        <img src="{{ asset('/public/uploads/' . $item->image) }}" alt="Product Image">
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


                    <a href="{{route('product.details',$item->id)}}" class="btn btn-info btn-lg" style="width: 150px;">Details</a>
                    <a href="" class="btn btn-success btn-lg" style="width: 100px;">Order</a>



                </div>
            </div>



             @endforeach





        </div>
    </div>
</section>
<!-- Featured Section End -->

@endsection
