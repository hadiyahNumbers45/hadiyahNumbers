@extends('templates.hadiyah')
@section('title')
رئيس البرامج
@endsection
@section('content')
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
@endsection
