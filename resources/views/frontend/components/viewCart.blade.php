<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if(session()->has('cart') and count(session()->get('cart')) > 0)
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $subtotal = 0;
                            @endphp
                            @foreach(session()->get('cart') as $key => $data)
                            @php
                            $subtotal += $data['subtotal'];
                            @endphp
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="img/cart/cart-1.jpg" alt="">
                                    <h5>{{$data['name']}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    {{$data['price']}} Tk.
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="{{$data['quantity']}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    {{$data['subtotal']}} Tk.
                                </td>
                                <td class="shoping__cart__item__close">
                                    <a href="{{route('cart.item.delete',$key)}}"><i class="icon_close" style="color: black"></i></a>
                                </td>
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
                    <a href="{{route('cart.clear')}}" class="primary-btn cart-btn cart-btn-right">
                        Remove Cart</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Discount Codes</h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Subtotal <span id="subtotal">{{$subtotal}} Tk.</span></li>
                        <li>Total <span id="total">{{$subtotal}} Tk.</span></li>
                    </ul>
                    <a href="{{ url('/product-checkout', $key) }}" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-lg-12">
                <h3>Your cart is empty. :)</h3>
            </div>
        </div>
        @endif
    </div>
</section>
<!-- Shoping Cart Section End -->
