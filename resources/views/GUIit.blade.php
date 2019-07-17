@extends('templates.hadiyah')
@section('title')
هدية الحاج والمعتمر - مشرف البرنامج
@endsection
@section('content')
<section class="site-section pt-5" >
     <div class="container" style="text-align: right;">
       <div dir="rtl">

    </br>
          <h1>  فتح حساب </h1>

    </br>
      <form method="post" action="/newAccount">
         {{method_field('PATCH')}}
        {{csrf_field()}}

           الاسم
         <input type="text" name="f_name">
         اسم الاب
          <input type="text" name="s_name">
          اسم العائلة
           <input type="text" name="l_name">
</br>
         الايميل
        <input type="email" name="email">
</br>
         المسمى الوظيفي
       </br>
        <input type="radio" name="jobName" value="observer">  مشرف ميداني
        <input type="radio" name="jobName" value="supervisor"> مشرف برنامج
        <input type="radio" name="jobName" value="admin"> رئيس البرامج

</br>

   كلمة المرور
 </br>
          <input type="password" name="password">

</br>
  <input type="submit" name="">
</form>
@if(isset($text0))
{{$text0}}
@endif

   <br/>
   <br>

   <h1>  البحث والتعديل على بيانات الموظفيين </h1>

   </br>
   <form method="post" action="/show">

 {{csrf_field()}}

      <input type="search" id="site-search" name="Search">

           <input type="submit" name="" value="البحث">

         <br>
                 <br>

                 </form>
@if(isset($text))
{{$text}}
@endif


@if(isset($user))



<form method="post" action="/update/{{$user['id']}}">
   {{method_field('PATCH')}}
{{csrf_field()}}


<table>
<tr>
      <td>اسم الموظف: </td>
      <td>{{$user['f_name'].' '.$user['s_name'].' '.$user['l_name'] }} </td>
</tr>
<tr>
      <td> الرقم الوظيفي:</td>
      <td>{{$user['id']}} </td>
</tr>

<tr>
      <td>  المسمى الوظيفي: </td>
      <td>
        <?php
        if(  substr ( $user['id'] ,0,2 ) == 11 ){
        ?>
        <input type="radio" name="jobName" value="observer">  مشرف ميداني
        <input type="radio" name="jobName" value="supervisor"> مشرف برنامج
        <input type="radio"  name="jobName" value="admin" checked="checked" > رئيس البرامج

      <?php
        }elseif(  substr ( $user['id'] ,0,2 ) == 12 ){
          ?>
          <input type="radio" name="jobName" value="observer">  مشرف ميداني
          <input type="radio" name="jobName" value="supervisor" checked="checked" > مشرف برنامج
          <input type="radio" name="jobName" value="admin" > رئيس البرامج
      <?php
        }elseif(  substr ( $user['id'] ,0,2 ) == 13 ){
          ?>
          <input type="radio" name="jobName" value="observer" checked="checked" >  مشرف ميداني
          <input type="radio" name="jobName" value="supervisor"> مشرف برنامج
          <input type="radio" name="jobName" value="admin" > رئيس البرامج
        <?php
        }
        ?>

      </td>

</tr>

<tr>
     <td> الايميل: </td>
    <td> <input type="email" name="email" value="{{$user['email']}}"> </td>

</tr>

</table>
<br>

   </br>
   <input type="submit" name="update" value="التعديل" >

 </form>
</br>

 <form  method="post" action="/delete/{{$user['id']}}" >

   {{ method_field('PATCH') }}
   {{csrf_field()}}

   <input type="submit" name="delete" value="حذف الموظف" >

 </form>



 @endif

<br>
<br>
<br>


</div>




                 </div>
         </div>
   </section>
@endsection
