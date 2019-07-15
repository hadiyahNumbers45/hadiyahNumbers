@extends('templates.hadiyah')
@section('title')
observer informaiton
@endsection
@section('pageTitle')
observer informaiton
@endsection
@section('content')
<div>
<div class="form-popup" id="myForm">
  @if(count($errors)>0)
  <div >
       <ul>
          @foreach ($errors->all() as $errors )
           <li>{{$error}}</li>
          @endforeach
      </ul>

  </div>
  @endif
  @if (\Session::has('success'))
<div class="alert alert-success">
<p>{{\Session::get('success')}} </p>

</div>
  @endif

  <form method="POST" action="/edit/<?php echo $observers[0]->id; ?>" class="form-container" autocomplete="off" >
    {{csrf_field()}}


  <h1>إضافة مشرف جديد </h1>

  <br>
  <label for="program_id"><b>الخدمة </b></label>
  <br>
  <!--
  <label> <input type="radio" name="program_id" value="1" ID="program_id">one </label>
  <br>
  <label> <input type="radio" name="program_id" value="2"ID="program_id" >two </label>
  <br>
  <label> <input type="radio" name="program_id" value="3" ID="program_id">Three </label>
  <br> -->
    <input type="text" name="service_id" ID="service_id" value = '<?php echo $observers[0]->service_id; ?>' required >
      <label for="location"><b>الموقع </b></label>
      <input type="text" name="location" ID="location" value = '<?php echo $observers[0]->location_id; ?>' required >


  <input type="submit" class="page-item" value = "Update observers" ><span> تعديل  </span></input>
  <button type="button" class="page-item" onclick="closeForm()">إغلاق </button>
</form>
</div>
</div>


  <div class="container">
      <div class="table-wrapper">
          <div class="table-title">
              <div class="row">
                  <div class="col-sm-4">
          <h3>بيانات  <b>المشرفين الميدانيين </b></h3>
        </div>

              </div>
          </div>
    <div class="table-filter">
      <div class="row">
                  <div class="col-sm-3">

        </div>

          <div class="col-sm-9">
          <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
          <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
          <div class="filter-group">
            <label>الرقم التعريفي </label>
            <input type="text" class="form-control" name="id">
          </div>

        </form>



                  </div>
              </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
<th></th>
                 <th>الموقع </th>

                 <th>الخدمة </th>

               <th>اسم المشرف الميداني </th>

                 <th> الرقم التعريفي  </th>
            </tr>
        </thead>

@if(isset($observers))
              <tbody ID="datatable">

 @foreach ($observers as $observer)
                                   <tr>

                                                                              <td> <a href="edit/{{ $observer->id }}"  data-toggle="tooltip" class="btn btn-primary" class="edit" onclick="openForm()"><i class="material-icons">&#xE254;</i></a></td>

                                                                              <td><span class="status text-success">&bull;</span>{{$observer->location_id}}</td>

                                                                              <td>{{$observer->service_id}}</td>

                                                                              <td>{{$observer->f_name}}</td>

                                                                              <td>{{$observer->id}}</td>


                                        <td></td>
                                  </tr>

@endforeach

    </tbody>

              @elseif(isset($details))


                 @foreach ($details as $observer)
                 <tr>
                   <td> <a href="edit/{{ $observer->id }}"  data-toggle="tooltip" class="btn btn-primary" class="edit" onclick="openForm()"><i class="material-icons">&#xE254;</i></a></td>
                 <td>      <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                 <td><span class="status text-success">&bull;</span>{{$observer->location_id}}</td>

                 <td>{{$observer->service_id}}</td>

                 <td>{{$observer->f_name}}</td>

                 <td>{{$observer->id}}</td>

                  <td></td>

                      <td></td>
                </tr>

                @endforeach

              @endif

          </table>

      </div>
  </div>
</div>
@endsection
