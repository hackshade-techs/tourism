@extends('layouts.app')

@section('title')

@endsection

@section('keywords')

@endsection

@section('desc')

@endsection

@section('content')

<div class="clearfix"></div>


<!-- ================ Start Page Title ======================= -->
<section class="title-transparent page-title" style="background:url(assets/img/title-bg.jpg);">
  <div class="container">
    <div class="title-content">
      <h1>{{ $transport->title }}</h1>
      <div class="breadcrumbs">
        <a href="{{ url('/') }}">Home</a>
        <span class="gt3_breadcrumb_divider"></span>
        <span class="current">Transport</span>
      </div>
    </div>
  </div>
</section>


<!-- ================ Listing Detail Basic Information ======================= -->
<!-- <section class="detail-section" style="background:url(assets/img/slider-2.jpg);">
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
          <img src="{{ $transport->image }}" class="img-responsive img-circle" alt="" />
        </div>
        <div class="listing-owner-detail">
          <h4>Lucy Lukie</h4>
          <span class="theme-cl">Web Designer</span>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- ================ End Listing Detail Basic Information ======================= -->

<!-- ================ Listing Detail Full Information ======================= -->
<section class="list-detail">
  <div class="container">
    <div class="row">
      <!-- Start: Listing Detail Wrapper -->
      <div class="col-md-8 col-sm-8">


        <div class="detail-wrapper">
          <div class="detail-wrapper-header">
            <h4>{{ $transport->title }}</h4>
          </div>
          <div class="detail-wrapper-body">

            <p>{{ $transport->description }}</p>
          </div>
        </div>







      </div>
      <!-- End: Listing Detail Wrapper -->

      <!-- Sidebar Start -->
      <div class="col-md-4 col-sm-12">
        <div class="sidebar">
          <!-- Start: Book A Reservation -->
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
                <center>  <button type="button" class="btn theme-btn">Book Tranport Means</button></center>
                </div>
              </div>
            </div>
          </div>
          <!-- End: Book A Reservation -->





          <!-- Start: Listing Location -->
          <div class="widget-boxed">
            <div class="widget-boxed-header">
              <h4><i class="ti-location-pin padd-r-10"></i>Qick Reachout</h4>
            </div>
            <div class="widget-boxed-body">
              <div class="side-list no-border">
                <ul>
                  <li><i class="ti-location-pin padd-r-10"></i>Uganda</li>
                  <li><i class="ti-mobile padd-r-10"></i>0706382817</li>
                  <li><i class="ti-email padd-r-10"></i>suppoer@royalexperience.com</li>
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
