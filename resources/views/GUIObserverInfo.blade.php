@extends('templates.hadiyah')
@section('title')
observer informaiton
@endsection
@section('content')
<script type="text/javascript">
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<div class="form-popup" id="myForm">
    <form method="POST" action="GUIObserverInfoController" class="form-container" autocomplete="off" >
    <h1>إضافة مشرف جديد </h1>
    <label for="idd"><b>الرقم التعريفي</b></label>
    <input type="text"  name="idd" required>
    <label for="name"><b>الاسم الاول </b></label>
    <input type="text"  name="name" required>
    <label for="name"><b>الاسم الثاني </b></label>
    <input type="text" name="name" required>
    <label for="name"><b>الاسم الثالث </b></label>
    <input type="text"  name="name" required>
    <label for="serv"><b>الخدمة </b></label>
    <input type="text" name="serv" required>
    <div class="filter-group">
      <label>الموقع</label>
      <select class="form-control">
        <option>All</option>
        <option>Berlin</option>
        <option>London</option>
        <option>Madrid</option>
        <option>New York</option>
        <option>Paris</option>
      </select>
    </div>
    <button type="submit" cclass="page-item"  ><span> اضافة  </span></button>
    <button type="button" class="page-item" onclick="closeForm()">إغلاق </button>
  </form>
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
            <h3>بيانات  <b>المشرفين الميدانيين </b></h3>
          </div>
          <div class="col-sm-8">
            <a href="#" class="btn btn-primary"class="open-button" onclick="openForm()"><i class="material-icons">&#xE147;</i> <span> اضافة مشرف جديد </span></a>
            <a href="#" class="btn btn-info"><i class="material-icons">&#xE24D;</i> <span>Export to Excel</span></a>
          </div>
                </div>
            </div>
      <div class="table-filter">
        <div class="row">
                    <div class="col-sm-3">
            <div class="show-entries">
              <span>Show</span>
              <select class="form-control">
                <option>5</option>
                <option>10</option>
                <option>15</option>
                <option>20</option>
              </select>
              <span>entries</span>
            </div>
          </div>
          <div class="col-sm-9">
            <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
            <div class="filter-group">
              <label>الرقم التعريفي </label>
              <input type="text" class="form-control">
            </div>
            <div class="filter-group">
              <label>الموقع</label>
              <select class="form-control">
                <option>All</option>
                <option>Berlin</option>
                <option>London</option>
                <option>Madrid</option>
                <option>New York</option>
                <option>Paris</option>
              </select>
            </div>
            <div class="filter-group">
              <label>الخدمة </label>
              <select class="form-control">
                <option>Any</option>
                <option>Delivered</option>
                <option>Shipped</option>
                <option>Pending</option>
                <option>Cancelled</option>
              </select>
            </div>
            <span class="filter-icon"><i class="fa fa-filter"></i></span>
                    </div>
                </div>
      </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                         <th colspan="3">الموقع </th>
                         <th>الخدمة </th>
                         <th>اسم المشرف الميداني </th>
                         <th> الرقم التعريفي  </th>
                         <th>#</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                       <td><a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a></td>
                       <td><a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                       <td><span class="status text-success">&bull;</span> Delivered</td>
                       <td>Jun 15, 2017</td>
                       <td>London</td>
                       <td><a href="#"> Michael Holz</a></td>
                        <td>1</td>
                  </tr>
                </tbody>
            </table>
      <div class="clearfix">

                <ul class="pagination">
                    <li class="page-item disabled"><a href="#"> التالي </a></li>
                    <li class="page-item"><a href="#" class="page-link">6</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item active"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">السابق </a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
