@extends('templates.hadiyah')
@section('title')
رئيس البرامج
@endsection
@section('content')
  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/img_3.jpeg" alt="Los Angeles" width="1100" height="250">
      </div>
      <div class="carousel-item active">
        <img src="images/hadiyah1.png" alt="Los Angeles" width="1100" height="250">
      </div>
      <div class="carousel-item">
        <img src="images/img_1.jpg" alt="Chicago" width="1100" height="250">
      </div>
      <div class="carousel-item">
        <img src="images/img_2.jpg" alt="New York" width="1100" height="250">
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
