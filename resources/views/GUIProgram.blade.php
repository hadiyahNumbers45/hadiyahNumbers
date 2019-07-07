@extends('templates.hadiyah')
@section('title')
Page title
@endsection
@section('content')
<h1>Page content</h1>

@foreach ($programs as $rs)
<a href="{{route('program.show',$rs->id) }}"> {{ $rs->name}} </a>
 
 <br>
 @endforeach
@endsection
