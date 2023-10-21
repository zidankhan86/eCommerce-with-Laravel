  @extends('frontend.master')

  @section('content')

  <!-- Page Preloder -->
  {{-- <div id="preloder">
    <div class="loader"></div>
</div> --}}

 @include('frontend.components.navLayer')
 @include('frontend.components.hero')
 @include('frontend.components.bannerOne')
 @include('frontend.components.latestProduct')
 @include('frontend.components.bannerTwo')
 @include('frontend.components.product')
 @include('frontend.components.banner')
 @include('frontend\components\trendingProduct')
 @include('frontend.components.blog')

@endsection
