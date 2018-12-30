@extends('layout')

@section('content')
<div class="container">
    
<div class="py-5 text-center">
            <!-- add the href to get image -->
             <!-- <img class="rounded-circle" src="{{$post->image}}" alt="Generic placeholder image" width="140" height="140"> -->
             
             <!-- <img  src="{{$post->image}}"  width="140" height="140"> -->
             <img class="rounded-circle" src="data:image/jpg;charset=utf8;base64,{{base64_encode($post->image)}}"  width="140" height="140"/>
            <h2 > {{$post->ename}}</h2>
            <p>{{$post->mail}}</p>
            <p>{{$post->mobile}}</p>
          </div>





         <!-- <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Info card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div> -->




@if(count($pets)>0)

<ul class="list-goup">
<h1 class="text-center">{{$post->ename}}'S Pets</h1>
<hr>
<hr>
<div class="row justify-content-center">
<div class="col-sm-3 ">
@foreach($pets as $pos)


<div class="card text-white text-center bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header"><a href="/client/{{$post->id}}/{{$pos->pid}}" style="color:black">{{$pos->pname}} </a></div>
  <div class="card-body">
    <h5 class="card-title"></h5>p
    <img class="rounded-circle" src="data:image/jpg;charset=utf8;base64,{{base64_encode($pos->image)}}"  width="140" height="140"/>
  </div>
</div>
</div>

@endforeach
</div>
</div>
</ul>

@endif





          
@endsection('content')