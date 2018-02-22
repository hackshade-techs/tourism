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
      <h1>Get In Touch</h1>
      <div class="breadcrumbs">
        <a href="#">Home</a>
        <span class="gt3_breadcrumb_divider"></span>
        <span class="current">Contact US</span>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- ================ End Page Title ======================= -->

<!-- ================ Office Address ======================= -->
<section class="padd-0">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 col-sm-12 translateY-60">
      <div class="col-md-6 col-sm-6">
        <div class="detail-wrapper text-center padd-top-40 mrg-bot-10 padd-bot-40 light-bg">
          <i class="theme-cl font-30 ti-location-pin"></i>
          <h4>India Office</h4>
          Sco 52, Sector 48, Near Gurudwara<br>
          Chandigarh (258458)
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="detail-wrapper text-center padd-top-40 mrg-bot-10 padd-bot-40 light-bg">
          <i class="theme-cl font-30 ti-location-pin"></i>
          <h4>Uk Office</h4>
          Sco 52, Sector 48, Near Gurudwara<br>
          Chandigarh (258458)
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================ End Office Address ======================= -->

<!-- ================ Fill Forms ======================= -->
<section class="padd-top-0">
  <div class="container">
    <div class="col-md-6 col-sm-6">
      @include('includes.success')
      @include('includes.error')
      <form action="{{ route('contacts.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label>Name:</label>
          <input type="text" name="name" class="form-control" placeholder="Name" />
        </div>
        <div class="form-group">
          <label>Email:</label>
          <input type="email" name="email" class="form-control" placeholder="Email" />
        </div>
        <div class="form-group">
          <label>Message:</label>
          <textarea class="form-control height-120" name="message" placeholder="Message"></textarea>
        </div>
        <div class="form-group">
          <button class="btn theme-btn">Send Request</button>
        </div>
      </form>
    </div>
    <div class="col-md-6 col-sm-6">
      <div id="map_full_width_one" class="full-width" style="height:400px;"></div>
    </div>
  </div>
</section>


@endsection
