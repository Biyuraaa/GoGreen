@extends('layouts.template')
@section('titles')
  <section class="page-title">
      <div class="container">
        <div class="content-box">
          <div class="title">Gallery</div>
          <div class="bread-crumb">
            <a href="index.html">Home &nbsp;</a> /&nbsp;<span>Gallery</span>
          </div>
        </div>
      </div>
  </section>
@endsection
@section('content')
<section class="gallery-section gallery-fulwidth sec-pad">
      <div class="container-fluid">
        <ul class="post-filter centred">
          <li class="active" data-filter=".filter-item">
            <span>All</span>
          </li>
          <li data-filter=".Consulting">
            <span>Environment</span>
          </li>
          <li data-filter=".Finance">
            <span> Recycling</span>
          </li>
          <li data-filter=".Marketing">
            <span>Ecology</span>
          </li>
          <li data-filter=".Growth">
            <span>Climate</span>
          </li>
        </ul>

        <div class="row masonary-layout filter-layout">
          <div class="col-md-3 col-sm-6 col-xs-12 filter-item">
            <div class="single-item">
              <div class="single-item-overlay">
                <div class="img-box">
                  <img src="{{asset('assets/images/gallery/g1.jpg')}}" alt="" />
                  <a href="#" class="overlay">
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
          <div class="col-md-3 col-sm-6 col-xs-12 filter-item Consulting">
            <div class="single-item">
              <div class="single-item-overlay">
                <div class="img-box">
                  <img src="{{asset('assets/images/gallery/g2.jpg')}}" alt="" />
                  <a href="#" class="overlay">
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
          <div class="col-md-3 col-sm-6 col-xs-12 filter-item Finance">
            <div class="single-item">
              <div class="single-item-overlay">
                <div class="img-box">
                  <img src="{{asset('assets/images/gallery/g3.jpg')}}" alt="" />
                  <a href="#" class="overlay">
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
          <div class="col-md-3 col-sm-6 col-xs-12 filter-item Finance">
            <div class="single-item">
              <div class="single-item-overlay">
                <div class="img-box">
                  <img src="{{asset('assets/images/gallery/g4.jpg')}}" alt="" />
                  <a href="#" class="overlay">
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
          <div class="col-md-3 col-sm-6 col-xs-12 filter-item Consulting">
            <div class="single-item">
              <div class="single-item-overlay">
                <div class="img-box">
                  <img src="{{asset('assets/images/gallery/g5.jpg')}}" alt="" />
                  <a href="#" class="overlay">
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
          <div class="col-md-3 col-sm-6 col-xs-12 filter-item Marketing">
            <div class="single-item">
              <div class="single-item-overlay">
                <div class="img-box">
                  <img src="{{asset('assets/images/gallery/g6.jpg')}}" alt="" />
                  <a href="#" class="overlay">
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
          <div class="col-md-3 col-sm-6 col-xs-12 filter-item Marketing">
            <div class="single-item">
              <div class="single-item-overlay">
                <div class="img-box">
                  <img src="{{asset('assets/images/gallery/g7.jpg')}}" alt="" />
                  <a href="#" class="overlay">
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
          <div class="col-md-3 col-sm-6 col-xs-12 filter-item Growth">
            <div class="single-item">
              <div class="single-item-overlay">
                <div class="img-box">
                  <img src="{{asset('assets/images/gallery/g8.jpg')}}" alt="" />
                  <a href="#" class="overlay">
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
        </div>
        <ul class="link-btn centred">
          <li>
            <a href="#"><i class="fa fa-angle-left"></i></a>
          </li>
          <li><a href="#">1</a></li>
          <li><a href="#" class="active">2</a></li>
          <li>
            <a href="#"><i class="fa fa-angle-right"></i></a>
          </li>
        </ul>
      </div>
    </section>
    <!-- project section end -->


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

