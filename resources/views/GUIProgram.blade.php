@extends('templates.hadiyah')
@section('title')
رئيس البرامج
@endsection
@section('pageTitle')
برنامج
@endsection
@section('content')
  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="4"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/hadiyah2.png" alt="هدية في صور" width="1100px" height="250px">
      </div>
      <div class="carousel-item">
        <img src="images/hadiyah1.png" alt="هدية في صور" width="1100px" height="250px">
      </div>
      <div class="carousel-item">
        <img src="images/hadiyah4.png" alt="هدية في صور" width="1100px" height="250px">
      </div>
      <div class="carousel-item">
        <img src="images/hadiyah3.png" alt="هدية في صور" width="1100px" height="250px">
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

@endsection
