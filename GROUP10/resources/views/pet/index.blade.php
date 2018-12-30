@extends('layout')

@section('content')

    
    @if(count($pet)>0)

        <ul class="list-goup">
        <h1>Clients</h1>
        @foreach($pet as $post)
            <h2>
            
<div class="row">
<div class="col-sm-12 ">
<div class="card">
      <div class="card-body">
      <div class="col-sm-6 ">
    <div class="float-left mb-6"><a href="/client/{{$post->id}}">{{$post->ename}} </a></div>  
</div>
<div class="col-sm-6">
    <div class="text-centerS mb-6">

  <small text-center>{{$post->mobile}}</small>
  </div>
            </div>
            </div>
            </div>
        @endforeach
       

    @endif
</div>
@endsection('content')