@extends('layouts.frontend')
@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg12.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
            data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left"
                data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Discover <br>A new
                    Place</h1>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop,
                    or visit from local experts</p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section justify-content-end ftco-search">
    <div class="container-wrap ml-auto">
        <div class="row no-gutters">
            <div class="col-md-12 nav-link-wrap">
                <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
                        aria-controls="v-pills-1" aria-selected="true">Flight</a>

                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                        aria-controls="v-pills-2" aria-selected="false">Hotel</a>

                    <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                        aria-controls="v-pills-3" aria-selected="false">Car Rent</a>
                </div>
            </div>
            <div class="col-md-12 tab-wrap">

                <div class="tab-content p-4 px-5" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                        aria-labelledby="v-pills-nextgen-tab">
                        <form action="#" class="search-destination">
                            <div class="row">
                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">From</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="icon-my_location"></span></div>
                                            <input type="text" class="form-control" placeholder="From">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">Where</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="icon-map-marker"></span></div>
                                            <input type="text" class="form-control" placeholder="Where">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">Check In</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="icon-map-marker"></span></div>
                                            <input type="text" class="form-control checkin_date" placeholder="Check In">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">Check Out</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="icon-map-marker"></span></div>
                                            <input type="text" class="form-control checkout_date" placeholder="From">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">Travelers</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Search" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                        <form action="#" class="search-destination">
                            <div class="row">
                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">Check In</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="icon-map-marker"></span></div>
                                            <input type="text" class="form-control checkin_date" placeholder="Check In">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">Check Out</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="icon-map-marker"></span></div>
                                            <input type="text" class="form-control checkout_date" placeholder="From">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">Guest</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Search" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                        <form action="#" class="search-destination">
                            <div class="row">
                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">Where</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="icon-map-marker"></span></div>
                                            <input type="text" class="form-control" placeholder="Where">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">Check In</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="icon-map-marker"></span></div>
                                            <input type="text" class="form-control checkin_date" placeholder="Check In">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">Check Out</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="icon-map-marker"></span></div>
                                            <input type="text" class="form-control checkout_date" placeholder="From">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Search" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="intro ftco-animate">
                    <h3><span>01</span> Travel</h3>
                    <p>Here we believe, beautiful destinations deserves the best journey and we make sure of that. Our
                        Agency provides best travel companion with cherry on the top facilities that is required by the
                        tavelers.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="intro ftco-animate">
                    <h3><span>02</span> Experience</h3>
                    <p>Our Travel Agency makes sure that the travelers get the best experience through out the journey,
                        which may include whatever the vistors might be interested to experience. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="intro ftco-animate">
                    <h3><span>03</span> Discover</h3>
                    <p>Nepal has a lot of cultural, traditional as well as religious prospects that are yet to be
                        discovered. Our Agency covers them and make sure our valuable tourists get to know them closely.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">See our latest vacation ideas</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <a href="#" class="destination-entry img" style="background-image: url(images/cultural.jpg);">
                    <div class="text text-center">
                        <h3>Cultural Events</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="#" class="destination-entry img" style="background-image: url(images/holiday.jpg);">
                    <div class="text text-center">
                        <h3>Group Holidays</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="#" class="destination-entry img" style="background-image: url(images/trekking.jpg);">
                    <div class="text text-center">
                        <h3>Trekking</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url(images/fordlight.png);"></div>
    <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
            <h2 class="mb-4">The Best Travel Agency</h2>
        </div>
        <div>
            <p>Providing the best facilites with unique, adventerous and full of surprises packages, FordLight is
                considered one of the best Travel Agency in Nepal.
            </p>
        </div>
    </div>
</section>

<section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-yatch"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Special Activities</h3>
                        <p>We make the travelling full of surprises and events.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-around"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Travel Arrangements</h3>
                        <p>Our Team makes sure of all the arrangements.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-compass"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Private Guide</h3>
                        <p>We also make provision of private guide if needed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-map-of-roads"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Location Manager</h3>
                        <p>Our Team manages all the locations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Most Popular Destination</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url(images/destination-1.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-link"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Mt Everest, Solukhumbu</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>9.9 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price">$10000</span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <p class="days"><span>10 days 11 nights</span></p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> Nepal,NE</span>
                            <span class="ml-auto"><a href="#">Discover</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="destination d-md-flex flex-column-reverse">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url(images/destination-2.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-link"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Boudha, Kathmandu</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price">$500</span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <p class="days"><span>2 days 3 nights</span></p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> Nepal, NE</span>
                            <span class="ml-auto"><a href="#">Discover</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url(images/destination-3.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-link"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Lumbini, Kapilvastu</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price">$1000</span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <p class="days"><span>2 days 3 nights</span></p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> NEPAL, NE</span>
                            <span class="ml-auto"><a href="#">Discover</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="destination d-md-flex flex-column-reverse">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url(images/destination-4.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-link"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Muktinath, Mustang</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price">$1000</span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <p class="days"><span>2 days 3 nights</span></p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> NEPAL, NE</span>
                            <span class="ml-auto"><a href="#">Discover</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="100000">0</strong>
                                <span>Happy Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="40000">0</strong>
                                <span>Destination Places</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="87000">0</strong>
                                <span>Hotels</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="56400">0</strong>
                                <span>Restaurant</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4"><strong>Our Popular</strong>Packages</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm col-md-3 col-lg ftco-animate">
                <div class="destination">
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Silver</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price per-price">$40<br><small>/night</small></span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> Miami, Fl</span>
                            <span class="ml-auto"><a href="#">Book Now</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-3 col-lg ftco-animate">
                <div class="destination">
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Platinum</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price per-price">$40<br><small>/night</small></span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> Miami, Fl</span>
                            <span class="ml-auto"><a href="#">Book Now</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-3 col-lg ftco-animate">
                <div class="destination">
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="#">Gold</a></h3>
                                <p class="rate">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <span>8 Rating</span>
                                </p>
                            </div>
                            <div class="two">
                                <span class="price per-price">$40<br><small>/night</small></span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> Miami, Fl</span>
                            <span class="ml-auto"><a href="#">Book Now</a></span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
          <div class="col-sm col-md-3 col-lg ftco-animate">
              <div class="destination">
                  <div class="text p-3">
                      <div class="d-flex">
                          <div class="one">
                              <h3><a href="#">Event</a></h3>
                              <p class="rate">
                                  <i class="icon-star"></i>
                                  <i class="icon-star"></i>
                                  <i class="icon-star"></i>
                                  <i class="icon-star"></i>
                                  <i class="icon-star-o"></i>
                                  <span>8 Rating</span>
                              </p>
                          </div>
                          <div class="two">
                              <span class="price per-price">$40<br><small>/night</small></span>
                          </div>
                      </div>
                      <p>Far far away, behind the word mountains, far from the countries</p>
                      <hr>
                      <p class="bottom-area d-flex">
                          <span><i class="icon-map-o"></i> Miami, Fl</span>
                          <span class="ml-auto"><a href="#">Book Now</a></span>
                      </p>
                  </div>
              </div>
          </div>
          <div class="col-sm col-md-3 col-lg ftco-animate">
              <div class="destination">
                  <div class="text p-3">
                      <div class="d-flex">
                          <div class="one">
                              <h3><a href="#">Surprise</a></h3>
                              <p class="rate">
                                  <i class="icon-star"></i>
                                  <i class="icon-star"></i>
                                  <i class="icon-star"></i>
                                  <i class="icon-star"></i>
                                  <i class="icon-star-o"></i>
                                  <span>8 Rating</span>
                              </p>
                          </div>
                          <div class="two">
                              <span class="price per-price">$40<br><small>/night</small></span>
                          </div>
                      </div>
                      <p>Far far away, behind the word mountains, far from the countries</p>
                      <hr>
                      <p class="bottom-area d-flex">
                          <span><i class="icon-map-o"></i> Miami, Fl</span>
                          <span class="ml-auto"><a href="#">Book Now</a></span>
                      </p>
                  </div>
              </div>
          </div>
          <div class="col-sm col-md-3 col-lg ftco-animate">
              <div class="destination">
                  <div class="text p-3">
                      <div class="d-flex">
                          <div class="one">
                              <h3><a href="#">Couple</a></h3>
                              <p class="rate">
                                  <i class="icon-star"></i>
                                  <i class="icon-star"></i>
                                  <i class="icon-star"></i>
                                  <i class="icon-star"></i>
                                  <i class="icon-star-o"></i>
                                  <span>8 Rating</span>
                              </p>
                          </div>
                          <div class="two">
                              <span class="price per-price">$40<br><small>/night</small></span>
                          </div>
                      </div>
                      <p>Far far away, behind the word mountains, far from the countries</p>
                      <hr>
                      <p class="bottom-area d-flex">
                          <span><i class="icon-map-o"></i> Miami, Fl</span>
                          <span class="ml-auto"><a href="#">Book Now</a></span>
                      </p>
                  </div>
              </div>
          </div>
          
      </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2 class="mb-4">Our satisfied customer says</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in</p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Mark Web</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Mark Web</p>
                                <span class="position">Interface Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Mark Web</p>
                                <span class="position">UI Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Mark Web</p>
                                <span class="position">Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Mark Web</p>
                                <span class="position">System Analyst</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Recommended Restaurants and HomeStay</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url(images/restaurant-1.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-link"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <h3><a href="#">Luxury Restaurant</a></h3>
                        <p class="rate">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-o"></i>
                            <span>8 Rating</span>
                        </p>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> San Franciso, CA</span>
                            <span class="ml-auto"><a href="#">Discover</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="destination d-md-flex flex-column-reverse">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url(images/restaurant-2.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-link"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <h3><a href="#">Luxury Restaurant</a></h3>
                        <p class="rate">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-o"></i>
                            <span>8 Rating</span>
                        </p>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> San Franciso, CA</span>
                            <span class="ml-auto"><a href="#">Book Now</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url(images/restaurant-3.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-link"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <h3><a href="#">Luxury Restaurant</a></h3>
                        <p class="rate">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-o"></i>
                            <span>8 Rating</span>
                        </p>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> San Franciso, CA</span>
                            <span class="ml-auto"><a href="#">Book Now</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="destination d-md-flex flex-column-reverse">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url(images/restaurant-4.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-link"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <h3><a href="#">Luxury Restaurant</a></h3>
                        <p class="rate">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-o"></i>
                            <span>8 Rating</span>
                        </p>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-map-o"></i> San Franciso, CA</span>
                            <span class="ml-auto"><a href="#">Book Now</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2><strong>Tips</strong> &amp; Articles</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text">
                        <span class="tag">Tips, Travel</span>
                        <h3 class="heading mt-3"><a href="#">8 Best homestay in Mustang and Lumbini that you don't miss
                                out</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">October 3, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text">
                        <span class="tag">Culture</span>
                        <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the
                                blind texts</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">October 3, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text">
                        <span class="tag">Tips, Travel</span>
                        <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the
                                blind texts</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">October 3, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
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
                    <p>Thanks For Visiting Us</p>
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
