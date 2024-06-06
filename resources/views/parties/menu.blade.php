<!--=================================
 header -->

<header id="header" class="header light logo-center magazine-header">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 xs-mb-10">
                    <div class="text-center topbar-call text-md-start">
                        <ul>
                            <li><i class="fa fa-envelope-o theme-color"></i> gethelp@webster.com</li>
                            <li><i class="fa fa-phone"></i> <a href="tel:+7042791249"> <span>+(704) 279-1249 </span>
                                </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="text-center topbar-social text-md-end">
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                            <li><a href="#"><span class="fa fa-google"></span></a></li>
                            <li><a href="#"><span class="ti-twitter"></span></a></li>
                            <li><a href="#"><span class="ti-linkedin"></span></a></li>
                            <li><a href="#"><span class="ti-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=================================
   mega menu -->

    <div class="menu">
        <!-- menu start -->
        <nav id="menu" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 position-relative">
                            <div class="mt-0">
                                <!-- menu logo -->
                                <ul class="menu-logo">
                                    <li>
                                        <a href="#"><img id="logo_img"
                                                src="{{ asset('assets/demo-categories/magazine-02/images/logo.png') }}"
                                                alt="logo"> </a>
                                    </li>
                                </ul>
                                <div class="add-banner">
                                    <a href=""> <img class="img-fluid"
                                            src="{{ asset('assets/demo-categories/magazine/images/banner-02.jpg') }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <!-- menu links -->
                            <div class="menu-bar">
                                <ul class="menu-links">
                                    <li class="{{ Route::current()->getName()=="home"?"active":"" }}"><a href="{{ route('home') }}">Accueil</a></li>
                                    <li class="{{ Route::current()->getName()=="about"?"active":"" }}"><a href="{{ route('about') }}"> A propos</a></li>
                                    <li class="{{ Route::current()->getName()=="services"?"active":"" }}"><a href="{{ route('services') }}"> Nos services</a></li>
                                    <li><a href="{{ route('agenda') }}">Notre agenda <i class="fa fa-angle-down fa-indicator"></i></a>
                                        <div class="drop-down">
                                            <!--grid row-->
                                            <div class="grid-row">
                                                <div class="grid-col-12">
                                                    <ul>
                                                        <li><a href="{{ route('agenda') }}">Toutes<span class="badge bg-primary">All</span> </a></li>
                                                        <li><a href="#">Actualités</a></li>
                                                        <li><a href="#">Events </a></li>
                                                        <li><a href="#">Conférence</a></li>
                                                        <li><a href="#">Decouverte </a></li>
                                                        <li><a href="#">Ouvrage</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="{{ Route::current()->getName()=="abonnement"?"active":"" }}"><a href="{{ route('abonnement') }}">Abonnements</a></li>
                                    <li class="{{ Route::current()->getName()=="live"?"active":"" }}"><a href="{{ route('live') }}">Actuelement <span class="badge bg-danger">Live</span> </a></li>
                                </ul>
                                <div class="search-cart">
                                    <div class="search">
                                        <a class="search-btn not_click" href="javascript:void(0);"></a>
                                        <div class="search-box not-click">
                                            <form action="search.html" method="get">
                                                <input type="text" class="not-click form-control" name="search"
                                                    placeholder="Search.." value="">
                                                <button class="search-button" type="submit"> <i
                                                        class="fa fa-search not-click"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- menu end -->
    </div>
</header>

<!--=================================
   header -->
