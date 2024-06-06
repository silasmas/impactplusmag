@extends("layouts.template")
@section("content")
<!--=================================
page-title-->
@include("parties.banner")

  <!--=================================
  page-title -->


  <!--=================================
   About-->

  <section class="page-section-ptb">
    <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
         <div class="section-title text-center">
              <h6>About us</h6>
              <h2 class="title-effect">Who we are and what we do</h2>
              <p>Take Your Website To New Heights With Webster.</p>
            </div>
        </div>
      </div>
       <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-40">
              <img class="img-fluid" src="{{ asset('assets/images/about/01.jpg') }}" alt="">
               <h4 class="mt-20">Who we are</h4>
               <p>Nesciunt incidunt accusamus necessitatibus modi adipisci officia enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia, dolor sit amet, consectetur adipisicing elit. Vero quod conseqt quibusdam</p>
           </div>
         <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-40">
            <img class="img-fluid" src="{{ asset('assets/images/about/02.jpg') }}" alt="">
            <h4 class="mt-20">What we do</h4>
            <p>Vero quod conseqt quibusdam, enim expedita  dolor sit amet, consectetur adipisicing elit. nesciunt incidunt accusamus necessitatibus modi adipisci officia sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia</p>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4">
           <img class="img-fluid" src="{{ asset('assets/images/about/03.jpg') }}" alt="">
            <h4 class="mt-20">Why choose us </h4>
            <p>Expedita sed quia nesciunt incidunt accusamus dolor sit amet, consectetur adipisicing elit, enim necessitatibus modi adipisci officia. nesciunt incidunt accusamus necessitatibus modi adipisci officia Vero quod conseqt quibusdam.</p>
         </div>
       </div>
    </div>
  </section>

  <!--=================================
   About-->


  <!--=================================
  happy clients -->

  <section class="page-section-ptb bg-overlay-black-70 jarallax" data-speed="0.6" data-img-src="{{ asset('assets/images/bg/02.jpg') }}">
   <div class="container">
    <div class="row mb-60">
        <div class="col-lg-8">
          <div class="section-title">
            <h6 class="text-white">Many reasons to</h6>
            <h2 class="text-white title-effect">Why choose webster</h2>
            <p class="text-white">We'll do everything we can to make our next best project! We are an innovative agency. We develop and design customers around the world.</p>
          </div>
        </div>
      </div>
      <div class="row">
       <div class="col-lg-3 col-sm-6 sm-mb-30">
         <div class="counter text-white">
          <span class="icon ti-user theme-color" aria-hidden="true"></span>
          <span class="timer" data-to="4905" data-speed="10000">4905</span>
          <label>ORDERED COFFEE'S</label>
        </div>

        </div>
       <div class="col-lg-3 col-sm-6 sm-mb-30">
       <div class="counter text-white">
          <span class="icon ti-help-alt theme-color" aria-hidden="true"></span>
          <span class="timer" data-to="3750" data-speed="10000">3750</span>
          <label>QUESTIONS ANSWERED</label>
        </div>
       </div>
       <div class="col-lg-3 col-sm-6 xs-mb-30">
      <div class="counter text-white">
          <span class="icon ti-check-box theme-color" aria-hidden="true"></span>
          <span class="timer" data-to="4782" data-speed="10000">4782</span>
          <label>COMPLETED PROJECTS</label>
        </div>
       </div>
        <div class="col-lg-3 col-sm-6">
       <div class="counter text-white">
          <span class="icon ti-face-smile theme-color" aria-hidden="true"></span>
          <span class="timer" data-to="3237" data-speed="10000">3237</span>
          <label>HAPPY CLIENTS</label>
        </div>
       </div>
    </div>
   </div>
  </section>

  <!--=================================
  happy clients -->


  <!--=================================
   Our History -->

  <section class="our-history white-bg page-section-ptb">
    <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-10">
            <div class="section-title text-center">
              <h6>From the beginning</h6>
              <h2 class="title-effect">Our History</h2>
              <p>Webster – Clean And Powerful Multipurpose</p>
            </div>
        </div>
      </div>
       <div class="row justify-content-center">
       <div class="col-lg-10">
          <div class="timeline-dots"></div>
          <ul class="timeline">
              <li>
                <div class="timeline-badge"><p class="theme-color">10 Dec 2011</p></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h5 class="timeline-title text-muted">Quis neque Suspendisse in orci enim.</h5>

                  </div>
                  <div class="timeline-body">
                    <p>Dignissimos excepturi tempore iste, iusto sed sit delectus ratione laudantium, laboriosam quaerat eius odit explicabo necessitatibus, ipsum incidunt voluptas.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-badge"><p class="theme-color">15 Jan 2014</p></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h5 class="timeline-title text-muted">Proin gravida nibh vel velit auctor aliquet. </h5>
                  </div>
                  <div class="timeline-body">
                    <p>Iusto sed sit delectus ratione laudantium, laboriosam quaerat eius odit explicabo necessitatibus, ipsum incidunt voluptas dignissimos excepturi tempore iste. </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge"><p class="theme-color">05 Jul 2017</p></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h5 class="timeline-title text-muted">Fermentum feugiat velit mauris egestas quam</h5>
                  </div>
                  <div class="timeline-body">
                    <p>Incidunt voluptas dignissimos excepturi tempore iste iusto sed sit delectus ratione laudantium, laboriosam quaerat eius odit explicabo necessitatibus, ipsum. </p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-badge"><p class="theme-color">10 Aug 2016</p></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h5 class="timeline-title text-muted">Aenean sollicitudin, lorem quis bibendum auctor</h5>
                  </div>
                  <div class="timeline-body">
                    <p>Laboriosam quaerat eius odit explicabo necessitatibus, ipsum incidunt voluptas dignissimos excepturi tempore iste iusto sed sit delectus ratione laudantium.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge"><p class="theme-color">22 May 2017</p></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h5 class="timeline-title">Nullam ac urna eu felis dapibus condimentu</h5>
                  </div>
                  <div class="timeline-body">
                    <p>Voluptas dignissimos excepturi tempore iste iusto sed sit delectus ratione laudantium laboriosam quaerat eius odit explicabo necessitatibus, ipsum incidunt. </p>
                  </div>
                </div>
              </li>
              <li class="timeline-arrow"><i class="fa fa-chevron-down"></i></li>
           </ul>
        </div>
       </div>
     </div>
  </section>

  <!--=================================
   Our History -->


  <!--=================================
  Our Clients  -->

  <section class="page-section-ptb gray-bg">
    <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="section-title">
            <h6>Have a look at our </h6>
            <h2 class="title-effect">Client Opinions & Reviews</h2>
          </div>
      </div>
    </div>
   <div class="row">
    <div class="col-lg-6">
     <div class="owl-carousel" data-nav-arrow="false" data-nav-dots="true" data-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1">
        <div class="item"><div class="testimonial bottom_pos light">
          <div class="testimonial-avatar"> <img alt="" src="{{ asset('assets/images/bg/01.jpg') }}"> </div>
          <div class="testimonial-info"> Excellent Customer support! These guys reply within minutes sometimes and really help you with when you need them. The template itself is very extended as well. Happy with my purchase!</div>
          <div class="author-info"> <strong>15Twelve - <span>ThemeForest user</span></strong> </div>
      </div>
      </div>
      <div class="item">
       <div class="testimonial bottom_pos light">
          <div class="testimonial-avatar"> <img alt="" src="{{ asset('assets/images/bg/02.jpg') }}"> </div>
          <div class="testimonial-info"> One of the most complete template here. Thanks a lot for such great features, pages, shortcodes and home variations. Incredible Job. And the best of all, great introductions</div>
          <div class="author-info"> <strong>Xerracol - <span>ThemeForest user</span></strong> </div>
      </div>
      </div>
      <div class="item">
       <div class="testimonial bottom_pos light">
          <div class="testimonial-avatar"> <img alt="" src="{{ asset('assets/images/bg/03.jpg') }}"> </div>
           <div class="testimonial-info"> This is a well put together template and the developer offers great support. I've been in contact with them and the response was prompt and everything has been taken care of.</div>
          <div class="author-info"> <strong>Warble - <span>ThemeForest user</span></strong> </div>
        </div>
       </div>
     </div>
   </div>

   <div class="col-lg-6 sm-mt-50">
        <div class="clients-list clients-border column-3">
           <ul class="list-unstyled">
             <li>
                <img class="img-fluid mx-auto" src="{{ asset('assets/images/bg/a02.jpg') }}" alt="">
             </li>
             <li>
                <img class="img-fluid mx-auto" src="images/clients/02.png" alt="">
             </li>
             <li>
                <img class="img-fluid mx-auto" src="images/clients/03.png" alt="">
             </li>
             <li>
                <img class="img-fluid mx-auto" src="images/clients/04.png" alt="">
             </li>
             <li>
                <img class="img-fluid mx-auto" src="images/clients/05.png" alt="">
             </li>
             <li>
                <img class="img-fluid mx-auto" src="images/clients/06.png" alt="">
             </li>
           </ul>
        </div>
       </div>
      </div>
     </div>
  </section>

  <!--=================================
   Our Clients -->

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

  <!--=================================
  action box- -->

@endsection
