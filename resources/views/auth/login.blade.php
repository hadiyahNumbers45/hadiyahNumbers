
@extends('templates.hadiyah')
@section('title')
تسجيل الدخول
@endsection
@section('content')
<form class="modal-content animate" method='post' action="/signin">

   {{csrf_field()}}
  <div class="imgcontainer">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <img src="/images/avatar.png" alt="Avatar" class="avatar">
  </div>


  <div class="container">
    <label for="uname"><b> اسم المستخدم</b></label>
    <input type="text" placeholder="اسم المستخدم" name="userid" required>

    <br>

    <label for="psw"><b>كلمة المرور</b></label>
    <input type="password" placeholder="كلمة المرور" name="userpass" required>
<br>
    <button type="submit">موافق</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> تذكّرني لاحقًا
    </label>
  </div>


  <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">إلغاء</button>
    <span class="psw">نسيت <a href="" onclick="document.getElementById('id02').style.display='block'">كلمة المرور؟</a></span>
  </div>
