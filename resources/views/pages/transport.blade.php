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
      <h1>Transport </h1>
      <div class="breadcrumbs">
        <a href="#">Home</a>
        <span class="gt3_breadcrumb_divider"></span>
        <span class="current">Transport</span>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- ================ End Page Title ======================= -->

<!-- ================ Listing In Grid Style ======================= -->
<section class="padd-top-0 padd-bot-0">
  <div class="container">
    <div class="row">
      <div class="white-box white-shadow padd-top-30 padd-bot-30 translateY-60">
        <h3 class="text-center">Search For Transport</h3>
        <form class="form-verticle">
          <div class="col-md-4 col-sm-4 no-padd">
            <input type="text" class="form-control left-radius" placeholder="Keywords..">
          </div>
          <div class="col-md-3 col-sm-3 no-padd">
            <input type="text" class="form-control" placeholder="Location..">
          </div>
          <div class="col-md-3 col-sm-3 no-padd">
            <select class="selectpicker form-control" data-live-search="true">
              <option data-tokens="ketchup mustard">Choose Category</option>
              <option data-tokens="mustard">Burger, Shake and a Smile</option>
              <option data-tokens="frosting">Sugar, Spice and all things nice</option>
            </select>
          </div>
          <div class="col-md-2 col-sm-2 no-padd">
            <button type="button" class="btn theme-btn normal-height full-width">Search</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ================ Listing In Grid Style ======================= -->
<section class="padd-top-20">
  <div class="container">
    <div class="row">
      <!-- Start Sidebar -->
      <div class="col-md-4 col-sm-12">
        <div class="sidebar">
          <!-- Start: Search By Price -->

          <!-- End: Search By Price -->

          <!-- Start: Latest Listing -->
          <div class="widget-boxed">
            <div class="widget-boxed-header">
              <h4><i class="ti-check-box padd-r-10"></i>Latest Transports</h4>
            </div>
            <div class="widget-boxed-body padd-top-5">
              @foreach($transports as $transport)
              <div class="side-list">
                <ul class="listing-list">

                  <li>
                    <a href="listing-detail.html">
                      <div class="listing-list-img">
                        <img src="{{ $transport->image }}" class="img-responsive" alt="">
                      </div>
                    </a>
                    <div class="listing-list-info">
                      <h5><a href="#" title="Listing">{{ $transport->title }}</a></h5>
                      <div class="listing-post-meta">
                        
                        {{ \Carbon\Carbon::parse($transport->created_at )->format('d/m/Y')}}
                      </div>
                    </div>
                  </li>






                </ul>
              </div>
              @endforeach
            </div>

          </div>
          <!-- End: Latest Listing -->



          <!-- Start: Help & Support -->
          <div class="widget-boxed">
            <div class="widget-boxed-body padd-top-40 padd-bot-40 text-center">
              <div class="help-support">
                <i class="ti-headphone-alt font-60 theme-cl mrg-bot-15"></i>
                <p>Have Any Question? Mail Us</p>
                <h4 class="mrg-top-0">inquiry@royalexperience.com</h4>
              </div>
            </div>
          </div>
          <!-- End: Help & Support -->
        </div>
      </div>
      <!-- End Start Sidebar -->

      <!-- Start All Listing -->
      <div class="col-md-8 col-sm-12">
        <!-- Filter option -->

        <!-- End Filter option -->

        <div class="row mrg-0">
          @include('composers.transport')




      <!-- End All Listing -->
    </div>
    <!-- Start Pagination -->
    <div class="row">
      <div class="col-md-12">
        <div class="bs-example">
          <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Pagination -->
  </div>
</section>
<!-- ================ End Listing In Grid Style ======================= -->
@endsection
