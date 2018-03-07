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
        <h1>Accomodation</h1>
        <div class="breadcrumbs">
          <a href="{{ url('/') }}">Home</a>
          <span class="gt3_breadcrumb_divider"></span>
          <span class="current">Accomodation</span>
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!-- ================ End Page Title ======================= -->

  <!-- ===================== Blogs In Grid ===================== -->
  <section>
    <div class="container">
      @foreach ($accomodations->chunk(3) as $chunk)
        <div class="row">
          @foreach ($chunk as $accomodation)
            <div class="col-md-4 col-sm-6">
            <div class="blog-box blog-grid-box">
              <div class="blog-grid-box-img">
                <img src="{{ asset($accomodation->image) }}" class="img-responsive" alt="" />
              </div>

              <div class="blog-grid-box-content" style="height: 420px;">
                <h4>{{ $accomodation->title }}</h4>
                <p>{!! substr($accomodation->description, 0, 500) !!}</p>
              </div>

            </div>
          </div>
          @endforeach
        </div>
      @endforeach
      <div class="row">
				<div class="col-md-12">
					<div class="bs-example">
						{{ $accomodations->links() }}
					</div>
				</div>
			</div>
    </div>
  </section>
  <!-- ===================== End Blogs In Grid ===================== -->

@endsection
