@extends('templates.hadiyah')
@section('title')
observer informaiton
@endsection
@section('content')
<script type="text/javascript">
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
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

    <form method="POST" action="#" class="form-container" autocomplete="off" >
     {{csrf_field()}}


   <h1>إضافة مشرف جديد </h1>

   <br>
   <label for="service_id"><b>الخدمة </b></label>
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
       <input type="text" name="location" ID="location" value = '<?php echo $observers[0]->location; ?>' required >


   <button type="submit" class="page-item" value = "Update observer" ><span> تعديل  </span></button>
   <button type="button" class="page-item" onclick="closeForm()">إغلاق </button>
 </form>
</div>
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
            <h3>بيانات  <b>المشرفين الميدانيين </b></h3>
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
            <form action="/search" method="POST" role="search">
              {{ csrf_field() }}
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            <div class="filter-group">
              <label>الرقم التعريفي </label>
              <input type="text" class="form-control" name="id">
            </div>

          </form>


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
                         <th colspan="3">الموقع </th>
                         <th>الخدمة </th>
                         <th>اسم المشرف الميداني </th>
                         <th> الرقم التعريفي  </th>

                    </tr>
                </thead>

@if(isset($observers))
                <tbody ID="datatable">

   @foreach ($observers as $observer)
                                     <tr>
                                         <td> <a href='edit/{{ $observer->id }}' class="edit" title="Edit"  data-toggle="tooltip" onclick="openForm()" ><i class="material-icons" >&#xE254;</i></a></td>
                                         <td>      <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                                         <td><span class="status text-success">&bull;</span>{{$observer->location}}</td>

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
                       <td> <a href="#" class="edit" title="Edit"  data-toggle="tooltip" onclick="openForm()" ><i class="material-icons" >&#xE254;</i></a></td>
                       <td>      <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>
                       <td><span class="status text-success">&bull;</span>{{$observer->location}}</td>

                       <td>{{$observer->service_id}}</td>

                       <td>{{$observer->f_name}}</td>

                       <td>{{$observer->id}}</td>

                        <td></td>
                  </tr>

                  @endforeach

                @endif

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
</body>
</html>
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














</script>


@endsection
