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

          
@endsection('content')