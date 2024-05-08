<div>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                
                <a class="nav-link" href="{{route('dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Home</div>

                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i>
                </div>
                    Categories
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('category.list')}}"> Category</a>
                    </nav>
                    
                </div>


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"  aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-cart-plus"></i></div>
                    Product
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">



                          <a class="nav-link" href="{{route('product.list')}}">Product</a>

                      

                    </nav>

                </div>

                <a class="nav-link" href="{{route('order.list')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-cart-plus"></i></div>
                    Orders
                </a>
                <a class="nav-link" href="{{route('logo.list')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-ribbon"></i></div>
                   Company Logo
                </a>

               


                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseBanners" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-feather"></i></div>
                    Banners
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseBanners" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <a class="nav-link" href="{{route('hero.list')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-feather"></i></div>
                    Hero Banner
                </a>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('banner.list.one')}}">Banner-1(Top)</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('banner.list.two')}}">Banner-2(Middle)</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('banner.list')}}">Banner-3(bottom)</a>

                    </nav>

                </div>

                <a class="nav-link" href="{{route('contact.list')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-comment"></i></div>
                    User Feedback
                </a>

                <a class="nav-link" href="{{route('report')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-print"></i></div>
                    Print Report
                </a>
                <hr>
                <a class="nav-link" href="{{route('sub.category.form')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-cog"></i></div>
                    Settings
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{auth()->user()->name}}
        </div>
    </nav>
</div>

</div>
