  @extends('frontend.master')

  @section('content')
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


 @endsection
