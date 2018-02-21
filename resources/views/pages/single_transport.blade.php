@extends('layouts.app')

@section('title')

@endsection

@section('keywords')

@endsection

@section('desc')

@endsection

@section('content')

<div class="clearfix"></div>


<!-- ================ Listing Detail Basic Information ======================= -->
<section class="detail-section" style="background:url(assets/img/slider-2.jpg);">
  <div class="overlay" style="background-color: rgb(36, 36, 41); opacity: 0.5;"></div>
  <div class="profile-cover-content">
    <div class="container">
      <div class="cover-buttons">
        <ul>
        <li><div class="buttons medium button-plain "><i class="fa fa-phone"></i>+91 528 578 5458</div></li>
        <li><div class="buttons medium button-plain "><i class="fa fa-map-marker"></i>#2852, SCO 20 Chandigarh</div></li>
        <li><div class="inside-rating buttons listing-rating theme-btn button-plain"><span class="value">9.7</span> <sup class="out-of">/10</sup></div></li>
        <li><a href="#add-review" class="buttons btn-outlined medium add-review"><i class="fa fa-comments-o"></i><span class="hidden-xs">Add review</span></a></li>
        <li><a href="#" data-listing-id="74" data-nonce="01a769d424" class="buttons btn-outlined"><i class="fa fa-heart-o"></i><span class="hidden-xs">Bookmark</span> </a></li>
        </ul>
      </div>
      <div class="listing-owner hidden-xs hidden-sm">
        <div class="listing-owner-avater">
          <img src="assets/img/avatar.jpg" class="img-responsive img-circle" alt="" />
        </div>
        <div class="listing-owner-detail">
          <h4>Lucy Lukie</h4>
          <span class="theme-cl">Web Designer</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================ End Listing Detail Basic Information ======================= -->

<!-- ================ Listing Detail Full Information ======================= -->
<section class="list-detail">
  <div class="container">
    <div class="row">
      <!-- Start: Listing Detail Wrapper -->
      <div class="col-md-8 col-sm-8">
        <div class="detail-wrapper">
          <div class="detail-wrapper-body">
            <div class="listing-title-bar">
              <h3>Pizza Prizm House <span class="mrg-l-5 category-tag">Restaurants</span></h3>
              <div>
                <a href="#listing-location" class="listing-address">
                  <i class="ti-location-pin mrg-r-5"></i>
                  2726 Shinn Street, New York
                </a>

                <div class="rating-box">
                  <div class="detail-list-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <a href="#" class="detail-rating-count">47 Rating</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="detail-wrapper">
          <div class="detail-wrapper-header">
            <h4>Overview</h4>
          </div>
          <div class="detail-wrapper-body">
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
          </div>
        </div>

        <div class="detail-wrapper">
          <div class="detail-wrapper-header">
            <h4>Amenities</h4>
          </div>
          <div class="detail-wrapper-body">
            <ul class="detail-check">
              <li>Alarm system</li>
              <li>Depanneur in building</li>
              <li>Onsite management</li>
              <li>Janitor</li>
              <li>Security cameras</li>
              <li>Laundry room in building</li>
              <li>Door attendant</li>
              <li>Street parking</li>
              <li>Attached garage</li>
              <li>Elevator</li>
              <li>Wheelchair accessible</li>
              <li>Hot water</li>
            </ul>
          </div>
        </div>

        <div class="detail-wrapper">
          <div class="detail-wrapper-header">
            <h4>Location</h4>
          </div>
          <div class="detail-wrapper-body">
            <div id="map_full_width_one" class="full-width" style="height:400px;"></div>
          </div>
        </div>

        <div class="detail-wrapper">
          <div class="detail-wrapper-header">
            <h4>24 Reviews</h4>
          </div>
          <div class="detail-wrapper-body">
            <ul class="review-list">
              <li>
                <div class="reviews-box">
                  <div class="review-body">
                    <div class="review-avatar">
                      <img alt="" src="assets/img/user-1.png" class="avatar avatar-140 photo">
                    </div>
                    <div class="review-content">
                      <div class="review-info">
                        <div class="review-comment">
                          <div class="review-author">
                            Cole Harris
                          </div>
                          <div class="review-comment-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star empty"></i>
                          </div>
                        </div>
                        <div class="review-comment-date">
                          <div class="review-date">
                            <span>4 weeks ago</span>
                          </div>
                        </div>
                      </div>
                      <p>At Vero Eos Et Accusamus Et Iusto Odio Dignissimos Ducimus Qui Blanditiis Praesentium Voluptatum Deleniti Atque Corrupti Quos Dolores Et Quas Molestias Excepturi Sint Occaecati Cupiditate Non Provident.</p>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="reviews-box">
                  <div class="review-body">
                    <div class="review-avatar">
                      <img alt="" src="assets/img/user-2.jpg" class="avatar avatar-140 photo">
                    </div>
                    <div class="review-content">
                      <div class="review-info">
                        <div class="review-comment">
                          <div class="review-author">
                            Mariya Merry
                          </div>
                          <div class="review-comment-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star empty"></i>
                          </div>
                        </div>
                        <div class="review-comment-date">
                          <div class="review-date">
                            <span>3 weeks ago</span>
                          </div>
                        </div>
                      </div>
                      <p>At Vero Eos Et Accusamus Et Iusto Odio Dignissimos Ducimus Qui Blanditiis Praesentium Voluptatum Deleniti Atque Corrupti Quos Dolores Et Quas Molestias Excepturi Sint Occaecati Cupiditate Non Provident.</p>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="reviews-box">
                  <div class="review-body">
                    <div class="review-avatar">
                      <img alt="" src="assets/img/user-3.jpg" class="avatar avatar-140 photo">
                    </div>
                    <div class="review-content">
                      <div class="review-info">
                        <div class="review-comment">
                          <div class="review-author">
                            Wadden Will
                          </div>
                          <div class="review-comment-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star empty"></i>
                          </div>
                        </div>
                        <div class="review-comment-date">
                          <div class="review-date">
                            <span>5 weeks ago</span>
                          </div>
                        </div>
                      </div>
                      <p>At Vero Eos Et Accusamus Et Iusto Odio Dignissimos Ducimus Qui Blanditiis Praesentium Voluptatum Deleniti Atque Corrupti Quos Dolores Et Quas Molestias Excepturi Sint Occaecati Cupiditate Non Provident.</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="detail-wrapper">
          <div class="detail-wrapper-header">
            <h4>Rate & Write Reviews</h4>
          </div>
          <div class="detail-wrapper-body">

            <div class="row mrg-bot-10">
              <div class="col-md-12">
                <div class="rating-opt">
                  <div   class="jr-ratenode jr-nomal"></div>
                  <div   class="jr-ratenode jr-nomal "></div>
                  <div   class="jr-ratenode jr-nomal "></div>
                  <div   class="jr-ratenode jr-nomal "></div>
                  <div   class="jr-ratenode jr-nomal "></div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Your Name*">
              </div>
              <div class="col-sm-6">
                <input type="email" class="form-control" placeholder="Email Address*">
              </div>
              <div class="col-sm-12">
                <textarea class="form-control height-110" placeholder="Tell us your experience..."></textarea>
              </div>
              <div class="col-sm-12">
                <button type="button" class="btn theme-btn">Submit your review</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Listing Detail Wrapper -->

      <!-- Sidebar Start -->
      <div class="col-md-4 col-sm-12">
        <div class="sidebar">
          <!-- Start: Book A Reservation -->
          <div class="widget-boxed">
            <div class="widget-boxed-header">
              <h4><i class="ti-calendar padd-r-10"></i>Book A Reservation</h4>
            </div>
            <div class="widget-boxed-body">
              <div class="row">
                <div class="col-lg-6 col-md-12">
                  <input type="text" id="reservation-date" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
                </div>
                <div class="col-lg-6 col-md-12">
                  <input type="text" id="reservation-time" class="form-control" readonly="">
                </div>
              </div>
              <div class="row mrg-top-15">
                <div class="col-lg-6 col-md-12">
                  <label>Adult</label>
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                        <i class="fa fa-minus"></i>
                      </button>
                    </span>
                    <input type="text" name="quant[1]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                    <span class="input-group-btn">
                       <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[1]">
                         <i class="fa fa-plus"></i>
                        </button>
                    </span>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12">
                  <label>Children</label>
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                        <i class="fa fa-minus"></i>
                      </button>
                    </span>
                    <input type="text" name="quant[2]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                    <span class="input-group-btn">
                       <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[2]">
                         <i class="fa fa-plus"></i>
                        </button>
                    </span>
                  </div>
                </div>
              </div>
              <a href="payment-method.html" class="btn reservation btn-radius theme-btn full-width mrg-top-10">Book Now</a>
            </div>
          </div>
          <!-- End: Book A Reservation -->

          <!-- Start: Opening hour -->
          <div class="widget-boxed">
            <div class="widget-boxed-header">
              <h4><i class="ti-time padd-r-10"></i>Opening Hours</h4>
            </div>
            <div class="widget-boxed-body">
              <div class="side-list">
                <ul>
                  <li>Monday <span>9 AM - 5 PM</span></li>
                  <li>Tuesday <span>9 AM - 5 PM</span></li>
                  <li>Wednesday <span>9 AM - 5 PM</span></li>
                  <li>Thursday <span>9 AM - 5 PM</span></li>
                  <li>Friday <span>9 AM - 5 PM</span></li>
                  <li>Saturday <span>9 AM - 3 PM</span></li>
                  <li>Sunday <span>Closed</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End: Opening hour -->

          <!-- Start: Listing Gallery -->
          <div class="widget-boxed">
            <div class="widget-boxed-header">
              <h4><i class="ti-gallery padd-r-10"></i>Gallery</h4>
            </div>
            <div class="widget-boxed-body">
              <div class="side-list no-border gallery-box">
                <ul class="gallery-list">
                  <li>
                    <a data-fancybox="gallery" href="assets/img/slider-2.jpg">
                      <img src="assets/img/slider-2.jpg" class="img-responsive" alt="" />
                    </a>
                  </li>
                  <li>
                    <a data-fancybox="gallery" href="assets/img/slider-2.jpg">
                      <img src="assets/img/slider-2.jpg" class="img-responsive" alt="" >
                    </a>
                  </li>
                  <li>
                    <a data-fancybox="gallery" href="assets/img/slider-2.jpg">
                      <img src="assets/img/slider-2.jpg" class="img-responsive" alt="" >
                    </a>
                  </li>
                  <li>
                    <a data-fancybox="gallery" href="assets/img/slider-2.jpg">
                      <img src="assets/img/slider-2.jpg" class="img-responsive" alt="" >
                    </a>
                  </li>
                  <li>
                    <a data-fancybox="gallery" href="assets/img/slider-2.jpg">
                      <img src="assets/img/slider-2.jpg" class="img-responsive" alt="" >
                    </a>
                  </li>
                  <li>
                    <a data-fancybox="gallery" href="assets/img/slider-2.jpg">
                      <img src="assets/img/slider-2.jpg" class="img-responsive" alt="" >
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End: Listing Gallery -->

          <!-- Start: Latest Listing -->
          <div class="widget-boxed">
            <div class="widget-boxed-header">
              <h4><i class="ti-check-box padd-r-10"></i>Latest Listing</h4>
            </div>
            <div class="widget-boxed-body padd-top-5">
              <div class="side-list">
                <ul class="listing-list">
                  <li>
                    <a href="#">
                      <div class="listing-list-img">
                        <img src="assets/img/image-3.jpg" class="img-responsive" alt="">
                      </div>
                    </a>
                    <div class="listing-list-info">
                      <h5><a href="#" title="Listing">Freel Documentry</a></h5>
                      <div class="listing-post-meta">
                        <span class="updated">Nov 26, 2017</span> | <a href="#" rel="tag">Documentry</a>
                      </div>
                    </div>
                  </li>

                  <li>
                    <a href="#">
                      <div class="listing-list-img">
                        <img src="assets/img/image-4.jpg" class="img-responsive" alt="">
                      </div>
                    </a>
                    <div class="listing-list-info">
                      <h5><a href="#" title="Listing">Preez Food Rock</a></h5>
                      <div class="listing-post-meta">
                        <span class="updated">Oct 10, 2017</span> | <a href="#" rel="tag">Food</a>
                      </div>
                    </div>
                  </li>

                  <li>
                    <a href="#">
                      <div class="listing-list-img">
                        <img src="assets/img/image-1.jpg" class="img-responsive" alt="">
                      </div>
                    </a>
                    <div class="listing-list-info">
                      <h5><a href="#" title="Listing">Cricket Buzz High</a></h5>
                      <div class="listing-post-meta">
                        <span class="updated">Oct 07, 2017</span> | <a href="#" rel="tag">Sport</a>
                      </div>
                    </div>
                  </li>

                  <li>
                    <a href="#">
                      <div class="listing-list-img">
                        <img src="assets/img/image-5.jpg" class="img-responsive" alt="">
                      </div>
                    </a>
                    <div class="listing-list-info">
                      <h5><a href="#" title="Listing">Tour travel Tick</a></h5>
                      <div class="listing-post-meta">
                        <span class="updated">Sep 27, 2017</span> | <a href="#" rel="tag">Travel</a>
                      </div>
                    </div>
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <!-- End: Latest Listing -->

          <!-- Start: Listing Category -->
          <div class="widget-boxed">
            <div class="widget-boxed-header">
              <h4><i class="ti-briefcase padd-r-10"></i>Top Categories</h4>
            </div>
            <div class="widget-boxed-body padd-top-10 padd-bot-0">
              <div class="side-list">
                <ul class="category-list">
                  <li><a href="#">Business <span class="badge bg-g">4</span></a></li>
                  <li><a href="#">Shopping <span class="badge bg-a">7</span></a></li>
                  <li><a href="#">Photography <span class="badge bg-d">10</span></a></li>
                  <li><a href="#">Intertainment <span class="badge bg-l">55</span></a></li>
                  <li><a href="#">Education <span class="badge bg-o">8</span></a></li>
                  <li><a href="#">Travel & Tour <span class="badge bg-y">17</span></a></li>
                  <li><a href="#">Health & Fitness <span class="badge bg-s">9</span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End: Listing Category -->

          <!-- Start: Listing Location -->
          <div class="widget-boxed">
            <div class="widget-boxed-header">
              <h4><i class="ti-location-pin padd-r-10"></i>Location</h4>
            </div>
            <div class="widget-boxed-body">
              <div class="side-list no-border">
                <ul>
                  <li><i class="ti-location-pin padd-r-10"></i>171 Greenwich St QCH7</li>
                  <li><i class="ti-mobile padd-r-10"></i>91 234 567 8765</li>
                  <li><i class="ti-email padd-r-10"></i>suppoer@listinghub.com</li>
                </ul>
                <h5>Share Listing</h5>
                <ul class="side-list-inline no-border social-side">
                  <li><a href="#"><i class="fa fa-facebook theme-cl"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus theme-cl"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter theme-cl"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin theme-cl"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest theme-cl"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End: Listing Location -->
        </div>
      </div>
        <!-- End: Sidebar Start -->
    </div>
  </div>
</section>
<!-- ================ Listing Detail Full Information ======================= -->
@endsection
