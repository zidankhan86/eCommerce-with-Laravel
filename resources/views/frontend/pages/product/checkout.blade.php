@extends('frontend.master')

  @section('content')
  <!DOCTYPE html>
  <html lang="zxx">



  <body>




      <!-- Checkout Section Begin -->
      <section class="checkout spad">
          <div class="container">

            <form action="{{route('product.order.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="row">
                  <div class="col-lg-12">
                      {{-- <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code --}}
                      </h6>
                  </div>
              </div>
              <div class="checkout__form">

                @if (session('success'))

                <p class="alert alert-success">{{session('success')}}</p>

                @endif
                  <h4>Billing Details</h4>
                  <form action="#">
                      <div class="row">
                          <div class="col-lg-8 col-md-6">
                              <div class="row">


                                  <div class="col-lg-6">
                                      <div class="checkout__input">
                                          <p>Fist Name<span>*</span></p>
                                          <input type="text" name="first_name">
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="checkout__input">
                                          <p>Last Name<span>*</span></p>
                                          <input type="text" name="last_name">
                                      </div>
                                  </div>
                              </div>

                              <div class="checkout__input">
                                  <p>Address<span>*</span></p>
                                  <input type="text" placeholder="Street Address" class="checkout__input__add" name="address">
                                  <input type="text" placeholder="Apartment, suite, unite ect (optinal)" name="optional_address">
                              </div>
                              <div class="checkout__input">
                                  <p>Town/City<span>*</span></p>
                                  <input type="text" name="city">
                              </div>

                              <div class="checkout__input">
                                  <p>Postcode / ZIP<span>*</span></p>
                                  <input type="text" name="postcode">
                              </div>
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="checkout__input">
                                          <p>Phone<span>*</span></p>
                                          <input type="text" name="phone">
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="checkout__input">
                                          <p>Email<span>*</span></p>
                                          <input type="text" name="email">
                                      </div>
                                  </div>
                              </div>
                              <div class="checkout__input__checkbox">
                                  <label for="acc">
                                      Create an account? <a href="">Click here..</a>
                                      <input type="checkbox" id="acc">
                                      <span class="checkmark"></span>
                                  </label>
                              </div>


                              <div class="checkout__input">
                                  <p>Order notes<span>*</span></p>
                                  <input type="text" name="note"
                                      placeholder="Notes about your order, e.g. special notes for delivery.">
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                              <div class="checkout__order">
                                  <h4>Your Order</h4>
                                  <div class="checkout__order__products">Products <span>Total</span></div>
                                  <ul>
                                      <li>Vegetable’s Package <span>$75.99</span></li>
                                      <li>Fresh Vegetable <span>$151.99</span></li>
                                      <li>Organic Bananas <span>$53.99</span></li>
                                  </ul>
                                  <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div>
                                  <div class="checkout__order__total">Total <span>$750.99</span></div>
                                  <div class="checkout__input__checkbox">
                                      <label for="acc-or">
                                          Create an account?
                                          <input type="checkbox" id="acc-or">
                                          <span class="checkmark"></span>
                                      </label>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                      ut labore et dolore magna aliqua.</p>


                                  <button type="submit" class="site-btn">PLACE ORDER</button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>

            </form>
          </div>
      </section>
      <!-- Checkout Section End -->







  </body>

  </html>




  @endsection
