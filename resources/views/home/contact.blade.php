@extends('layouts.frontend')

@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section contact-section ftco-degree-bg">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h2 class="h4">Contact Information</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3">
        <p><span>Address:</span>Bagbazar, Kathmandu ,Nepal</p>
      </div>
      <div class="col-md-3">
        <p><span>Phone:</span> <a href="tel://1234567920">+977-01-2345685
        </a></p>
      </div>
      <div class="col-md-3">
        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@fordlight.com</a></p>
      </div>
      <div class="col-md-3">
        <p><span>Website</span> <a href="#">www.fordlight.com</a></p>
      </div>
    </div>
    <div class="row block-9">
      <div class="col-md-6 order-md-last pr-md-5">
        <form action="#">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      
      </div>

      <div class="col-md-6">
        <div id="map"></div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section-parallax">
  <div class="parallax-img d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <h2>Subcribe to our Newsletter</h2>
          <p>Thanks for Visiting Us!</p>
          <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-8">
              <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection