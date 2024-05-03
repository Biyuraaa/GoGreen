@extends('layouts.template')
@section('title')
  <section class="page-title">
      <div class="container">
        <div class="content-box">
          <div class="title">Contact <span>Us</span></div>
          <div class="bread-crumb">
            <a href="index.html">Home &nbsp;</a> /&nbsp;<span>Contact Us</span>
          </div>
        </div>
      </div>
  </section>
@endsection

@section('content')
<section class="contact-info centred">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12 contact-column">
            <div class="single-item">
              <div class="title"><h3>ADDRESS</h3></div>
              <div class="text">
                Kampus C Unair,<br />
                Surabaya, Indonesia
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 contact-column">
            <div class="single-item">
              <div class="title"><h3>Phone Number</h3></div>
              <div class="text">
                (+62) 8222211111<br />
                (+62) 8111122222
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 contact-column">
            <div class="single-item hvr-grow-shadow">
              <div class="title"><h3>Email</h3></div>
              <div class="text">
                Support32@GOGREEN.com <br />info12@GOGREEN.com
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-section">
      <div class="container">
        <div class="contact-title centred">Contact form</div>
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 column">
            <div class="contact-area">
              <form
                id="contact-form"
                name="contact_form"
                class="default-form"
                action="inc/sendmail.php"
                method="post"
              >
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input
                      type="text"
                      name="form_name"
                      value=""
                      placeholder="Your Name"
                      required=""
                    />
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input
                      type="email"
                      name="form_email"
                      value=""
                      placeholder="Your Email"
                      required=""
                    />
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input
                      type="text"
                      name="form_subject"
                      value=""
                      placeholder="Subject"
                      required=""
                    />
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <textarea
                      placeholder="Your Message"
                      name="form_message"
                      required=""
                    ></textarea>
                  </div>
                </div>
                <button
                  type="submit"
                  class="btn-one"
                  data-loading-text="Please wait..."
                >
                  SEND YOUR MESSAGE
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12 contact-column">
            <div class="google-map-area">
              <div
                class="google-map"
                id="contact-google-map"
                data-map-lat="-7.26847"
                data-map-lng="112.78456"
                data-icon-path="{{asset('images/resources/map-marker.png')}}"
                data-map-title="Brooklyn, New York, United Kingdom"
                data-map-zoom="12"
                data-markers='{
                                "marker-1": [-7.26847, 112.78456, "<h4>Universitas Airlangga</h4><p>Kampus C, Surabaya, Indonesia</p>","{{asset('images/resources/map-marker.png')}}"]
                            }'
              ></div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
    