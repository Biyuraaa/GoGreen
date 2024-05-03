@extends('layouts.template')
@section('title')
  <section class="page-title">
      <div class="container">
        <div class="content-box">
          <div class="title">Our <span>blog</span></div>
          <div class="bread-crumb">
            <a href="index.html">Home &nbsp;</a> /&nbsp;<span>blog</span>
          </div>
        </div>
      </div>
  </section>
@endsection
@section('content')
  <section class="blog-classic news-section blog-page">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-12 col-xs-12 content-side">
            <div class="blog-classic-content">
              <div class="single-item">
                <div class="img-box">
                  <a href="blog-details.html"
                    ><figure><img src="{{asset('assets/images/news/n1.jpg')}}" alt="" /></figure
                  ></a>
                </div>
                <div class="lower-content">
                  <div class="meta">Ecology</div>
                  <h4>
                    <a href="blog-details.html"
                      >How to save animals in future</a
                    >
                  </h4>
                  <div class="text">
                    <p>
                      Cause description text here a in erat malesuada gravida.
                      Cum sociis natoque penatibus et magnis dis parturient
                      montes, nascetur ridiculus mus. Nulla faucibus sed eros
                      malesuada dapibus consequat enim.ent montes, nascetur
                      ridiculus mus. Nulla faucibus sed eros malesuada dapibus
                      consequat enim.
                    </p>
                  </div>
                  <div class="button-content">
                    By Zaki <span>16 hours Ago</span>
                  </div>
                </div>
              </div>
              <div class="single-item">
                <div class="img-box">
                  <a href="blog-details.html"
                    ><figure><img src="{{asset('assets/images/news/n2.jpg')}}" alt="" /></figure
                  ></a>
                </div>
                <div class="lower-content">
                  <div class="meta">Natural</div>
                  <h5>
                    <a href="blog-details.html">Get Clear Environment System</a>
                  </h5>
                  <div class="text">
                    <p>
                      Cause description text here a in erat malesuada gravida.
                      Cum sociis natoque penatibus et magnis dis parturient
                      montes, nascetur ridiculus mus. Nulla faucibus sed eros
                      malesuada dapibus consequat enim.ent montes, nascetur
                      ridiculus mus. Nulla faucibus sed eros malesuada dapibus
                      consequat enim.
                    </p>
                  </div>
                  <div class="button-content">
                    By Jepi <span>8 hours Ago</span>
                  </div>
                </div>
              </div>
              <div class="single-item">
                <div class="img-box">
                  <a href="blog-details.html"
                    ><figure><img src="{{asset('assets/images/news/n3.jpg')}}" alt="" /></figure
                  ></a>
                </div>
                <div class="lower-content">
                  <div class="meta">Ecology</div>
                  <h5>
                    <a href="blog-details.html">Protect the Environment</a>
                  </h5>
                  <div class="text">
                    <p>
                      Cause description text here a in erat malesuada gravida.
                      Cum sociis natoque penatibus et magnis dis parturient
                      montes, nascetur ridiculus mus. Nulla faucibus sed eros
                      malesuada dapibus consequat enim.ent montes, nascetur
                      ridiculus mus. Nulla faucibus sed eros malesuada dapibus
                      consequat enim.
                    </p>
                  </div>
                  <div class="button-content">
                    By Dyto <span>2 Day Ago</span>
                  </div>
                </div>
              </div>
              <div class="single-item">
                <div class="img-box">
                  <a href="blog-details.html"
                    ><figure><img src="{{asset('assets/images/news/n4.jpg')}}" alt="" /></figure
                  ></a>
                </div>
                <div class="lower-content">
                  <div class="meta">Natural</div>
                  <h5><a href="blog-details.html">New Plants Developed</a></h5>
                  <div class="text">
                    <p>
                      Cause description text here a in erat malesuada gravida.
                      Cum sociis natoque penatibus et magnis dis parturient
                      montes, nascetur ridiculus mus. Nulla faucibus sed eros
                      malesuada dapibus consequat enim.ent montes, nascetur
                      ridiculus mus. Nulla faucibus sed eros malesuada dapibus
                      consequat enim.
                    </p>
                  </div>
                  <div class="button-content">
                    By Adrian <span>3 day Ago</span>
                  </div>
                </div>
              </div>
              <ul class="link-btn">
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
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 sidebar-side">
            <div class="sidebar">
              <div class="sidebar-search sidebar-wideget">
                <div class="sidebar-title"><h4>Search</h4></div>
                <div class="search-box">
                  <form action="#">
                    <input type="text" placeholder="Search..." />
                    <button><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
              <div class="sidebar-categories sidebar-wideget">
                <div class="sidebar-title"><h4>Categories</h4></div>
                <ul class="categories-list">
                  <li>
                    <a href="#">Clear Environment <span>(12)</span></a>
                  </li>
                  <li>
                    <a href="#">Animals Brutality <span>(25)</span></a>
                  </li>
                  <li>
                    <a href="#">Eco Energy <span>(12)</span></a>
                  </li>
                  <li>
                    <a href="#">Proper Education <span>(33)</span></a>
                  </li>
                  <li>
                    <a href="#">Recycling Materials <span>(16)</span></a>
                  </li>
                </ul>
              </div>
              <div class="sidebar-post sidebar-wideget">
                <div class="sidebar-title"><h4>Recent Post</h4></div>
                <div class="sinlge-post">
                  <div class="img-box">
                    <a href="blog-details.html"
                      ><figure><img src="{{asset('assets/images/news/p1.jpg')}}" alt="" /></figure
                    ></a>
                  </div>
                  <div class="post-title">
                    <a href="blog-details.html"
                      >Recycling Materials Of Nature</a
                    >
                  </div>
                  <div class="text">Jan 15, 2024</div>
                </div>
                <div class="sinlge-post">
                  <div class="img-box">
                    <a href="blog-details.html"
                      ><figure><img src="{{asset('assets/images/news/p2.jpg')}}" alt="" /></figure
                    ></a>
                  </div>
                  <div class="post-title">
                    <a href="blog-details.html"
                      >Protect the Nature Of Environment</a
                    >
                  </div>
                  <div class="text">Mei 6, 2024</div>
                </div>
              </div>
              <div class="sidebar-tags sidebar-wideget">
                <div class="sidebar-title"><h4>Tags</h4></div>
                <ul class="tag-list">
                  <li><a href="#">Eco System</a></li>
                  <li><a href="#">Solar Enargy</a></li>
                  <li><a href="#">Breads</a></li>
                  <li><a href="#">Agri Plants</a></li>
                  <li><a href="#">Organic</a></li>
                  <li><a href="#">Wind Energy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
