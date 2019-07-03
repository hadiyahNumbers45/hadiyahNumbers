@extends('templates.hadiyah')
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Order Details Table with Search Filter</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
  }
  .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px auto;
    border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
  .table-wrapper .btn {
    float: right;
    color: #333;
      background-color: #fff;
    border-radius: 3px;
    border: none;
    outline: none !important;
    margin-left: 10px;
  }
  .table-wrapper .btn:hover {
        color: #333;
    background: #f2f2f2;
  }
  .table-wrapper .btn.btn-primary {
    color: #fff;
    background: #03A9F4;
  }
  .table-wrapper .btn.btn-primary:hover {
    background: #03a3e7;
  }
  .table-title .btn {
    font-size: 13px;
    border: none;
  }
  .table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
  }
  .table-title .btn span {
    float: left;
    margin-top: 2px;
  }
  .table-title {
    color: #fff;
    background: #4b5366;
    padding: 16px 25px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
  }
  .show-entries select.form-control {
        width: 60px;
    margin: 0 5px;
  }
  .table-filter .filter-group {
        float: right;
    margin-left: 15px;
    }
  .table-filter input, .table-filter select {
    height: 34px;
    border-radius: 3px;
    border-color: #ddd;
        box-shadow: none;
  }
  .table-filter {
    padding: 5px 0 15px;
    border-bottom: 1px solid #e9e9e9;
    margin-bottom: 5px;
  }
  .table-filter .btn {
    height: 34px;
  }
  .table-filter label {
    font-weight: normal;
    margin-left: 10px;
  }
  .table-filter select, .table-filter input {
    display: inline-block;
    margin-left: 5px;
  }
  .table-filter input {
    width: 200px;
    display: inline-block;
  }
  .filter-group select.form-control {
    width: 110px;
  }
  .filter-icon {
    float: right;
    margin-top: 7px;
  }
  .filter-icon i {
    font-size: 18px;
    opacity: 0.7;
  }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
    }
  table.table tr th:first-child {
    width: 60px;
  }
  table.table tr th:last-child {
    width: 80px;
  }
    table.table-striped tbody tr:nth-of-type(odd) {
      background-color: #fcfcfc;
  }
  table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
  }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
  table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
  }
  table.table td a:hover {
    color: #2196F3;
  }
  table.table td a.view {
    width: 30px;
    height: 30px;
    color: #2196F3;
    border: 2px solid;
    border-radius: 30px;
    text-align: center;
    }
    table.table td a.view i {
        font-size: 22px;
    margin: 2px 0 0 1px;
    }
  table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
  }
  .status {
    font-size: 30px;
    margin: 2px 2px 0 0;
    display: inline-block;
    vertical-align: middle;
    line-height: 10px;
  }
    .text-success {
        color: #10c469;
    }
    .text-info {
        color: #62c9e8;
    }
    .text-warning {
        color: #FFC107;
    }
    .text-danger {
        color: #ff5b5b;
    }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }
    .pagination li.active a {
        background: #03A9F4;
    }
    .pagination li.active a:hover {
        background: #0397d6;
    }
  .pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }




/* FORM */
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */


/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>
@section('title')
Page title
@endsection
@section('content')
<script type="text/javascript">
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
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

    <button type="submit" cclass="page-item"  ><span> اضافة  </span></button>
    <button type="button" class="page-item" onclick="closeForm()"> إغلاق</button>
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
            <h2>بيانات  <b>المشرفين الميدانيين </b></h2>

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
                      <th></th>
                      <th></th>
                         <th>الموقع </th>
                         <th>الخدمة </th>
                         <th>اسم المشرف الميداني </th>
                         <th> الرقم التعريفي  </th>

            <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
            <td> <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a></td>

                      <td>      <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
<td><span class="status text-success">&bull;</span> Delivered</td>
            <td>Jun 15, 2017</td>
            <td>London</td>
  <td><a href="#"> Michael Holz</a></td>
                        <td>1</td>

                    </tr>
          <tr>

            <td> <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a></td>

                      <td>      <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
<td><span class="status text-info">&bull;</span> Shipped</td>
            <td>Jun 15, 2017</td>
            <td>London</td>
  <td><a href="#"> Michael Holz</a></td>

                        <td>2</td>

                    </tr>



          <tr>
           <td> <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a></td>

                      <td>      <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
<td><span class="status text-danger">&bull;</span> Cancelled</td>
            <td>Jun 15, 2017</td>
            <td>London</td>
  <td><a href="#"> Michael Holz</a></td>
                  <td>2</td>

                    </tr>
          <tr>

            <td> <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a></td>

                      <td>      <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
<td><span class="status text-warning">&bull;</span> Pending</td>
            <td>Jun 15, 2017</td>
            <td>London</td>
  <td><a href="#"> Michael Holz</a></td>
                        <td>2</td>

                    </tr>
               <tr>
            <td> <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a></td>

                      <td>      <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
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
