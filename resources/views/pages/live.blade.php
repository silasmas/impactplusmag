@extends("layouts.template")
@section("content")
@include("parties.banner")

<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 sm-mb-30">
                <h4 class="mb-30">Youtube</h4>
                <div class="js-video [youtube, widescreen]">
                    <iframe src="https://www.youtube.com/embed/D2EvaSgi3UQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <h4 class="mb-30">Vimeo</h4>
                <div class="js-video [vimeo, widescreen]">
                    <iframe src="https://player.vimeo.com/video/176916362"></iframe>
                </div>
            </div>
        </div>


        <div class="row mt-70">
            <div class="col-lg-12 col-md-12">
                <h4 class="mb-30">Audio Soundcloud</h4>
                <iframe style="height: 300px; width: 100%;"
                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/118951274&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
            </div>
        </div>

    </div>
</section>

<!--=================================
  Video & Audio -->


<!--=================================
 action box- -->

<section class="action-box theme-bg full-width">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 position-relative">
                <div class="action-box-text">
                    <h3><strong> Webster: </strong> The most powerful template ever on the market</h3>
                    <p>Create tailor-cut websites with the exclusive multi-purpose responsive template along with
                        powerful features.</p>
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
