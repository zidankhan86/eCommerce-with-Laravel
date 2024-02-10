<div>
    <!-- latest Product -->
<br><br>
<div class="row">
    <div class="col-lg-12">

        <div class="featured__controls">

            <ul>
                <li class="active" data-filter="*"><strong>New Arrival</strong></li>


            </ul>


        </div>
    </div>
</div>


<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">

                @foreach ($latestProducts as $item)
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                        <a href="{{url('/product-details',$item->id)}}"> <img src="{{ asset('/public/uploads/' . $item->image) }}" alt="Product Image"></a>
                        <h5><a href="{{ url('/product-details',$item->id) }}">{{ $item->name }}</a></h5>

                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</section>



</div>
