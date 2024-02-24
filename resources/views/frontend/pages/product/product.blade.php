@extends('frontend.master')

  @section('content')

@include('frontend.components.product-Breadcrumb')
@include('frontend.components.product')
<livewire:latest-product/>

@endsection
