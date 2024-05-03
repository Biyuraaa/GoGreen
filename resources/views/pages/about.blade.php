@extends('layouts.template')
@section('title')
  <section class="page-title">
      <div class="container">
        <div class="content-box">
          <div class="title">About <span>Us</span></div>
          <div class="bread-crumb">
            <a href="index.html">Home &nbsp;</a> /&nbsp;<span>About us</span>
          </div>
        </div>
      </div>
  </section>
@endsection
@section('content')
<section class="welcome-section">
      <div class="container">
        <div class="welcome-title centred">
          <div class="title-top">4+ volunteer</div>
          <div class="title">People working with us since 2023!!</div>
          <div class="title-text font_size_16">
            Leverage agile frameworks to provide a robust synopsis for high
            level overviews. Iterative approaches to corporate strategy
            foster<br />
            collaborative thinking to further the thinking to further the
            overall value proposition.
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12 welcome-column">
            <div class="single-item">
              <div class="img-box">
                <figure><img src="{{asset('assets/images/welcome/1.jpg')}}" alt="" /></figure>
              </div>
              <div class="lower-content">
                <div class="content-text">
                  <h3>Solar System</h3>
                  <div class="text font_size_16">Velit esse molestie</div>
                </div>
                <div class="button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 welcome-column">
            <div class="single-item">
              <div class="img-box">
                <figure><img src="{{asset('assets/images/welcome/2.jpg')}}" alt="" /></figure>
              </div>
              <div class="lower-content">
                <div class="content-text">
                  <h3>Wind Refine</h3>
                  <div class="text font_size_16">Velit esse molestie</div>
                </div>
                <div class="button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 welcome-column">
            <div class="single-item">
              <div class="img-box">
                <figure><img src="{{asset('assets/images/welcome/3.jpg')}}" alt="" /></figure>
              </div>
              <div class="lower-content">
                <div class="content-text">
                  <h3>Recycling System</h3>
                  <div class="text font_size_16">Velit esse molestie</div>
                </div>
                <div class="button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- welcome section end -->

    <!-- service section -->
    <section class="service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 service-column">
            <div class="tab-content-area">
              <ul class="nav nav-pills nav-justified">
                <li>
                  <a data-toggle="pill" href="#menu1"
                    ><i class="flaticon-nature-1"></i> RECYCLING</a
                  >
                </li>
                <li>
                  <a data-toggle="pill" href="#menu2"
                    ><i class="flaticon-leave"></i> ECO SYSTEM</a
                  >
                </li>
                <li class="active">
                  <a data-toggle="pill" href="#menu3"
                    ><i class="flaticon-technology"></i> WIND ENERGY</a
                  >
                </li>
                <li>
                  <a data-toggle="pill" href="#menu4"
                    ><i class="flaticon-weather"></i> WATER REFINING</a
                  >
                </li>
                <li>
                  <a data-toggle="pill" href="#menu5"
                    ><i class="flaticon-nature"></i> SAVING FORESTS</a
                  >
                </li>
              </ul>

              <div class="tab-content">
                <div id="menu1" class="tab-pane fade">
                  <div class="service-content">
                    <div class="service-title">RECYCLING</div>
                    <div class="content-text">
                      <div class="img-box">
                        <figure>
                          <img src="{{asset('assets/images/service/1.png')}}" alt="" />
                        </figure>
                      </div>
                      <p>
                        The implant fixture is first placed, so that it ilikely
                        to osseointegrate, then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental
                        prosthetic is added.
                      </p>
                    </div>
                    <ul class="list-content">
                      <li>
                        Being eco-friendly today is becoming more and more
                        important.
                      </li>
                      <li>
                        We use non-violent, creative confrontation to expose
                        global
                      </li>
                      <li>
                        We use the support of more than 1 million activists
                      </li>
                    </ul>
                  </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                  <div class="service-content">
                    <div class="service-title">ECO SYSTEM</div>
                    <div class="content-text">
                      <div class="img-box">
                        <figure>
                          <img src="{{asset('assets/images/service/2.png')}}" alt="" />
                        </figure>
                      </div>
                      <p>
                        The implant fixture is first placed, so that it ilikely
                        to osseointegrate, then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental
                        prosthetic is added.
                      </p>
                    </div>
                    <ul class="list-content">
                      <li>
                        Being eco-friendly today is becoming more and more
                        important.
                      </li>
                      <li>
                        We use non-violent, creative confrontation to expose
                        global
                      </li>
                      <li>
                        We use the support of more than 1 million activists
                      </li>
                    </ul>
                  </div>
                </div>
                <div id="menu3" class="tab-pane fade in active">
                  <div class="service-content">
                    <div class="service-title">Wind Energy</div>
                    <div class="content-text">
                      <div class="img-box">
                        <figure>
                          <img src="{{asset('assets/images/service/3.png')}}" alt="" />
                        </figure>
                      </div>
                      <p>
                        The implant fixture is first placed, so that it ilikely
                        to osseointegrate, then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental
                        prosthetic is added.
                      </p>
                    </div>
                    <ul class="list-content">
                      <li>
                        Being eco-friendly today is becoming more and more
                        important.
                      </li>
                      <li>
                        We use non-violent, creative confrontation to expose
                        global
                      </li>
                      <li>
                        We use the support of more than 1 million activists
                      </li>
                    </ul>
                  </div>
                </div>
                <div id="menu4" class="tab-pane fade">
                  <div class="service-content">
                    <div class="service-title">WATER REFINING</div>
                    <div class="content-text">
                      <div class="img-box">
                        <figure>
                          <img src="{{asset('assets/images/service/4.png')}}" alt="" />
                        </figure>
                      </div>
                      <p>
                        The implant fixture is first placed, so that it ilikely
                        to osseointegrate, then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental
                        prosthetic is added.
                      </p>
                    </div>
                    <ul class="list-content">
                      <li>
                        Being eco-friendly today is becoming more and more
                        important.
                      </li>
                      <li>
                        We use non-violent, creative confrontation to expose
                        global
                      </li>
                      <li>
                        We use the support of more than 1 million activists
                      </li>
                    </ul>
                  </div>
                </div>
                <div id="menu5" class="tab-pane fade">
                  <div class="service-content">
                    <div class="service-title">SAVING Forests</div>
                    <div class="content-text">
                      <div class="img-box">
                        <figure>
                          <img src="{{asset('assets/images/service/5.png')}}" alt="" />
                        </figure>
                      </div>
                      <p>
                        The implant fixture is first placed, so that it ilikely
                        to osseointegrate, then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental
                        prosthetic is added.
                      </p>
                    </div>
                    <ul class="list-content">
                      <li>
                        Being eco-friendly today is becoming more and more
                        important.
                      </li>
                      <li>
                        We use non-violent, creative confrontation to expose
                        global
                      </li>
                      <li>
                        We use the support of more than 1 million activists
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- service section end -->

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
              <div class="name"><a href="team-page.html">Zenith</a></div>
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
              <div class="name">
                <a href="team-page.html">Fauzan</a>
              </div>
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
              <div class="name"><a href="team-page.html">Joevan</a></div>
              <div class="title">Volunteer</div>
            </div>
          </div>
          <div class="single-item">
            <div class="img-box">
              <figure><img src="{{asset('assets/images/team/4.jpg')}}" alt="" /></figure>
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
              <div class="name"><a href="team-page.html">Adrian</a></div>
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

    <!-- donate popup -->
    <div id="donate-popup" class="donate-popup">
      <div class="close-donate theme-btn">
        <span class="fa fa-close"></span>
      </div>
      <div class="popup-inner">
        <div class="container">
          <div class="donate-form-area">
            <h2>Donation Information</h2>
            <h4>How much would you like to donate:</h4>
            <form action="#" class="donate-form default-form">
              <ul class="chicklet-list clearfix">
                <li>
                  <input
                    type="radio"
                    id="donate-amount-1"
                    name="donate-amount"
                  />
                  <label for="donate-amount-1" data-amount="1000">$1000</label>
                </li>
                <li>
                  <input
                    type="radio"
                    id="donate-amount-2"
                    name="donate-amount"
                    checked="checked"
                  />
                  <label for="donate-amount-2" data-amount="2000">$2000</label>
                </li>
                <li>
                  <input
                    type="radio"
                    id="donate-amount-3"
                    name="donate-amount"
                  />
                  <label for="donate-amount-3" data-amount="3000">$3000</label>
                </li>
                <li>
                  <input
                    type="radio"
                    id="donate-amount-4"
                    name="donate-amount"
                  />
                  <label for="donate-amount-4" data-amount="4000">$4000</label>
                </li>
                <li>
                  <input
                    type="radio"
                    id="donate-amount-5"
                    name="donate-amount"
                  />
                  <label for="donate-amount-5" data-amount="5000">$5000</label>
                </li>
                <li class="other-amount">
                  <div
                    class="input-container"
                    data-message="Every dollar you donate helps end hunger."
                  >
                    <span>Or</span
                    ><input
                      type="text"
                      id="other-amount"
                      placeholder="Other Amount"
                    />
                  </div>
                </li>
              </ul>
              <h3>Donor Information</h3>
              <div class="form-bg">
                <div class="row clearfix">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <p>Your Name*</p>
                      <input type="text" name="fname" placeholder="" />
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <p>Email*</p>
                      <input type="text" name="fname" placeholder="" />
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <p>Address*</p>
                      <input type="text" name="fname" placeholder="" />
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <p>Phn Num*</p>
                      <input type="text" name="fname" placeholder="" />
                    </div>
                  </div>
                </div>
              </div>
              <ul class="payment-option">
                <li>
                  <h4>Choose your payment method:</h4>
                </li>
                <li>
                  <div class="checkbox">
                    <label>
                      <input name="pay-us" type="checkbox" />
                      <span>Paypal</span>
                    </label>
                  </div>
                </li>
                <li>
                  <div class="checkbox">
                    <label>
                      <input name="pay-us" type="checkbox" />
                      <span>Offline Donation</span>
                    </label>
                  </div>
                </li>
                <li>
                  <div class="checkbox">
                    <label>
                      <input name="pay-us" type="checkbox" />
                      <span>Credit Card</span>
                    </label>
                  </div>
                </li>
                <li>
                  <div class="checkbox">
                    <label>
                      <input name="pay-us" type="checkbox" />
                      <span>Debit Card</span>
                    </label>
                  </div>
                </li>
              </ul>
              <div class="center">
                <button class="btn-one" type="submit">Donate Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- donate popup -->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header">
      <span class="icon fa fa-angle-up"></span>
    </div>
@endsection
