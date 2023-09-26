<!-- Banner Begin -->

<div class="banner">
    <div class="container">
        <div class="row">
            @foreach ($banners as $item)
                <div class="col-lg-12 col-md-12 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ url('/public/uploads/'.$item->image) }}" alt="" style="width: 10200px; height: 300px;">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


<!-- Banner End -->
