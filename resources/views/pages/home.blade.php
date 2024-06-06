@extends("layouts.template")
@section("content")
<section class="white-bg o-hidden">
    <div class="p-0 container-fluid">
        <div class="owl-carousel bottom-right-dots" data-nav-dots="true" data-items="4" data-md-items="4"
            data-sm-items="2" data-xs-items="1" data-xx-items="1" data-space="0">
            <div class="item">
                <div class="blog-overlay">
                    <div class="blog-image">
                        <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner/01.jpg') }}" alt="">
                    </div>
                    <div class="blog-name">
                        <a class="tag" href="#"> Fashion </a>
                        <h4 class="text-white mt-15"><a href="#">Does your life lack meaning</a></h4>
                        <span class="text-white">By adimn / <a href="#">Business</a></span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="blog-overlay">
                    <div class="blog-image">
                        <img class="img-fluid"
                            src="{{ asset('assets/demo-categories/magazine-02/images/banner/02.jpg') }}" alt="">
                    </div>
                    <div class="blog-name">
                        <a class="tag" href="#"> Style </a>
                        <h4 class="text-white mt-15"><a href="#">Supercharge your motivation</a></h4>
                        <span class="text-white">By adimn / <a href="#">Business</a></span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="blog-overlay">
                    <div class="blog-image">
                        <img class="img-fluid"
                            src="{{ asset('assets/demo-categories/magazine-02/images/banner/03.jpg') }}" alt="">
                    </div>
                    <div class="blog-name">
                        <a class="tag" href="#"> Lookbook </a>
                        <h4 class="text-white mt-15"><a href="#">Helen keller a teller seller</a></h4>
                        <span class="text-white">By adimn / <a href="#">Business</a></span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="blog-overlay">
                    <div class="blog-image">
                        <img class="img-fluid"
                            src="{{ asset('assets/demo-categories/magazine-02/images/banner/04.jpg') }}" alt="">
                    </div>
                    <div class="blog-name">
                        <a class="tag" href="#"> Trend </a>
                        <h4 class="text-white mt-15"><a href="#">The other virtues practice</a></h4>
                        <span class="text-white">By adimn / <a href="#">Business</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
  banner -->


<!--=================================
  blog -->

<section class="page-section-ptb white-bg o-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title line-dabble">
                            <h4 class="title">Les plus marquant</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-overlay">
                            <div class="blog-image">
                                <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner/03.jpg') }}" alt="">
                            </div>
                            <div class="blog-name">
                                <a class="tag" href="#"> Clothes </a>
                                <h4 class="text-white mt-15"><a href="#">You will begin to realise</a></h4>
                                <span class="text-white">By adimn / <a href="#">Business</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 xs-mt-30">
                        <div class="blog-overlay">
                            <div class="blog-image">
                                <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner/04.jpg') }}" alt="">
                            </div>
                            <div class="blog-name">
                                <a class="tag" href="#"> Mackup </a>
                                <h4 class="text-white mt-15"><a href="#">Step out on to the path</a></h4>
                                <span class="text-white">By adimn / <a href="#">Business</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="sidebar-widget mt-30">
                            <div class="clearfix recent-post medium">
                                <div class="recent-post-info">
                                    <h5><a href="#">Auctor aliquet Aenean auctor alique Nibh vel velit</a> </h5>
                                    <span><i class="fa fa-calendar-o"></i> September 30, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="sidebar-widget mt-30">
                            <div class="clearfix recent-post medium">
                                <div class="recent-post-info">
                                    <h5><a href="#">Aliquet Aenean auctor alique Nibh vel velit auctor </a> </h5>
                                    <span><i class="fa fa-calendar-o"></i> September 30, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="sidebar-widget mt-30">
                            <div class="clearfix recent-post medium">
                                <div class="recent-post-info">
                                    <h5><a href="#">Aenean auctor alique Nibh vel velit auctor aliquet </a> </h5>
                                    <span><i class="fa fa-calendar-o"></i> September 30, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="sidebar-widget mt-30">
                            <div class="clearfix recent-post medium">
                                <div class="recent-post-info">
                                    <h5><a href="#">Auctor alique Nibh vel velit auctor aliquet Aenean </a> </h5>
                                    <span><i class="fa fa-calendar-o"></i> September 30, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="add-banner mt-30 mb-30">
                            <a
                                href="https://themeforest.net/item/car-dealer-automotive-responsive-wordpress-theme/20213334?ref=Potenzaglobalsolutions">
                                <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner-02.jpg') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="section-title line-dabble">
                            <h4 class="title">Recentes posts</h4>
                        </div>
                        <div class="owl-carousel bottom-right-dots" data-nav-dots="true" data-items="1"
                            data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
                            <div class="item">
                                <div class="blog-overlay">
                                    <div class="blog-image">
                                        <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner/01.jpg') }}" alt="">
                                    </div>
                                    <div class="blog-name">
                                        <a class="tag" href="#"> Style </a>
                                        <h4 class="text-white mt-15"><a href="#">You continue doing what</a></h4>
                                        <span class="text-white">By adimn / <a href="#">Business</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-overlay">
                                    <div class="blog-image">
                                        <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner/02.jpg') }}" alt="">
                                    </div>
                                    <div class="blog-name">
                                        <a class="tag" href="#"> Lookbook </a>
                                        <h4 class="text-white mt-15"><a href="#">Walk out 10 years into</a></h4>
                                        <span class="text-white">By adimn / <a href="#">Business</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="section-title line-dabble xs-mt-30">
                            <h4 class="title">Tendances</h4>
                        </div>
                        <div class="sidebar-widget">
                            <div class="clearfix recent-post medium">
                                <div class="recent-post-image">
                                    <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner/01.jpg') }}" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <a href="#">Auctor aliquet Aenean Nibh vel velit </a>
                                    <span><i class="fa fa-calendar-o"></i> September 15, 2021</span>
                                </div>
                            </div>
                            <div class="clearfix recent-post medium">
                                <div class="recent-post-image">
                                    <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner/02.jpg') }}" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <a href="#">Aliquet Aenean Nibh vel velit auctor </a>
                                    <span><i class="fa fa-calendar-o"></i> September 19, 2021</span>
                                </div>
                            </div>
                            <div class="clearfix recent-post medium">
                                <div class="recent-post-image">
                                    <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner/03.jpg') }}" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <a href="#">Aenean Nibh vel velit auctor aliquet </a>
                                    <span><i class="fa fa-calendar-o"></i> September 25, 2021</span>
                                </div>
                            </div>
                            <div class="clearfix recent-post medium">
                                <div class="recent-post-image">
                                    <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner/04.jpg') }}" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <a href="#">Velit auctor aliquet Aenean Nibh vel </a>
                                    <span><i class="fa fa-calendar-o"></i> September 30, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 sm-mt-30">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title line-dabble">
                            <h4 class="title">Hot News</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-3 col-sm-6">
                        <div class="mb-20 blog blog-simple text-start">
                            <div class="blog-image">
                                <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner/05.jpg') }}" alt="">
                            </div>
                            <div class="mt-20 blog-name">
                                <h6 class="mt-15"><a href="#">Motivation In Life</a></h6>
                                <div class="admin">
                                    <span>By adimn / <a href="#">Trend</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-3 col-sm-6">
                        <div class="mb-20 blog blog-simple text-start">
                            <div class="blog-image">
                                <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner/06.jpg') }}" alt="">
                            </div>
                            <div class="mt-20 blog-name">
                                <h6 class="mt-15"><a href="#">Are You Famous Or Focused</a></h6>
                                <div class="admin">
                                    <span>By adimn / <a href="#">Business</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-3 col-sm-6">
                        <div class="blog blog-simple text-start xs-mb-20">
                            <div class="blog-image">
                                <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner/07.jpg') }}" alt="">
                            </div>
                            <div class="mt-20 blog-name">
                                <h6 class="mt-15"><a href="#">Burning Desire Golden Key</a></h6>
                                <div class="admin">
                                    <span>By adimn / <a href="#">Clothes</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-3 col-sm-6">
                        <div class="blog blog-simple text-start xs-mb-20">
                            <div class="blog-image">
                                <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner/08.jpg') }}" alt="">
                            </div>
                            <div class="mt-20 blog-name">
                                <h6 class="mt-15"><a href="#">Hypnotherapy For Motivation </a></h6>
                                <div class="admin">
                                    <span>By adimn / <a href="#">Mackup</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-title line-dabble mt-30">
                    <h4 class="title">Connect with us</h4>
                </div>
                <div class="social-big-magazine">
                    <ul>
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i> <span>859 Fans</span></a> </li>
                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i> <span> followers</span> </a>
                        </li>
                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i> <span>Contacts</span> </a></li>
                        <li class="youtube"><a href="#"><i class="fa fa-youtube"></i> <span>Subscribers</span> </a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i> <span>followers</span> </a></li>
                        <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i> <span>followers</span> </a></li>
                    </ul>
                </div>
                <div class="add mt-30">
                    <a
                        href="https://themeforest.net/item/car-dealer-automotive-responsive-wordpress-theme/20213334?ref=Potenzaglobalsolutions"></a>
                    <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/banner.jpg') }}" alt="">
                </div>
                <div class="sidebar-widget mt-30">
                    <div class="widget-newsletter">
                        <div class="newsletter-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="newsletter-content">
                            <i>Enter your e-mail and subscribe to our newsletter. </i>
                        </div>
                        <div class="mt-20 newsletter-form">
                            <div class="mb-3">
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Name">
                            </div>
                            <a class="button d-grid" href="#">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section-pt">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title line-dabble">
                        <h4 class="title">Gallerie des vidéos</h4>
                    </div>
                </div>
                <div class="mb-4 col-md-4 mb-md-0">
                    <div class="blog-box blog-2 blog-border">
                        <div class="popup-video-image border-video popup-gallery">
                            <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/video/01.jpg') }}" alt="">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0"> <i
                                    class="fa fa-play"></i> </a>
                            <div class="video-attribute">
                                <span class="length">01:06</span>
                                <span class="quality">HD</span>
                            </div>
                        </div>
                        <div class="blog-info">
                            <span class="tag"><a href="#">Business</a></span>
                            <h3 class="mt-20"> <a href="#"> Does your life</a></h3>
                            <span>By adimn / <i>4 months ago </i></span>
                        </div>
                    </div>
                </div>
                <div class="mb-4 col-md-4 mb-md-0">
                    <div class="blog-box blog-2 blog-border">
                        <div class="popup-video-image border-video popup-gallery">
                            <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/video/02.jpg') }}" alt="">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0"> <i
                                    class="fa fa-play"></i> </a>
                            <div class="video-attribute">
                                <span class="length">03:20</span>
                                <span class="quality">HD</span>
                            </div>
                        </div>
                        <div class="blog-info">
                            <span class="tag"><a href="#">Style</a></span>
                            <h3 class="mt-20"> <a href="#"> Supercharge your</a></h3>
                            <span>By adimn / <i>6 months ago </i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-box blog-2 blog-border">
                        <div class="popup-video-image border-video popup-gallery">
                            <img class="img-fluid" src="{{ asset('assets/demo-categories/magazine-02/images/video/03.jpg') }}" alt="">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0"> <i
                                    class="fa fa-play"></i> </a>
                            <div class="video-attribute">
                                <span class="length">03:45</span>
                                <span class="quality">HD</span>
                            </div>
                        </div>
                        <div class="blog-info">
                            <span class="tag"><a href="#">Lookbook</a></span>
                            <h3 class="mt-20"> <a href="#">Helen keller a</a></h3>
                            <span>By adimn / <i>8 months ago </i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
