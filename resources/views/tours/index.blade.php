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
      <h1>Vertical With Sidebar</h1>
      <div class="breadcrumbs">
        <a href="#">Home</a>
        <span class="gt3_breadcrumb_divider"></span>
        <span class="current">Vertical With Sidebar</span>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- ================ End Page Title ======================= -->

<!-- ================ Listing In Vertical style with Sidebar ======================= -->
<section class="show-case">
  <div class="container">
    <div class="row">
      <!-- Start Sidebar -->
      <div class="col-md-4 col-sm-12">
        <div class="sidebar">
          <!-- Start: Search By Price -->
          <div class="widget-boxed">
            <div class="widget-boxed-header">
              <h4><i class="ti-money padd-r-10"></i>Top Categories</h4>
            </div>
            <div class="widget-boxed-body padd-top-10 padd-bot-0">
              <div class="side-list">
                <ul class="price-range">
                  <li>
                    <span class="custom-checkbox d-block">
                      <input type="checkbox" id="free">
                      <label for="free"></label>
                      Free Listing
                    </span>
                  </li>
                  <li>
                    <span class="custom-checkbox d-block">
                      <input type="checkbox" id="regular">
                      <label for="regular"></label>
                      Regular $40 - $100
                    </span>
                  </li>
                  <li>
                    <span class="custom-checkbox d-block">
                      <input type="checkbox" id="premium">
                      <label for="premium"></label>
                      Premium $120 - $200
                    </span>
                  </li>
                  <li>
                    <span class="custom-checkbox d-block">
                      <input type="checkbox" id="standard">
                      <label for="standard"></label>
                      Standard $200 - $500
                    </span>
                  </li>
                  <li>
                    <span class="custom-checkbox d-block">
                      <input type="checkbox" id="platinum">
                      <label for="platinum"></label>
                      Platinum $1000 - $10,000
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End: Search By Price -->

          <!-- Start: Latest Listing -->
          <div class="widget-boxed">
            <div class="widget-boxed-header">
              <h4><i class="ti-check-box padd-r-10"></i>Latest Listing</h4>
            </div>
            <div class="widget-boxed-body padd-top-5">
              <div class="side-list">
                <ul class="listing-list">
                  <li>
                    <a href="listing-detail.html">
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
                    <a href="listing-detail.html">
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
                    <a href="listing-detail.html">
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
                    <a href="listing-detail.html">
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

          <!-- Start: Help & Support -->
          <div class="widget-boxed">
            <div class="widget-boxed-body padd-top-40 padd-bot-40 text-center">
              <div class="help-support">
                <i class="ti-headphone-alt font-60 theme-cl mrg-bot-15"></i>
                <p>Have Any Question? Mail Us</p>
                <h4 class="mrg-top-0">Hello@listinghub.com</h4>
              </div>
            </div>
          </div>
          <!-- End: Help & Support -->
        </div>
      </div>
      <!-- End Start Sidebar -->

      <!-- Start Vertical Listing -->
      <div class="col-md-8 col-sm-12">
        @foreach ($category->articles as $tour)
          <div class="verticleilist listing-shot">
            <div class="listing-badge now-open">Now Open</div>
            <a class="listing-item" href="listing-detail.html">
              <div class="listing-shot-img">
                <img src="assets/img/category/art.jpg" class="img-responsive" alt="">
                <span class="approve-listing"><i class="fa fa-check"></i></span>
              </div>
            </a>
            <div class="verticle-listing-caption">
              <span class="like-listing"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
              <div class="listing-shot-caption">
                <h4>Art & Design</h4>
                <p class="listing-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
              </div>
              <div class="listing-shot-info">
                <div class="row extra">
                  <div class="col-md-12">
                    <div class="listing-detail-info">
                      <span><i class="fa fa-map-marker" aria-hidden="true"></i>Bishop Avenue, New York</span>
                      <span><i class="fa fa-phone" aria-hidden="true"></i> 807-502-5867</span>
                      <span><i class="fa fa-globe" aria-hidden="true"></i> www.mysitelink.com</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="listing-shot-info rating">
                <div class="row extra">
                  <div class="col-md-7 col-sm-7 col-xs-6">
                    <i class="color fa fa-star" aria-hidden="true"></i>
                    <i class="color fa fa-star" aria-hidden="true"></i>
                    <i class="color fa fa-star" aria-hidden="true"></i>
                    <i class="color fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span>27 Reviews</span>
                  </div>
                  <div class="col-md-5 col-sm-5 col-xs-6 pull-right">
                    <a href="{{ url('/single-safaris') }}" class="detail-link">Click Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach


      <!-- End Vertical Listing -->
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
<!-- ================ End Listing In Vertical style with Sidebar ======================= -->

@endsection
