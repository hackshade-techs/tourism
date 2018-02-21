<ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
  <li><a href="{{ url('/') }}" >Home</a></li>
  <li><a href="{{ url('/about') }}" >About</a></li>




  <li class="dropdown">
    <a href="login.html" class="dropdown-toggle" data-toggle="dropdown">Safaris Africa</a>
    <ul class="dropdown-menu animated fadeOutUp">
      <li><a href="add-listing.html">Uganda Experience</a></li>
      <li><a href="listing-detail.html">Rwanda Experience</a></li>
      <li><a href="listing-detail.html">Tanzania Experience</a></li>


    </ul>
  </li>

  <li class="dropdown">
    <a href="login.html" class="dropdown-toggle" data-toggle="dropdown">Explore</a>
    <ul class="dropdown-menu animated fadeOutUp">
      <li><a href="{{ url('/plantrip') }}">Plan Your Trip</a></li>
      <li><a href="{{ url('/accomodation') }}">Accomodation</a></li>

      <li><a href="{{ url('/transport') }}">Transport</a></li>



    </ul>
  </li>
    <li><a href="{{ url('/scenery') }}" >Scenery</a></li>
  <li><a href="{{ url('/contact') }}" >Contact</a></li>


</ul>
<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#signup">Sign In</a></li>
</ul>
