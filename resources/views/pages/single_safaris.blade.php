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



<!-- tabs here -->
<div class="col-md-12 col-sm-12">
  <div class="tab style-2" role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home2" aria-controls="home2" role="tab" data-toggle="tab">Section 1</a></li>
      <li role="presentation"><a href="#profile2" aria-controls="profile2" role="tab" data-toggle="tab">Section 2</a></li>
      <li role="presentation"><a href="#messages2" aria-controls="messages2" role="tab" data-toggle="tab">Section 3</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content tabs">
      <div role="tabpanel" class="tab-pane fade in active" id="home2">
        <h3>Section 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec urna aliquam, ornare eros vel, malesuada lorem. Nullam faucibus lorem at eros consectetur lobortis. Maecenas nec nibh congue, placerat sem id, rutrum velit. Phasellus porta enim at facilisis condimentum. Maecenas pharetra dolor vel elit tempor pellentesque sed sed eros. Aenean vitae mauris tincidunt, imperdiet orci semper, rhoncus ligula. Vivamus scelerisque.</p>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="profile2">
        <h3>Section 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec urna aliquam, ornare eros vel, malesuada lorem. Nullam faucibus lorem at eros consectetur lobortis. Maecenas nec nibh congue, placerat sem id, rutrum velit. Phasellus porta enim at facilisis condimentum. Maecenas pharetra dolor vel elit tempor pellentesque sed sed eros. Aenean vitae mauris tincidunt, imperdiet orci semper, rhoncus ligula. Vivamus scelerisque.</p>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="messages2">
        <h3>Section 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec urna aliquam, ornare eros vel, malesuada lorem. Nullam faucibus lorem at eros consectetur lobortis. Maecenas nec nibh congue, placerat sem id, rutrum velit. Phasellus porta enim at facilisis condimentum. Maecenas pharetra dolor vel elit tempor pellentesque sed sed eros. Aenean vitae mauris tincidunt, imperdiet orci semper, rhoncus ligula. Vivamus scelerisque.</p>
      </div>
    </div>
  </div>
</div>


<!-- end of tabs here -->


      </div>



      <!-- End: Listing Detail Wrapper -->

      <!-- Sidebar Start -->
      <div class="col-md-4 col-sm-12">
        <div class="sidebar">
          <!-- Start: Book A Reservation -->


                  <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                      <h4>Request  Safaris</h4>
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
          <!-- End: Book A Reservation -->

          <!-- Start: Opening hour -->

          <!-- End: Opening hour -->




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
