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
<section class="title-transparent page-title" style="background:url(assets/img/breadcrumb/trip.jpg);">
  <div class="container">
    <div class="title-content">
      <h1>Plan Your Trip</h1>
      <div class="breadcrumbs">
        <a href="#">Home</a>
        <span class="gt3_breadcrumb_divider"></span>
        <span class="current">Plan Trip</span>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- ================ End Page Title ======================= -->

<!-- ================ Start Add Listing Section ======================= -->
<section>
  <div class="container">
    <div class="col-md-10 col-sm-12 col-md-offset-1 mob-padd-0">
      <!-- General Information -->
      <div class="add-listing-box general-info mrg-bot-25 padd-bot-30 padd-top-25">
        <div class="listing-box-header">
          <i class="ti-files theme-cl"></i>
          <h3>General Trip Information</h3>
          <p>Tell us some information that you need about your trip</p>
        </div>
        <form>
          <div class="row mrg-r-10 mrg-l-10">
            <div class="col-sm-6">
              <label>Listing Title</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-6">
              <label>Keyword</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-6">
              <label>Category</label>
              <select data-placeholder="Choose Category" class="form-control chosen-select" tabindex="2">
                <option>Select</option>
                <option>Eat & Drink</option>
                <option>Food & Restaurants</option>
                <option>Fitness</option>
                <option>Hospital</option>
                <option>Education</option>
                <option>Sport</option>
              </select>
            </div>
            <div class="col-sm-6">
              <label>Website</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </form>
      </div>
      <!-- End General Information -->

      <!-- Add Location -->
      <div class="add-listing-box add-location mrg-bot-25 padd-bot-30 padd-top-25">
        <div class="listing-box-header">
          <i class="ti-location-pin theme-cl"></i>
          <h3>What do you want to visit </h3>
          <p>Tell us what you are interested in when you travel</p>
        </div>
        <form>
          <div class="row mrg-r-10 mrg-l-10">
            <div class="col-sm-6">
              <label>Address</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-6">
              <label>Temporary Address</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-6">
              <label>City</label>
              <select data-placeholder="Choose City" class="form-control chosen-select" tabindex="2">
                <option>New York</option>
                <option>Los Angeles</option>
                <option>Chicago</option>
                <option>Phoenix</option>
              </select>
            </div>
            <div class="col-sm-6">
              <label>State</label>
              <select data-placeholder="Choose Sate" class="form-control chosen-select" tabindex="2">
                <option>New York</option>
                <option>Los Angeles</option>
                <option>Chicago</option>
                <option>Phoenix</option>
              </select>
            </div>
            <div class="col-sm-6">
              <label>Country</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-6">
              <label>Zip-Code</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </form>
      </div>


      <div class="text-center">
        <a href="#" class="btn theme-btn" title="Submit Listing">Submit Trip</a>
      </div>
    </div>

  </div>
</section>
<!-- ================ End Add Listing Section ======================= -->

@endsection
