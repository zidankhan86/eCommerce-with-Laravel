<!DOCTYPE html>
<html lang="zxx">

<body>
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your
                        code --}}
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                <h4>Billing Details</h4>
                <form action="{{ route('product.order.store', $product->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>First Name<span>*</span></p>
                                        <input type="text" name="first_name">
                                        @error('first_name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" name="last_name">
                                        @error('last_name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add"
                                    name="address">

                                @error('address')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror

                                <input type="text" placeholder="Apartment, suite, unit etc (optional)"
                                    name="optional_address">
                            </div>

                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text" name="city">

                                @error('city')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text" name="postcode">

                                @error('postcode')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>


                            <input type="hidden" name="total_price" value="{{ $product->price }}">

                            <input type="hidden" name="name" value="{{ $product->name }}">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="phone">

                                        @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email">

                                        @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <label for=""></label>
                            <input type="hidden"
                                class="form-control" name="user_id" value="{{ auth()->user()->id }}">
                            
                            </div>

                            <input type="hidden" name="product_id" value="{{$product->id}}">

                            

                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Create an account? <a href="">Click here..</a>
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input type="text" name="note" placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    <li>{{ $product->name }} <span>{{ $product->price }} Tk.</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>{{ $product->price }} Tk.</span></div>
                                <div class="checkout__order__total">Total <span>{{ $product->price }} Tk.</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Thank you for choosing us. Happy shopping.</p>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
</body>

</html>
