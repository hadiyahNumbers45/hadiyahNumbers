@extends('templates.hadiyah')
@section('title')
رئيس البرامج
@endsection
@section('content')
<!--
    <div class="superVisorSection">
      <center>
        <button class="btn">استعراض المشرفيين الميدانين</button>
        </br>
        <button class="btn" onclick="document.getElementById('observertable').style.display='block'">استعراض رؤساء البرامج</button>
      </center>
    </div>
    <center  id="observertable">
      <table width="50%" class="prevForms">
        <thead>
          <tr>
            <th>
              تعديل
            </th>
            <th>
              البرنامج
            </th>
            <th>
              الاسم
            </th>
            <th>
              الرقم التعريفي
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <button class="editBtn"><embed type="image/svg+xml" src="/images/edit-3.svg" /></button>
            </td>
            <td>
              ss
            </td>
            <td>
              tedt
            </td>
            <td>
              test
            </td>
          </tr>
        </tbody>
      </table>
    </center>
<br/>
-->
@extends('templates.hadiyah')
@section('title')
رئيس البرامج
@endsection
@section('content')
<script>
$(document).ready(function(){
     document.getElementById('supervisers_section').style.display = "none";
  $('#supervisers').click(function(){
     document.getElementById('supervisers_section').style.display = "block";
    $.ajax({
     type: 'GET', //THIS NEEDS TO BE GET
     url:"{{url('SupervisersInfo')}}",
     success: function (data) {
      $('#supervisers_section').html(data);
         console.log(data)}
  });
})});
</script>
    <div class="superVisorSection">
      <center>
        <button class="btn" onclick="window.location.href ='{{url('GUIObserverInfo')}}';">استعراض المشرفيين الميدانين</button>
        </br>
        <button class="btn" id="supervisers" >استعراض رؤساء البرامج</button>
      </center>
    </div>
    <center  id="supervisers_section">

    </center>
<br/>
@endsection

@endsection
