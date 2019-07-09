<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/slide.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Theme Style -->
  <link rel="stylesheet" href="css/projectStyle.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script type = "text/javascript" src = "js/projectStyle.js" ></script>
  <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://static.wixstatic.com/media/3b6b39_bb987794acef40cb9fcab1bc18e04d33%7Emv2_d_1292_1453_s_2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/3b6b39_bb987794acef40cb9fcab1bc18e04d33%7Emv2_d_1292_1453_s_2.png" type="image/png"/>
<title>@yield('title')</title>
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
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
        <li><a herf="GUIit" alt="الرئيسية"><img src="images/شعار-هدية-دقة-عالية-1.png" width="120" /></a></li>
      </ul>
    </div>
  </div>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
        <a href="#" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">تعديل كلمة المرور</a>
        <a href="#">تسجيل الخروج</a>
      </div>
      <span style="font-size:40px;cursor:pointer; margin-top:10px;" onclick="openNav()" class="fa fa-fw fa-user"></span>
      <span style="cursor:pointer;font-size:40px; margin-top:10px;" class="fa fa-fw fa-user" onclick="document.getElementById('id01').style.display='block'"></span>
</div>
<!--LOGIN-->
<div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/avatar.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <label for="uname"><b>البريد الالكتروني</b></label>
      <input type="text" placeholder="البريد الالكتروني" name="uname" required>
      <label for="psw"><b>كلمة المرور</b></label>
      <input type="password" placeholder="كلمة المرور" name="psw" required>
      <button type="submit">موافق</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> تذكّرني لاحقًا
      </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">إلغاء</button>
      <span class="psw">نسيت <a href="#">كلمة المرور؟</a></span>
    </div>
  </form>
</div>
<!--LOGIN END-->
<!-- edit window-->
<div id="id02" class="modal">
  <form class="modal-content animate" action="/action_page.php">
    <div class="container">
      <label for="psw"><b>كلمة المرور القديمة</b></label>
      <input type="password" placeholder="كلمة المرور القديمة" name="psw" required>
      <label for="npsw"><b>كلمة المرور الجديدة</b></label>
      <input type="password" placeholder="كلمة المرور الجديدة" name="npsw" required>
	  <label for="npsw"><b>تأكيد كلمة المرور الجديدة</b></label>
      <input type="password" placeholder="تأكيد كلمة المرور الجديدة" name="npsw" required>
	  <center>
      <button type="submit">موافق</button>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">إلغاء</button>
    </div>
  </form>
</div>
<!-- end edit window-->
<!--end Header-->
</header>

<div class="pagesContent">
  <!--PROFILE-->
@yield('content')
</div>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<footer>
 <div class="container">
   <div class="row">
   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
               <ul class="social">
                          <span>التواصل الاجتماعي </span>
                           <li>
                                <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                           </li>
                           <li>
                                <a href="#"><i class="fa fa-github fa-2x"></i></a>
                           </li>
                           <li>
                                <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                           </li>
                           <li>
                                <a href="#"><i class="fa fa-tumblr fa-2x"></i></a>
                           </li>
                           <li>
                                <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                          </li>
                 </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="contact">
                     <span> شاركنا العطاء </span>
                      <li>
                         <a href="#">+966 500 399 888</a>
                      </li>
                      <li>
                        <a href="#">+966 508 508 111</a>
                      </li>
                      <li>
                         <a href="#">+966 530 187 777</a>
                      </li>
                </ul>
            </div>
       <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                <ul class="adress">
                     <span>تمنياتنا</span>
                     <li>
                        <p>نرجو أن نكون خبراً سعيداً . . . تنقله لمن حولك</p>
                      </li>
                      <li>
                        <p>في هدية نسعد بالتواصل معكم دائما وتلقى آرائكم ومقترحاتكم حول برامج وخدمات الجمعية كما نسعد باستقبال مساهمتكم المالية</p>
                      </li>
                 </ul>
            </div>
       </div>
    </div>
</footer>
</body>
</html>
<!-->
<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
// Get the modal
var modal1 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal.style.display = "none";
    }
}
</script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
