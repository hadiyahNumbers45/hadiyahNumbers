
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8"/>
   <link rel="shortcut icon" href="https://static.wixstatic.com/media/3b6b39_bb987794acef40cb9fcab1bc18e04d33%7Emv2_d_1292_1453_s_2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/3b6b39_bb987794acef40cb9fcab1bc18e04d33%7Emv2_d_1292_1453_s_2.png" type="image/png"/>
   <link rel="stylesheet" href="css/fonts.css"/>

<style>
body{
font-family:GE Contrast Bold;
}
.menu
{
background-color:white; #296D51;
border-bottom: 4px solid #4f5467;
width:100%;
height: auto;
padding: 20px 10px;
position: fixed;
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
color: #296D51;
padding: 10px 35px;
}
.menu  .navbar-nav >  li >  a:hover
{
background-color:#F0F4F2;
color: #296D51;
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
.nameOfOrg{display: inline;
margin: 5px;
color: #296D51}
footer{
background-color:  #009973;
padding:30px 0px;
}

footer ul li{
padding:5px 0px;
}
.adress span , .contact span , .social span{
color: #FFF;
font-weight: 800;
padding-bottom: 10px;
margin-bottom: 20px;
display: block;
text-transform: uppercase;
font-size: 20px;
letter-spacing: 3px;
}
.adress li p , .contact li a , .social li a{
color:#FFF;
letter-spacing: 2px;
text-decoration:none;
font-size:15px;
}
.social li{
float:left;
}
.adress , .contact , .social {
list-style: none;
}
.fa{
color:#FFF;
margin-right: 15px;
font-size:14px;
}

</style>
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
        <a href="/" title="الرئيسية"><img src="imgs\hadiyahLogo.png" alt=""width="40px"></a>
        <h4 class="nameOfOrg">هدية الحاج والمتعمر</h4>
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
<div>
@yield('content')
</div>
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
