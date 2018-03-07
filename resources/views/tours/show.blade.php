@extends('layouts.app')

@section('title')

@endsection

@section('keywords')

@endsection

@section('desc')

@endsection

@section('css-date')
<!-- Fancybox css -->
<link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">

<!-- Time Dropper -->
  <link href="{{ asset('assets/plugins/time-dropper/timedropper.css') }}" rel="stylesheet">

<!-- Rating Css -->
  <link href="{{ asset('assets/plugins/rating-js/jquery-rating.css') }}" rel="stylesheet">

<!-- Date Dropper -->
  <link href="{{ asset('assets/plugins/date-dropper/datedropper.css') }}" rel="stylesheet">

@endsection

@section('css')
 <style media="screen">
   .tour-color {
     color: #334e6f;
     font-size: 20px;
     font-weight: bolder;
   }
 </style>
@endsection

@section('content')

  <div class="clearfix"></div>


  <!-- ================ Listing Detail Basic Information ======================= -->
  <section class="detail-section" style="background:url({{ asset($tour->image) }});">
    <div class="overlay" style="background-color: rgb(36, 36, 41); opacity: 0.5;"></div>
    <div class="profile-cover-content">
      <div class="container">
        <div class="cover-buttons">
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
                <h3>{{ $tour->title }}<span class="mrg-l-5 category-tag"><a href="{{ url('tours/'.$tour->category->slug) }}">{{ $tour->category->name }}</a></span></h3>
              </div>
            </div>
          </div>

          <div class="detail-wrapper">
            <div class="detail-wrapper-body">
              <div class="listing-title-bar tour-color notice notice-danger">
                @foreach ($tour->rates as $rate)
                  <p class="tour-color">
                    <i class="fa fa-money"></i> ${{ $rate->price }}
                    <i class="fa fa-user"></i> {{ $rate->person }} Person
                    <i class="fa fa-calendar"></i> {{ $rate->days }} Days
                  </p>
                @endforeach
              </div>
            </div>
          </div>

          <div class="detail-wrapper">
            <div class="detail-wrapper-header">
              <h4>About Tour</h4>
            </div>
            <div class="detail-wrapper-body">
              {!! $tour->content !!}
            </div>
          </div>

          <div class="detail-wrapper">
            <div class="detail-wrapper-header">
              <h4>Highlights</h4>
            </div>
            <div class="detail-wrapper-body">
              <ul class="detail-check">
                @foreach ($tour->tags as $tag)
                  <li>{{ $tag->name }}</li>
                @endforeach
              </ul>
            </div>
          </div>

          <div class="detail-wrapper">
            <div class="detail-wrapper-header">
              <h4>Location</h4>
            </div>
            <div class="detail-wrapper-body">
              <div id="map" class="full-width" style="height:400px;"></div>
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
          @include('includes.tour-sidebar')
        </div>
          <!-- End: Sidebar Start -->
      </div>
    </div>
  </section>
  <!-- ================ Listing Detail Full Information ======================= -->

@endsection

@section('js-date')

  <!-- fancybox Js -->
  <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>

  <!-- Time dropper js-->
  <script src="{{ asset('assets/plugins/time-dropper/timedropper.js') }}"></script>

  <!-- Date dropper js-->
  <script src="{{ asset('assets/plugins/date-dropper/datedropper.js') }}"></script>

  <!-- Bootstrap Count -->
  <script src="{{ asset('assets/plugins/jqueryadd/jqueryadd-count.js') }}"></script>

  <!-- Slick Slider js-->
  <script src="{{ asset('assets/plugins/slick-slider/slick.js') }}"></script>

  <!-- counter js-->
  <script src="{{ asset('assets/plugins/jquery-counter/js/waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery-counter/js/jquery.counterup.min.js') }}"></script>

  <!-- Rating js -->
  <script src="{{ asset('assets/plugins/rating-js/jquery-rating.js') }}"></script>


@endsection

@section('js')

  <script>
    function initMap() {
      var uluru = {lat: {{ $tour->latitude }}, lng: {{ $tour->longitude }}};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJbF37D8W_yvZ6t8nSAtrRxKTrOr5fHm0&callback=initMap">
  </script>

  <script type="text/javascript">
			$("[data-fancybox]").fancybox({
				// Options will go here
			});
		</script>

		<!-- Date Dropper Script-->
		<script>
			$('#reservation-date').dateDropper();
		</script>

		<!-- Time Dropper Script-->
		<script>
			this.$('#reservation-time').timeDropper({
				setCurrentTime: false,
				meridians: true,
				primaryColor: "#e8212a",
				borderColor: "#e8212a",
				minutesInterval: '15'
			});
		</script>

		<!-- Rating Script -->
		<script>
			 $('.rating-opt').start(function(cur){
				console.log(cur);
				 $('#info').text(cur);
			});
		</script>


@endsection
