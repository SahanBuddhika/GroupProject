@extends('layout')

@section('content')
<div class="container">
    <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">CLIENTS</li>
  </ol>
  <h1>Clients</h1>
  
@foreach($pet as $post)
<div class="row">
<div class="col-sm-3 ">
    <div class="float-left mb-6"><a href="/client/{{$post->id}}">{{$post->name}} </a></div>  
</div>
<div class="col-sm-3 ">
    <div class="float-right mb-6"><p>ss</p></div>
</div>
  <small>{{$post->mob_no}}</small>
    
@endforeach
</div>
  
  
</div>
@endsection('content')






 