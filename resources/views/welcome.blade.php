@extends('templates.hadiyah')
@section('title')
هدية الحاج والمعتمر
@endsection
@section('pageTitle')
 هدية الحاج والمتعتمر
@endsection
@section('content')
<!--

<div class="containerHome">
  <center>
  <div class="programCads">
    <center>
      <p><br/><br/><b>غذاء الروح </b>يرتكز نشاط البرنامج على تعليم اركان الاسلام وتحسين تلاوة الفاتحة وقصار السور.</p>
      <img src="images/غذاء-الروح1.png" width="150">
    </center>
  </div>
  <div class="programCads">
    <center>
      <p><br/><br/><b>غذاء البدن</b>يراعي البرنامج في جميع جوانبه احتياجات الفئة المستفيدة<br/></p>
      <img src="images/غذاء-البدن1.png" width="150">
    </center>
  </div>
  <div class="programCads">
    <center>
      <p><br/><br/><b>العناية </b>تضم جانبًا يتعلق بتقديم هدايا أو خدمات تتيح للحجاج والمعتمرين والزوار سهولة وتيسيرًا أثناء اداء المناس</p>
      <img src="images/العناية1.png" width="150">
    </center>
  </div>
  <div class="programCads">
    <center>
      <p><br/><br/><b>مضياف </b>استقبال الحجاج والمعتمرين والزوار وتقديم الضيافة والوجبات والسقيا والهدايا لهم</p>
      <img src="images/1مضياف.png" width="150">
    </center>
  </div>
  <div class="programCads">
    <center>
      <p><br/><b>الوكالات</b>لم يستطيع تنفيذ النسك فهناك الوكالات المقرة شرعا بإخراج الكفارات أو بإناية من يستطيع تنفيذ النسك عنه </p>
      <img src="images/1الوكالات.png" width="150">
    </center>
  </div>
</div>
</center>
-->
{{csrf_field()}}
  <div class="containerHome">
    <center>
      @foreach ($program as $program)
        <a href="{{url('GUIProgram/'.$program->name)}}">
          <div class="programCads">
            <center>
              <p><br/><br/><b> {{$program->name}} </b>{{$program->Description}}</p>
              <img src="{{$program->images}} " width="150">
            </center>
          </div>
        </a>
  @endforeach

@endsection
