@extends('layouts.template')

@section('title')

@endsection

@section('content')
<div id="banner">
      <div class="rev_slider_wrapper banner-style-two">
        <!-- START REVOLUTION SLIDER 5.0 auto mode -->
        <div id="main_slider" class="rev_slider" data-version="5.0">
          <ul>
            <!-- SLIDE1  -->
            <li
              data-index="rs-377"
              data-transition="curtain-1"
              data-slotamount="1"
              data-easein="default"
              data-easeout="default"
              data-masterspeed="default"
              data-thumb="{{asset('assets/images/slider/1.jpg')}}"
              data-rotate="0"
              data-saveperformance="off"
              data-title="Business Solutions"
              data-description=""
            >
              <!-- MAIN IMAGE -->
              <img
                src="{{asset('assets/images/slider/1.jpg')}}"
                alt="image"
                data-bgposition="center center"
                data-bgfit="cover"
                data-bgrepeat="no-repeat"
                class="rev-slidebg"
              />
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme rs-parallaxlevel-3"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['-72','-150','-160','-120']"
                data-width="none"
                data-height="none"
                data-transform_idle="o:1;"
                data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitout="none"
                data-responsive_offset="on"
                data-elementdelay="0.05"
                style="z-index: 5"
              >
                <div class="tp-title">Save The Animals</div>
              </div>

              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['32','-40','-60','-20']"
                data-width="none"
                data-height="none"
                data-transform_idle="o:1;"
                data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1500"
                data-splitout="none"
                data-responsive_offset="on"
                data-elementdelay="0.05"
                style="z-index: 5"
              >
                <h1>Animals are our Beauty!</h1>
              </div>

              <!-- LAYER NR. 3 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['90','20','00','30']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:[100%];"
                data-mask_out="x:inherit;y:inherit;"
                data-start="2000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap"
              >
                <div class="text">to Get Our Global Clean.. Go Green</div>
              </div>

              <!-- LAYER NR. 4 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['165','70','60','80']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:[100%];"
                data-mask_out="x:inherit;y:inherit;"
                data-start="2500"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 6; white-space: nowrap"
              >
              @unless (Auth::user())
                <div class="button">
                  <a href="{{route('login')}}" class="btn-one">Login</a>
                  <a href="{{route('register')}}" class="btn-two">Register</a>
                </div>
              @endunless
                
              </div>
            </li>

            <!-- SLIDE2  -->
            <li
              data-index="rs-378"
              data-transition="zoomin"
              data-slotamount="7"
              data-easein="Power4.easeInOut"
              data-easeout="Power4.easeInOut"
              data-masterspeed="2000"
              data-thumb="{{asset('assets/images/slider/2.jpg')}}"
              data-rotate="0"
              data-saveperformance="off"
              data-title="Successful Careers"
              data-description=""
            >
              <!-- MAIN IMAGE -->
              <img
                src="{{asset('assets/images/slider/2.jpg')}}"
                alt=""
                data-bgposition="top center"
                class="rev-slidebg"
                data-no-retina
              />

              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme rs-parallaxlevel-3"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['-72','-150','-160','-120']"
                data-width="none"
                data-height="none"
                data-transform_idle="o:1;"
                data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitout="none"
                data-responsive_offset="on"
                data-elementdelay="0.05"
                style="z-index: 5"
              >
                <div class="tp-title">Save The Animals</div>
              </div>

              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['32','-40','-60','-20']"
                data-width="none"
                data-height="none"
                data-transform_idle="o:1;"
                data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1500"
                data-splitout="none"
                data-responsive_offset="on"
                data-elementdelay="0.05"
                style="z-index: 5"
              >
                <h1>Animals are our Beauty!</h1>
              </div>

              <!-- LAYER NR. 3 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['90','20','00','30']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:[100%];"
                data-mask_out="x:inherit;y:inherit;"
                data-start="2000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap"
              >
                <div class="text">to Get Our Global Clean.. Go Green</div>
              </div>

              <!-- LAYER NR. 4 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['165','70','60','80']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:[100%];"
                data-mask_out="x:inherit;y:inherit;"
                data-start="2500"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 6; white-space: nowrap"
              >
              @unless (Auth::user())
                <div class="button">
                  <a href="{{route('login')}}" class="btn-one">Login</a>
                  <a href="{{route('register')}}" class="btn-two">Register</a>
                </div>
              @endunless
                
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- END REVOLUTION SLIDER -->
    </div>
    <!-- End of #banner -->

    <!-- about section -->
    <section class="about-section">
      <div class="container">
        <div class="top-content">
          <div class="row">
            <div class="col-md-5 col-sm-6 col-xs-12 about-column">
              <div class="left-content text-right">
                <div class="top-title">3500+ volunteer</div>
                <div class="title">People working with us since 1975!!</div>
              </div>
            </div>
            <div class="col-md-7 col-sm-6 col-xs-12 about-column">
              <div class="right-content">
                <h3>Our Mission Is Save Water, Animals And Environment</h3>
                <div class="text font_size_16">
                  Leverage agile frameworks to provide a robust synopsis for
                  high level overviews. Iterative approaches to corporate
                  strategy foster collaborative thinking to further the thinking
                  to further the overall value proposition.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom-content">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 about-column">
              <div class="single-item">
                <div class="icon-box"><i class="flaticon-energy"></i></div>
                <div class="title">ALTERNATIVE ENERGY</div>
                <div class="text">
                  <p>
                    Marine hatchetfish eelblenny lookdown catfish silver carp
                    yellow banded perch Cherubfish.Warty angler stoneroller
                  </p>
                </div>
              </div>
              <div class="single-item">
                <div class="icon-box"><i class="flaticon-technology"></i></div>
                <div class="title">SAFE ENVIRONMENT</div>
                <div class="text">
                  <p>
                    Marine hatchetfish eelblenny lookdown catfish silver carp
                    yellow banded perch Cherubfish.Warty angler stoneroller
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 about-column">
              <div class="single-item">
                <div class="icon-box"><i class="flaticon-leave"></i></div>
                <div class="title">RECYCLE, REUSE, REDUCE</div>
                <div class="text">
                  <p>
                    Marine hatchetfish eelblenny lookdown catfish silver carp
                    yellow banded perch Cherubfish.Warty angler stoneroller
                  </p>
                </div>
              </div>
              <div class="single-item">
                <div class="icon-box"><i class="flaticon-weather"></i></div>
                <div class="title">CLEAN WATER</div>
                <div class="text">
                  <p>
                    Marine hatchetfish eelblenny lookdown catfish silver carp
                    yellow banded perch Cherubfish.Warty angler stoneroller
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about section end -->

    <!-- video-section -->
    <section class="video-section centred">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2">
            <div class="top-title">Watch Awesome Video of</div>
            <div class="title">VOLUNTARY ACTIVITY</div>
            <div class="video-gallery">
              <div class="overlay-gallery">
                <div class="icon-holder">
                  <div class="icon">
                    <a
                      class="html5lightbox"
                      title="Garden Video"
                      href="https://youtu.be/yVb0mfmMV9w"
                      ><img src="{{asset('assets/images/home/btn.png')}}" alt="Play Button"
                    /></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- video section end -->

    <!-- team section -->
    <section class="team-section centred">
      <div class="container">
        <div class="team-title">
          <div class="sec-title"><h2>Our Expert Team</h2></div>
          <div class="tit-text">
            Leverage agile frameworks to provide a robust synopsis for high
            level overviews. Iterative approaches to corporate strategy
            foster<br />
            collaborative thinking to further the thinking to further the
            overall value proposition.
          </div>
        </div>
        <div class="three-column-carousel">
          <div class="single-item">
            <div class="img-box">
              <figure><img src="{{asset('assets/images/team/1.jpg')}}" alt="" /></figure>
            </div>
            <div class="lower-content">
              <ul class="team-social">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
              </ul>
              <div class="name"><a href="#">Zenith</a></div>
              <div class="title">Volunteer</div>
            </div>
          </div>
          <div class="single-item">
            <div class="img-box">
              <figure><img src="{{asset('assets/images/team/2.jpg')}}" alt="" /></figure>
            </div>
            <div class="lower-content">
              <ul class="team-social">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
              </ul>
              <div class="name"><a href="#">Fauzan</a></div>
              <div class="title">Volunteer</div>
            </div>
          </div>
          <div class="single-item">
            <div class="img-box">
              <figure><img src="{{asset('assets/images/team/3.jpg')}}" alt="" /></figure>
            </div>
            <div class="lower-content">
              <ul class="team-social">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
              </ul>
              <div class="name"><a href="#">Joevanz </a></div>
              <div class="title">Volunteer</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- team-section end -->

    <!-- testimonials section -->
    <section class="testimonials-section">
      <div class="testimonial-area">
        <div class="container">
          <div class="sec-title"><h2>What our Client Says</h2></div>
          <div class="tit-text">
            Cras dapibus ullamcorper dictum. Vivamus nec erat placerat felis<br />
            scelerisque porttitor nec eratin ac turpis.
          </div>
          <div class="three-column-carousel">
            <div class="testimonials-content">
              <div class="author-info">
                <div class="author">
                  <h4>Afzal</h4>
                  <div class="author-title">Imam masjid</div>
                </div>
                <div class="author-img">
                  <figure><img src="{{asset('assets/images/testimonial/1.jpg')}}" alt="" /></figure>
                </div>
              </div>
              <div class="text">
                “Saya sangat terkesan dengan web ini! Sangat banyak membantu
                serta memberikan informasi yang lengkap. Dengan bantuan web ini,
                saya lebih tau sebab akibat jika tidak ada perlindungan kita.
                Terima kasih atas kontribusi yang sangat berarti!”
              </div>
            </div>
            <div class="testimonials-content">
              <div class="author-info">
                <div class="author">
                  <h4>Dyto</h4>
                  <div class="author-title">Info tugas</div>
                </div>
                <div class="author-img">
                  <figure><img src="{{asset('assets/images/testimonial/2.jpg')}}" alt="" /></figure>
                </div>
              </div>
              <div class="text">
                “"Saya benar-benar terkesan dengan web ini! Dengan fitur dan
                konten yang berkualitas, web ini telah menjadi sumber
                pengetahuan yang memberikan informasi. Terima kasih kepada tim
                atas usaha dalam menyediakan layanan yang sangat membantu bagi
                banyak orang!”
              </div>
            </div>
            <div class="testimonials-content">
              <div class="author-info">
                <div class="author">
                  <h4>Zhilan</h4>
                  <div class="author-title">User mm mage</div>
                </div>
                <div class="author-img">
                  <figure><img src="{{asset('assets/images/testimonial/3.jpg')}}" alt="" /></figure>
                </div>
              </div>
              <div class="text">
                “Web ini sungguh luar biasa! Saya sekarang memiliki pemahaman
                yang jelas tentang cara memilah dan mendaur ulang sampah dengan
                benar. Saya juga menemukan banyak ide kreatif untuk mengurangi
                limbah di rumah saya. Terima kasih kepada web ini.”
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="brand-area">
        <div class="container">
          <ul class="brand-slider">
            <li>
              <a href="#"
                ><figure><img src="{{asset('assets/images/brand/1.png')}}" alt="" /></figure
              ></a>
            </li>
            <li>
              <a href="#"
                ><figure><img src="{{asset('assets/images/brand/2.png')}}" alt="" /></figure
              ></a>
            </li>
            <li>
              <a href="#"
                ><figure><img src="{{asset('assets/images/brand/3.png')}}" alt="" /></figure
              ></a>
            </li>
            <li>
              <a href="#"
                ><figure><img src="{{asset('assets/images/brand/4.png')}}" alt="" /></figure
              ></a>
            </li>
            <li>
              <a href="#"
                ><figure><img src="{{asset('assets/images/brand/5.png')}}" alt="" /></figure
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- testimonials section end -->

    <!-- event section -->
    <section class="event-section">
      <div class="container">
        <div class="event-title centred">
          <div class="sec-title"><h2>Upcoming Events</h2></div>
          <div class="tit-text">
            Leverage agile frameworks to provide a robust synopsis for high
            level overviews. Iterative approaches to corporate strategy
            foster<br />
            collaborative thinking to further the thinking to further the
            overall value proposition.
          </div>
        </div>
        <div class="event-content">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12 event-column">
              <div class="img-box">
                <figure><img src="{{asset('assets/images/home/event.jpg')}}" alt="" /></figure>
              </div>
            </div>
            <div class="col-md-5 col-sm-12 col-xs-12 event-column">
              <div class="event-side-content">
                <h5>28 Aug 2017</h5>
                <div class="title-text">
                  Your little helpCan save the animals life’s
                </div>
                <div class="text font_size_16">
                  Quis autem vel eum iure reprehenderit qui in ea voluptate
                  velit esse quam nihil molestiae consequatur vel illum.
                </div>
                <div class="countdown-box">
                  <div class="countdown-timer">
                    <div class="countdown-container">
                      <div class="default-coundown">
                        <div
                          class="countdown time-countdown"
                          data-countdown-time="2016/09/28"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="button">
                  <a href="#" class="btn-one">read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- event-section end -->

    <!-- gallery section -->
    <section class="gallery-section">
      <div class="container-fluid">
        <div class="four-column-carousel">
          <div class="single-item">
            <div class="single-item-overlay">
              <div class="img-box">
                <img src="{{asset('assets/images/gallery/1.jpg')}}" alt="" />
                <a href="gallery.html" class="overlay">
                  <div class="inner-box">
                    <div class="content">
                      <div class="text">Plant Seedling And Growth</div>
                      <span>Environment</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="single-item">
            <div class="single-item-overlay">
              <div class="img-box">
                <img src="{{asset('assets/images/gallery/2.jpg')}}" alt="" />
                <a href="gallery.html" class="overlay">
                  <div class="inner-box">
                    <div class="content">
                      <div class="text">Plant Seedling And Growth</div>
                      <span>Environment</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="single-item">
            <div class="single-item-overlay">
              <div class="img-box">
                <img src="{{asset('assets/images/gallery/3.jpg')}}" alt="" />
                <a href="gallery.html" class="overlay">
                  <div class="inner-box">
                    <div class="content">
                      <div class="text">Plant Seedling And Growth</div>
                      <span>Environment</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="single-item">
            <div class="single-item-overlay">
              <div class="img-box">
                <img src="{{asset('assets/images/gallery/4.jpg')}}" alt="" />
                <a href="gallery.html" class="overlay">
                  <div class="inner-box">
                    <div class="content">
                      <div class="text">Plant Seedling And Growth</div>
                      <span>Environment</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="link-text centred">
          Please click on button arrow in order to view more or
          <a href="#">View all</a> photo gallery
        </div>
      </div>
    </section>
    <!-- gallery section end -->

    <!-- news section -->
    <section class="news-section news-style-two">
      <div class="container">
        <div class="news-title">
          <div class="sec-title"><h2>Latest News</h2></div>
          <div class="tit-text">
            Leverage agile frameworks to provide a robust synopsis for high
            level overviews.
          </div>
        </div>
        <div class="two-column-carousel">
          <div class="single-item">
            <div class="img-box">
              <a href="blog-details.html"
                ><figure><img src="{{asset('assets/images/news/4.jpg')}}" alt="" /></figure
              ></a>
            </div>
            <div class="lower-content">
              <div class="meta">Ecology</div>
              <h5>
                <a href="blog-details.html">How to save animals in future</a>
              </h5>
              <div class="text">
                <p>
                  Cause description text here a in erat malesuada gravida. Cum
                  sociis natoque penatibus et magnis dis parturient montes,
                  nascetur ridiculus mus. Nulla faucibus sed eros malesuada
                  dapibus consequat enim.
                </p>
              </div>
              <div class="button-content">
                By Adam Rose <span>16 hours Ago</span>
              </div>
            </div>
          </div>
          <div class="single-item">
            <div class="img-box">
              <a href="blog-details.html"
                ><figure><img src="{{asset('assets/images/news/5.jpg')}}" alt="" /></figure
              ></a>
            </div>
            <div class="lower-content">
              <div class="meta">Natural</div>
              <h5>
                <a href="blog-details.html">Get Clear Environment System</a>
              </h5>
              <div class="text">
                <p>
                  Cause description text here a in erat malesuada gravida. Cum
                  sociis natoque penatibus et magnis dis parturient montes,
                  nascetur ridiculus mus. Nulla faucibus sed eros malesuada
                  dapibus consequat enim.
                </p>
              </div>
              <div class="button-content">
                By David John <span>08 hours Ago</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- news section end -->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header">
      <span class="icon fa fa-angle-up"></span>
    </div>
@endsection

