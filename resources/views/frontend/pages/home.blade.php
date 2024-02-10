  @extends('frontend.master')

  @section('content')

  <!-- Page Preloder -->
  {{-- <div id="preloder">
    <div class="loader"></div>
</div> --}}

 @include('frontend.components.navLayer')
 @include('frontend.components.hero')
 @include('frontend.components.bannerOne')
 
 <livewire:latest-product/>
 @include('frontend.components.bannerTwo')
 @include('frontend.components.product')
 @include('frontend.pages.product.latest-product-squad')
 @include('frontend.components.banner')
 <!-- @include('frontend.components.trendingProduct') -->
 <livewire:trending-product/>
 @include('frontend.components.blog')

@endsection
