 <!-- Footer Section Begin -->
 <footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    @php
                    $logo = App\Models\CompanyLogo::latest()->first();
                    @endphp
                    <div class="footer__about__logo">
                        @if($logo)
                        <a href="{{ route('home') }}"><img src="{{url('/public/uploads/', $logo->image)}}" alt=""></a>
                        @else
                            <a href="{{ route('home') }}">Inseart a logo</a>
                         @endif
                    </div>

                   
                    <ul>
                        <li>Address: </li>
                        <li>Phone: 01711111111</li>
                        <li>Email: eCommerce@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About Our Shop</a></li>
                        <li><a href="#">Secure Shopping</a></li>
                        <li><a href="#">Delivery infomation</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Our Sitemap</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Innovation</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Join Our Newsletter Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="https://www.facebook.com/nongorfoodbd"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/nongorfood/"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/nongorfood"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UC-0rsi0dXMF_k1zKjXZOAqw"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  by {{env('app_name')}}
                    </p></div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
