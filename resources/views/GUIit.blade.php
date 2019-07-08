@extends('templates.hadiyah')
@section('title')
هدية الحاج والمعتمر - مشرف البرنامج
@endsection
@section('content')
<section class="site-section pt-5" >
     <div class="container" style="text-align: right;">
       <div dir="rtl">
      //asayel 5/11/1440 at 11:50am
      <br/>
            فتح حساب

    </br>
      <form method="post" action="test">
        {{csrf_field()}}
           الاسم
         <input type="text" name="f_name">
         اسم الاب
          <input type="text" name="s_name">
          اسم العائلة
           <input type="text" name="l_name">

         الايميل
        <input type="text" name="email">

         المسمى الوظيفي
       </br>
         <input type="radio" name="jobName" value="observer">  مشرف ميداني
<input type="radio" name="jobName" value="supervisor"> مشرف برنامج
<input type="radio" name="jobName" value="admin"> رئيس البرامج

</br>

موقع الموظف
</br>
 <input type="text" name="location">
</br>
   كلمة المرور
   <br/>
          <input type="password" name="password">


  <input type="submit" name="">
</form>
</div>
   <br/>
   <br>
                 </div>
         </div>
   </section>
@endsection
