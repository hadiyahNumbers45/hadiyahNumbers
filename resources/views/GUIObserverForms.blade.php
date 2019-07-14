@extends('templates.hadiyah')
@section('title')
تعبئة نموذج
@endsection
@section('content')
<div class='formModel'>
  <center>
    <form method='post' action=''>
      <fieldset>
        <?php echo displayFormContent(3); ?>
        <input type="submit" name=sendInfo value="ارسال"/>
      </fieldset>
    </form>
  </center>
</div>
@endsection
<?php
function displayFormContent($id=1){
  $Body_Food_Form=" <legend>غذاء البدن</legend>
<label>المدينة</lable></br>
                 <select id='city' name='city' required>
                  <option value='Cameroon'>Cameroon</option>
                  <option value='Canada'>Canada</option>
                  <option value='Cape Verde'>Cape Verde</option>
                </select><br>
                <label>نقطة اتصال</lable></br>
                <select id='con' name='con' required>
                 <option value='Cameroon'>Cameroon</option>
                 <option value='Canada'>Canada</option>
                 <option value='Cape Verde'>Cape Verde</option>
               </select>
                <br/>
                   <label>البيان</lable></br>
                   <select id='info' name='info' required>
                    <option value='Cape Verde'>Cape Verde</option>
                  </select>
                  <div class='todayTomorrow'>
                    <div>
                      <label>العدد</lable></br>
                      <input type='number' name='usedMaterialNumber' placeholder='90' required></br>
                    </div>
                    <div>
                      <label>فائض اليوم</lable></br>
                      <input type='number' name='usedMaterialNumberToday' placeholder='10' required></br>
                    </div>
                    <div>
                      <label>احتياج الغد</lable></br>
                      <input type='number' name='usedMaterialNumberTomorrow' placeholder='80' required></br>
                    </div>
                    <button>+</button>
                  </div>
                  ";
  $Reception_Of_Delegations_Form="
           <legend>نموذج استقبال الوفود</legend>
           <label>الجنسية</lable></br>
           <select id='country' name='country' class='form-control' required>
            <option value='سعودية'>سعودية</option>
            <option value='هندية'>هندية</option>
            <option value='افغانستانيه'>افغانستانيه</option>
            <option value='امريكية'>امريكية</option>
            <option value='اندنوسيه'>اندنوسيه</option>
            <option value='باكستانيه'>باكستانيه</option>
            <option value='تركية'>تركية</option>
            <option value='امارتية'>امارتية</option>
            <option value='بحرينيه'>بحرينيه</option>
            <option value='قطريه'>قطريه</option>
            <option value='كويتيه'>كويتيه</option>
            <option value='يمنية'>يمنية</option>
            <option value='عمانية'>عمانية</option>
            <option value='ارنية'>اردنية</option>
            <option value='سوريه'>سوريه</option>
            <option value='لبنانية'>لبنانية</option>
            <option value='عراقية'>عراقية</option>
            <option value='ايرانية'>ايرانية</option>
            <option value='ماليزيه'>ماليزيه</option>
            <option value='Barbados'>Barbados</option>
            <option value='Belarus'>Belarus</option>
            <option value='Belgium'>Belgium</option>
            <option value='Belize'>Belize</option>
            <option value='Benin'>Benin</option>
            <option value='Bermuda'>Bermuda</option>
            <option value='Bhutan'>Bhutan</option>
            <option value='Bolivia'>Bolivia</option>
            <option value='Bosnia and Herzegovina'>Bosnia and Herzegovina</option>
            <option value='Botswana'>Botswana</option>
            <option value='Bouvet Island'>Bouvet Island</option>
            <option value='Brazil'>Brazil</option>
            <option value='British Indian Ocean Territory'>British Indian Ocean Territory</option>
            <option value='Brunei Darussalam'>Brunei Darussalam</option>
            <option value='Bulgaria'>Bulgaria</option>
            <option value='Burkina Faso'>Burkina Faso</option>
            <option value='Burundi'>Burundi</option>
            <option value='Cambodia'>Cambodia</option>
            <option value='Cameroon'>Cameroon</option>
            <option value='Canada'>Canada</option>
            <option value='Cape Verde'>Cape Verde</option>
          </select></br>
           <label>تاريخ الوصول</lable></br>
           <input type='date' required></br>
           <label>وقت الوصول</lable></br>
           <input type='time' required></br>
           <label>عنوان السكن في مكة </lable></br>
           <input type='text' required></br>
           <label>عنوان السكن في المدينة </lable></br>
           <input type='text' required></br>
           <label>تاريخ الزيارة </lable></br>
           <input type='date' required></br>
           <label>وقت الزيارة</lable></br>
           <input type='time' required></br>
           <label>تاريخ المغادرة </lable></br>
           <input type='date' required></br>
           <label>وقت الزيارة </lable></br>
           <input type='time' required></br>
           <label>منسق الوفد</lable></br>
           <input type='text' placeholder='محمد ابراهيم صالح' required></br>
           <label>رقم التواصل</lable></br>
           <input type='tel'pattern='[0-9]{3}-[0-9]{3}-[0-9]{4}' placeholder='123-456-7890' required></br>
           <label>عدد الرجال</lable></br>
           <input type='number' required></br>
           <label>عدد النساء</lable></br>
           <input type='number' required></br>
           <label>عدد الاطفال</lable></br>
           <input type='number' required></br>";
 $soul=" <legend>غذاء الروح</legend>
                <label>المدينة</lable></br>
                <select id='city' name='city' required>
                 <option value='Cameroon'>Cameroon</option>
                 <option value='Canada'>Canada</option>
                 <option value='Cape Verde'>Cape Verde</option>
               </select><br/>
               <label>نقطة اتصال</lable></br>
               <select id='con' name='con' required>
                <option value='Cameroon'>Cameroon</option>
                <option value='Canada'>Canada</option>
                <option value='Cape Verde'>Cape Verde</option>
              </select>
               <br/>
               <label>الموقع</label><br/>
               <input type='text' name='location' required/><br/>
                <label>اجمالي المواد المستخدمة</lable></br>
                <input type='number' name='usedMaterial' required></br>
                  <label>البيان</lable></br>
                  <select id='info' name='info' required>
                   <option value='Cape Verde'>Cape Verde</option>
                 </select>
                 <div class='todayTomorrow'>
                   <div>
                     <label>العدد</lable></br>
                     <input type='number' name='usedMaterialNumber' placeholder='90' required></br>
                   </div>
                   <div>
                     <label>اللغة</lable></br>
                     <input type='text' name='languagesSoulFood' placeholder='العربية' required></br>
                   </div>
                   <button>+</button>
                 </div>
                 ";

$booldOfALgebrat="<legend>تعبئة نموذج</legend>
                           <label>اجمالي الوكالات</label><br/>
                           <input type='number' name='numberOfAgencies' required><br/>
                           <label>الجهات المستفيدة من الوكالات:</label><br/>
                           <input type='number' name='usedMaterial' required></br>
                             <label>البيان</lable></br>
                             <select id='info' name='info' required>
                              <option value='Cape Verde'>Cape Verde</option>
                            </select>
                            <div class='todayTomorrow'>
                              <div>
                              <label>عدد الذبائح</label><br/>
                              <input type='number' name='numberOfCarcasses' required><br/>
                              </div>
                              <div>
                              <label>النوع</label><br/>
                              <input type='text' name='carcassesType' required><br/>
                              </div>
                              <div>
                              <label>اسم المندوب</label><br/>
                              <input type='text' name='delegateName' required><br/>
                              </div>
                              <button>+</button>
                            </div>
                           <label>اجمالي الذبائح</label><br/>
                           <input type='number' name='sumCarcasses' required><br/>
                           <label>اعتماد اللجنة الشرعية</label><br/>
                           <label>اسماء الاعضاء</label><br/>
                           <input type='text' name='membersName' required><br/>
                           <label>ملاجظات ان وجدت</label><br/>
                           <input type='text' name='notes' required><br/>";



 if($id==1)
    return $Body_Food_Form;
else if ($id==2)
  return $Reception_Of_Delegations_Form;
else if ($id==3)
    return $soul;
else if ($id==4)
      return $booldOfALgebrat;
else
return 0;

}
  function displayForm($value='1')

  {/*                 <label>المدينة</lable></br>
                   <select id='city' name='city' required>
                    <option value='Cameroon'>Cameroon</option>
                    <option value='Canada'>Canada</option>
                    <option value='Cape Verde'>Cape Verde</option>
                  </select>
*/
//numberOfAgencies=عدد الوكالات
//statment بيان الجهه
//numberOfCarcasses عدد الذبائح
//carcassesType النوع
//delegateName
      $booldOfALgebrat="
      <div class='formModel'>
        <center>
          <form method='post' action=''>
            <fieldset>
               <legend>تعبئة نموذج</legend>
                <label>اجمالي الوكالات</label><br/>
                <input type='number' name='numberOfAgencies' required><br/>
                <label>الجهات المستفيدة من الوكالات:</label><br/>
                <label>بيان الجهة</label><br/>
                <input type='text' name='statment' required><br/>
                <label>عدد الذبائح</label><br/>
                <input type='number' name='numberOfCarcasses' required><br/>
                <label>النوع</label><br/>
                <input type='text' name='carcassesType' required><br/>
                <label>اسم المندوب</label><br/>
                <input type='text' name='delegateName' required><br/>
                <label>اجمالي الذبائح</label><br/>
                <input type='number' name='sumCarcasses' required><br/>
                <label>اعتماد اللجنة الشرعية</label><br/>
                <label>اسماء الاعضاء</label><br/>
                <input type='text' name='membersName' required><br/>
                <label>ملاجظات ان وجدت</label><br/>
                <input type='text' name='notes' required><br/>
                <input type='submit' value='send' name='submitForm'/>
              </fieldset>
           </form>
         </center>
       </div>";
      $allForms=$booldOfALgebrat.$Body_Food_Form.$Reception_Of_Delegations_Form;
      return $allForms;
  }
?>
