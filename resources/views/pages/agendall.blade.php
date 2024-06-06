@extends("layouts.template")
@section("content")
@include("parties.banner")
<section class="white-bg page-section-ptb">
    <div class="container-fluid">
      <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 text-center">
           <div class="isotope-filters">
              <button data-filter="" class="active">All</button>
              <button data-filter=".photography">Actualités</button>
              <button data-filter=".illustration">Events</button>
              <button data-filter=".branding">Conférences</button>
              <button data-filter=".web-design">Decouvertes</button>
              <button data-filter=".web-design">Ouvrages</button>
            </div>
              <div class="isotope full-screen columns-5 popup-gallery">
                <div class="grid-item photography branding">
                    <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/01.jpg') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/01.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
                 </div>
                <div class="grid-item photography branding">
                 <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/02.jpg') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/02.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
                </div>
                <div class="grid-item illustration">
                 <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/03.jpg') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/03.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
                  </div>
                <div class="grid-item illustration">
              <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/04.gif') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/04.gif') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
                </div>
                <div class="grid-item branding illustration">
                  <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/05.jpg') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/05.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
                  </div>
                <div class="grid-item branding illustration">
                 <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/06.jpg') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/06.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
                </div>
                <div class="grid-item web-design photography">
                <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/07.jpg') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/07.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
                   </div>
                  <div class="grid-item web-design photography">
                   <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/08.gif') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/08.gif') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
                </div>
                <div class="grid-item web-design photography">
                 <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/09.jpg') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/09.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
                </div>
                <div class="grid-item web-design photography">
                   <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/10.jpg') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/10.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
                </div>
                <div class="grid-item web-design photography">
                     <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/01.jpg') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/01.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
                </div>
                <div class="grid-item web-design photography">
                  <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/02.jpg') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/02.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
              </div>
              <div class="grid-item web-design photography">
                  <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/03.jpg') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/03.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
              </div>
              <div class="grid-item web-design photography">
                  <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/05.jpg') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/05.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
              </div>
              <div class="grid-item web-design photography">
                  <div class="portfolio-item">
                     <img src="{{ asset('assets/images/portfolio/small/06.jpg') }}" alt="">
                       <div class="portfolio-overlay">
                          <h4 class="text-white"> <a href="portfolio-single-01.html"> Your title here </a> </h4>
                          <span class="text-white"> <a href="#"> Branding </a> | <a href="#"> Web Design </a> </span>
                        </div>
                      <a class="popup portfolio-img" href="{{ asset('assets/images/portfolio/small/06.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                  </div>
              </div>
           </div>
         </div>
       </div>
      </div>
     </section>

  <!--=================================
   portfolio -->


  <!--=================================
  action box- -->

  <section class="action-box theme-bg full-width">
    <div class="container">
      <div class="row">
       <div class="col-lg-12 col-md-12 position-relative">
         <div class="action-box-text">
          <h3><strong> Webster: </strong> The most powerful template ever on the market</h3>
          <p>Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful features.</p>
        </div>
        <div class="action-box-button">
          <a class="button button-border white" href="#">
            <span>Purchase Now</span>
            <i class="fa fa-download"></i>
         </a>
       </div>
      </div>
    </div>
   </div>
  </section>
@endsection
