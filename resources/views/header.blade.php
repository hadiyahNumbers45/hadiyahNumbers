
<!DOCTYPE html>
<html>
<head>
  <style>
  body{
font-family:Roboto;
}

.menu
{
background-color: black;
border-bottom: 4px solid #4f5467;
width:100%;
height: auto;
padding: 0 10px;
position: fixed;
margin: 0px;
z-index: 1;
opacity: 0.9;
}

.menu  .navbar-nav > .active > a
{
background-color : #4f5467;
color: white;
font-weight: bold;
}

.menu  .navbar-nav >  li >  a
{
font-size: 13px;
color: white;
padding: 10px 35px;

}
.menu  .navbar-nav >  li >  a:hover
{
background-color: #4f5467;
}

.navbar-header {
padding: 10px;
}
.navbar-header > a {
font-family: 'Ubuntu Condensed', sans-serif;
padding: 0px;
margin: 0px;
text-decoration: none;
color: white;
font-size: 13px;
padding: 5px 3px;
}
.navbar-header > a:hover
{
text-decoration: none;
color: #04A3ED;
}
  </style>
  <title> footer&header </title>
</head>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<header>
<!--header top-->
<div class="menu">
    <div class="container-fluid">
    <div class="navbar-header">
      <a href="#"><span class="glyphicon glyphicon-user"></span> Email: .... </a>
      <a href="#"><span class="glyphicon glyphicon-phone"></span> Mobile: .... </a>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">

        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> تسجيل الدخول</a></li>
      </ul>
    </div>
  </div>
</div>
<!--end Header-->
</header>
