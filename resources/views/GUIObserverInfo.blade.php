@extends('templates.hadiyah')
@section('title')
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


  <!-- بداية الغلط من هنا  -->



  <!-- نهاية الايرور -->
</div>
@if(Session::has('success'))
   <div class="alert alert-success">
    <p>{{Session::get('success')}} </p>
</div>
  @endif

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
                   <th>نقطة الاتصال </th>
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

                         <td> <form action='/edit' method='post'>
                               {{ csrf_field() }}
                           <button type="submit" name="observer_id" value='{{$observer->id}}'> تعديل  </button>

                         </form>
                         </td>
                <!--   <td> <a href="edit/{{ $observer->id }}"  data-toggle="tooltip" class="btn btn-primary" class="edit" onclick="openForm()"><i class="material-icons">&#xE254;</i></a></td>
                -->         @if(isset($locations[$observer->id]))
                            <td></span>{{$locations[$observer->id]->connection_point}}<span class="status text-success">&nbsp;&bull;</td>
                            <td>{{$locations[$observer->id]->location}}<span class="status text-success">&nbsp;&bull;</span></td>

                            @else
                            <td><span class="status text-success">&bull;</span></td>
                            <td><span class="status text-success">&bull;</span></td>
                              @endif
                             @if(isset($services[$observer->id]))
                            <td>{{$services[$observer->id]->name}}</td>
                            @else
                              <td></td>
                                @endif
                            <td>{{$observer->f_name}} {{$observer->s_name}} {{$observer->l_name}}</td>
                            <td>{{$observer->id}}</td>
                            <td></td>
                      </tr>

  @endforeach
      </tbody>
                 <!-- @elseif(isset($details))
                 @foreach ($observers as $observer)
                 <tr>

                                            <td> <form action='edit/{{ $observer->id }}' method='post'>
                                              <button type="button" onclick="openForm()"> Edit </button>

                                            </form>

                                            </td>
                 <td> <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                 <td><span class="status text-success">&bull;</span>{{$locations[$observer->id]->location}}</td>
                 <td><span class="status text-success">&bull;</span>{{$locations[$observer->id]->connection_point}}</td>
                 <td>{{$services[$observer->id]->name}}</td>
                 <td>{{$observer->f_name}}</td>
                 <td>{{$observer->id}}</td>
                 <td></td>
                 <td></td>
                  </tr>

                  @endforeach -->

                @endif

            </table>

        </div>
    </div>


@endsection
<script type="text/javascript">

$(document).ready(function(){

var table =$('#datatable').DataTable();

table.on('onclick','.Edit',function() {

  $tr = $(this).closest('tr');
  if($($tr).hasClass('child')){
    $tr=$tr.prev('.parent');
  }

 var data = table.row($tr).data();
 console.log(data);

 $('service_id').val(data[1]);
 $('location').val(data[2]);


 $('#EditForm').attr('action','/Observersaction/'+data[0]);

$('#EditModel').mode('show');
});

});
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});

function openForm() {
 document.getElementById("myForm").style.display = "block";
}
function closeForm() {
 document.getElementById("myForm").style.display = "none";
}
</script>
