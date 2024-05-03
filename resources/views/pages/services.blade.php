@extends('layouts.template')
@section( 'title')
    <section class="page-title">
      <div class="container">
        <div class="content-box">
          <div class="title">Services</div>
          <div class="bread-crumb">
            <a href="index.html">Home &nbsp;</a> /&nbsp;<span>Services</span>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('content')
<div class="preloader"></div>

    <!-- page title -->

    <!--End Page Title-->

    <!-- about section -->
    <section class="about-section">
      <div class="container">
        <div class="top-content">
          <div class="row">
            <div class="col-md-5 col-sm-6 col-xs-12 about-column">
              <div class="left-content text-right">
                <div class="top-title">4+ volunteer</div>
                <div class="title">People working with us since 2023!!</div>
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
                          <img src="{{asset('assets/images/service/1')}}.png" alt="" />
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
                          <img src="{{asset('assets/images/service/2')}}.png" alt="" />
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
                          <img src="{{asset('assets/images/service/3')}}.png" alt="" />
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
                          <img src="{{asset('assets/images/service/4')}}.png" alt="" />
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
                          <img src="{{asset('assets/images/service/5')}}.png" alt="" />
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

    <!-- helping-us -->
    <section class="helping-us">
      <div class="container">
        <div class="helping-title centred">
          <div class="sec-title"><h2>Helping Us By Donating</h2></div>
          <div class="tit-text font_size_16">
            Leverage agile frameworks to provide a robust synopsis for high
            level overviews. Iterative approaches to corporate strategy
            foster<br />
            collaborative thinking to further the thinking to further the
            overall value proposition.
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 helping-column">
            <div class="video-gallery">
              <img
                src="{{asset('assets/images/home/video')}}-gallery.jpg"
                alt="Awesome Video Gallery"
              />
              <div class="overlay-gallery">
                <div class="icon-holder">
                  <div class="icon">
                    <a
                      class="html5lightbox"
                      title="Plan a tree"
                      href="https://www.youtube.com/watch?v=fFr6E-JOj-k"
                      ><img src="{{asset('assets/images/home/play')}}-btn.png" alt="Play Button"
                    /></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12 helping-column">
            <div class="helping-content">
              <div class="title">
                Join <span>Campaign</span> & helping <br />us by donating
              </div>
              <div class="text font_size_16">
                Leverage agile frameworks to provide a robust synopsis for high
                level overviews. Iterative approaches to corporate strategy
                foster collaborative
              </div>
              <div class="info-box">
                <div class="single-info">
                  <div class="img-box">
                    <figure><img src="{{asset('assets/images/home/info1')}}.png" alt="" /></figure>
                  </div>
                  <h4>Donate Now</h4>
                </div>
                <div class="single-info">
                  <div class="img-box">
                    <figure><img src="{{asset('assets/images/home/info2')}}.png" alt="" /></figure>
                  </div>
                  <h4>Sponsor Projects</h4>
                </div>
                <div class="single-info">
                  <div class="img-box">
                    <figure><img src="{{asset('assets/images/home/info3')}}.png" alt="" /></figure>
                  </div>
                  <h4>Be a Volunteer</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- helping-us end -->

    <!--End pagewrapper-->

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
