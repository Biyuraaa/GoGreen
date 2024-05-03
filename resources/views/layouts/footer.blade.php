@unless (Auth::user())
  <footer class="main-footer-area footer-style-two">
      <div class="container">
        <div class="footer-top centred sec-pad">
          <div class="footer-logo">
            <a href="index.html"
              ><figure>
                <img src="{{asset('assets/images/footer/footer-logo2.png')}}" alt="" /></figure
            ></a>
          </div>
          <ul class="footer-social">
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
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-pinterest-p"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom centred">
        <div class="copyright">
          Copyright © 2018 <a href="#">Benxi</a>. All Rights Reserved
        </div>
      </div>
    </footer>
    @else
    <footer class="main-footer-area">
        <div class="main-footer">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                <div class="logo-wideget footer-wideget">
                  <div class="footer-logo">
                    <a href="index.html"
                      ><figure>
                        <img src="{{asset('assets/images/footer/footer-logo.png')}}" alt="" /></figure
                    ></a>
                  </div>
                  <div class="text">
                    Nulla ut ex tempor, volutpat quam sed, mattis nibh. Maecenas a
                    ultrices ante
                  </div>
                  <div class="follow">Follow Us :</div>
                  <ul class="footer-social">
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                <div class="update-wideget footer-wideget">
                  <div class="footer-title">Latest Updates</div>
                  <div class="single-box">
                    <div class="text">
                      Donec malesuada libero vel mi ullam- corper tincidunt.
                      Vivamus.
                    </div>
                    <div class="comment">5 Comments</div>
                  </div>
                  <div class="single-box">
                    <div class="text">
                      Donec malesuada libero vel mi ullam- corper tincidunt.
                      Vivamus.
                    </div>
                    <div class="comment">8 Comments</div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                <div class="gallery-wideget footer-wideget">
                  <div class="footer-title">Photo Gallery</div>
                  <ul class="img-list clearfix">
                    <li>
                      <a href="gallery.html"
                        ><figure><img src="{{asset('assets/images/footer/1.jpg')}}" alt="" /></figure
                      ></a>
                    </li>
                    <li>
                      <a href="gallery.html"
                        ><figure><img src="{{asset('assets/images/footer/2.jpg')}}" alt="" /></figure
                      ></a>
                    </li>
                    <li>
                      <a href="gallery.html"
                        ><figure><img src="{{asset('assets/images/footer/3.jpg')}}" alt="" /></figure
                      ></a>
                    </li>
                    <li>
                      <a href="gallery.html"
                        ><figure><img src="{{asset('assets/images/footer/4.jpg')}}" alt="" /></figure
                      ></a>
                    </li>
                    <li>
                      <a href="gallery.html"
                        ><figure><img src="{{asset('assets/images/footer/5.jpg')}}" alt="" /></figure
                      ></a>
                    </li>
                    <li>
                      <a href="gallery.html"
                        ><figure><img src="{{asset('assets/images/footer/6.jpg')}}" alt="" /></figure
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 col-sm-6 col-xs-12 footer-column">
                <div class="link-wideget footer-wideget">
                  <div class="footer-title">Quick links</div>
                  <ul class="list">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="service.html">Our Services</a></li>
                    <li><a href="gallery.html">Our Projects</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                    <li><a href="blog-details.html">Latest News</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="footer-bottom centred">
            <div class="copyright">
              Copyright © 2023 <a href="#">GOGREEN</a>. All Rights Reserved
            </div>
          </div>
        </div>
      </footer>
@endunless

    <!-- main footer area -->
    