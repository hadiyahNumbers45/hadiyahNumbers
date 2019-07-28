@extends('templates.hadiyah')
@section('title')
رئيس البرامج
@endsection
@section('content')

<section class="site-section pt-5" >
     <div class="container" style="text-align: right;">
       <div dir="rtl">


<div class="serv">
	  <h2> خدمات البرنامج </h2><br>
	  <div><p class="info"><img src="images/picStar.png" alt="picture" style="width:90px;height:90px;margin-right:15px;"><button class="btn" onclick="">بيانات المشرفين الميدانيين</button>
	  إفطار صائم <br>... وصف مبسط عن الخدمة</p></p></div>

	  <div class="subServ"><p class="info"><img src="images/picStar.png" alt="picture" style="width:90px;height:90px;margin-right:15px;"><button class="btn" onclick="">بيانات المشرفين الميدانيين</button>
	  السحور <br>... وصف مبسط عن الخدمة</p></p></div>

	  <div class="subServ"><p class="info"><img src="images/picStar.png" alt="picture" style="width:90px;height:90px;margin-right:15px;"><button class="btn" onclick="">بيانات المشرفين الميدانيين</button>
	  باقة السقيا <br>... وصف مبسط عن الخدمة</p></p></div>

	  <div class="subServ"><p class="info"><img src="images/picStar.png" alt="picture" style="width:90px;height:90px;margin-right:15px;"><button class="btn" onclick="">بيانات المشرفين الميدانيين</button>
	  وجبة إطعام <br>... وصف مبسط عن الخدمة</p></p></div>
	</div>
<!--######## END PROGRAM SERVICES ########-->

<!--######## ARCHIVE ########-->
	<div class="arc">
	  <h2> أرشيف النماذج </h2><br>
	  <div class="dropdown">
		<button class="dropbtn">اسم الخدمة</button>
		<div class="dropdown-content">
		  <a href="#">إفطار صائم</a>
		  <a href="#">السحور</a>
		  <a href="#">وجبة إطعام</a>
		</div>
	  </div>
	</div>

<!--######## END ARCHIVE ########-->
    <div class="container">
          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">
                      <div class="col-sm-4">
              <h3><b> add new material </b></h3>
            </div>
                  </div>
              </div>
        <div class="table-filter">
          <div class="row">
                      <div class="col-sm-3">
            </div>

              <div class="col-sm-9">

              <form action="/addMaterials" method="POST">
                  {{method_field('PATCH')}}
                {{ csrf_field() }}

              <div class="filter-group">

                <input type="text" class="form-control" name="materials">
                  <label> اضافة مادة غير موجودة </label>
              </div>

              <button >اضافة</i></button>
              </form>
              @if(isset($text))
              {{$text}}
              @endif

                      </div>
                  </div>
        </div>
              <table class="table table-striped table-hover">
                  <thead>
                      <tr>
                        <th></th>
                        <th></th>
                           <th> </th>
                           <th> </th>
                           <th> المادة </th>
                           <th> اختيار  </th>

                      </tr>
                  </thead>



                  @if(isset($materials))

<form action="/add-service-materials" method="post">
  {{method_field('PATCH')}}
{{ csrf_field() }}
                  @foreach ($materials as $material)
                  <tr>

                      <td></td>

                      <td></td>

                      <td></td>

                      <td>{{$material->name}}</td>

                      <td><input type="checkbox" name="material_list[]" value="{{$material['id']}}"></td>

                       <td></td>
                 </tr>

                  @endforeach

                  @endif



              </table>
<h5>    لاضافة المواد لخدمة معينة قم باختيار المواد وثم اختيار الخدمة المناسبة واضغط على اضافة*  </h5>
</br>
                <select name="serviceID">

                <option value="service">  اختيار الخدمة </option>
              @if(isset($services))

              @foreach ($services as $service)
                <option value="{{$service['id']}}">{{$service['name']}} </option>
              @endforeach

              @endif
</select>   الخدمة

<input class='btn' type="submit" name="" value="اضافة">
</br>
</br>
@if(isset($msg))
{{$msg}}
@endif

             </form>





          </div>
      </div>


</div>
</div>
</section>



@endsection
