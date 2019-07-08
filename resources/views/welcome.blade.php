@extends('templates.hadiyah')
@section('title')
البرنامج
@endsection
@section('content')
<section class="site-section pt-5">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/img_2.jpg" alt="Los Angeles" width="1100" height="300">
      </div>
      <div class="carousel-item">
        <img src="images/img_1.jpg" alt="Chicago" width="1100" height="300">
      </div>
      <div class="carousel-item">
        <img src="images/img_3.jpg" alt="New York" width="1100" height="300">
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
     <div class="container" style="text-align: right;" >
      <h2> برامجنا</h2>
      <table style="width: 100%">
     <tr>
       <td>
            <a href="program with sign.html" class="a-block d-flex align-items-center height-md"style="background-image: url('images/2.png'); "  ></a>
           </td>
       <td>
           <a href="program with sign.html" class="a-block d-flex align-items-center height-md"style="background-image: url('images/2.png'); "  ></a>
       </td>
       <td>
           <a href="program with sign.html" class="a-block d-flex align-items-center height-md"style="background-image: url('images/2.png'); "  ></a>
       </td>
       <td>
           <a href="program with sign.html" class="a-block d-flex align-items-center height-md"style="background-image: url('images/2.png'); "  ></a>
       </td>

       <td>
           <a href="program with sign.html" class="a-block d-flex align-items-center height-md"style="background-image: url('images/2.png'); "  ></a>
       </td>
     </tr>
   </table>
     </div>
<br/>
<br/>
     <div class="container">
          <table style="width: 100%">
         <tr>
             <td> <img src="images/img_.png"></td>
            <td><h2>
           احصائيات المستفيدين من البرنامج </h2></td>
         </tr>
       </table>
     </div>
   </section>
   <!-- END section -->
@endsection
