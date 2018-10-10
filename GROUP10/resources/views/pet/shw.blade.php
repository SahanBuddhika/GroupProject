@extends('layout')

@section('content')
<div class="container">
    
<div class="py-5 text-center">
            <!-- add the href to get image -->
             <!-- <img class="rounded-circle" src="{{$post->image}}" alt="Generic placeholder image" width="140" height="140"> -->
            <img  src="{{$post->image}}"  width="140" height="140">
            <h2 > {{$post->ename}}</h2>
            <p>{{$post->mail}}</p>
            <p>{{$post->mobile}}</p>
          </div>

 @if(count($pets)>0)

<ul class="list-goup">
<h1>Clients</h1>
@foreach($pets as $post)
    <h2>
    <li class="list-group-item"><a href="/client/{{$post->id}}">{{$pets->id}}</a> <h2>
    <small>{{$post->mobile}}</small>
    </li>
@endforeach
</ul>

@endif
          
@endsection('content')