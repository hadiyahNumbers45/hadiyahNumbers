<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      /*
      Blade::directive('logInWindow', function(){
        $window="<div id='id01' class='modal'>
            <form class='modal-content animate' action='/action_page.php'>
              <div class='imgcontainer'>
                <span onclick='document.getElementById('id01').style.display='none'' class='close' title='Close Modal'>&times;</span>
                <img src='images\avatar.png' alt='Avatar' class='avatar'>
              </div>
              <div class='container'>
                <label for='uname'><b>البريد الالكتروني</b></label>
                <input type='text' placeholder=''البريد الالكتروني' name='uname' required>
                <label for='psw'><b>كلمة المرور</b></label>
                <input type='password' placeholder='كلمة المرور' name='psw' required>
                <button type='submit'>موافق</button>
                <label>
                  <input type='checkbox' checked='checked' name='remember'> تذكّرني لاحقًا
                </label>
              </div>
              <div class='container' style='background-color:#f1f1f1'>
                <button type='button' onclick='document.getElementById('id01').style.display='none'' class='cancelbtn'>إلغاء</button>
                <span class='psw'>نسيت <a href='#''>كلمة المرور؟</a></span>
              </div>
            </form>
          </div>";
          return $window;
      });
      */
      //مبدئيا من غير اي دي للفنكشن لكن بعدين لازم نمرر الاي دي عشان نجيب المعلومات
        Blade::directive('displayPersonalInfo', function(){
          ######## PERSONAL INFORMATIONS ########-->
          	$info="
            	<div class='boxInfo'><h3>المعلومات الشخصية</h3>
            	  <table>
            		<tr><th>:المسمى الوظيفي</th><th>:الاسم</th></tr>
            		<tr><th>:الموقع</th><th>:البريد الالكتروني</th></tr></table>
            	</div>";
            return $info;
          ######## END PERSONAL INFORMATIONS ########-->
        });
    }
}
?>
