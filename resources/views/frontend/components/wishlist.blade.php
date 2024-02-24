@extends('frontend.master')

@section('content')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                    <th>Move to Cart</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($products as $wishlist)
                                <tr>
                             
                                    <td class="shoping__cart__item">
                                        <img width="100" height="100" src="{{ asset('/public/uploads/' . $wishlist->image) }}" alt="">
                                        <h5>{{$wishlist->name}}</h5>
                                    </td>
                           
                                    <td>BDT {{$wishlist->price}}</td>
                                    <td>1</td>
                                    <td >
                                     <a class="text-danger" href="{{route('remove.Wishlist',$wishlist->id)}}">&#10060;</a></td>
                                      <td >
                                     <form action="{{ route('cart.add-from-wishlist', $wishlist->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="quantity" value="1" min="1"> <!-- Quantity input -->
                                            <button type="submit" class="btn btn-info">Add to cart</button>
                                        </form></td>
                                </tr>
                            
                                     @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

@endsection
