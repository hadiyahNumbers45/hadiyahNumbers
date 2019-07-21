
@extends('templates.hadiyah')
@section('title')
هدية الحاج والمعتمر - مشرف البرنامج
تعديل بيانات
@endsection
@section('content')
<section class="site-section pt-5" >
     <div class="container" style="text-align: right;">
       <div dir="rtl">

    </br>

          <h1> تعديل بيانات </h1>

    </br>
      <form method="post" id="send_form" action="update">
        <span id="result"></span>
        {{csrf_field()}}
           الاسم
         <lable >{{$observer->f_name}}</lable>
         اسم الاب
         <lable >{{$observer->s_name}}</lable>
          اسم العائلة
       <lable >{{$observer->l_name}}</lable>
</br>
         الايميل
       <lable >{{$observer->email}}</lable>
</br>
    الخدمة
       </br>
       <select id='servies' name='servies' required>
         @if(isset($service->id))
            <option value="{{$service->id}}">{{$service->name}}</option>
          @else
            <option value=""></option>
         @endif

        @foreach($services as $ser)
        @if($service!==null)
               @if($ser->id!==$service->id)
               <option value="{{$ser->id}}">{{$ser->name}}</option>
               @endif
        @else
         <option value="{{$ser->id}}">{{$ser->name}}</option>
        @endif
       @endforeach
      |</select>
     </br>
        الموقع
            </br>
            <select id='location' name='location' required>
              @if(isset($location->id))
                 <option value="{{$location->id}}">{{$location->location}}-{{$location->connection_point}}</option>
              @else
                 <option value=""></option>
             @endif
             @foreach($locations as $loc)
               @if($location!==null)
                 @if($loc->id!==$location->id)
                 <option value="{{$loc->id}}">{{$loc->location}}-{{$loc->connection_point}}</option>
                 @endif
               @else
                <option value="{{$loc->id}}">{{$loc->location}}-{{$loc->connection_point}}</option>
              @endif
            @endforeach
       </select><br>
        <button type="submit"  name="observer_id" value='{{$observer->id}}'> حفظ </button>


</div>
                 </div>
         </div>
   </section>
@endsection
