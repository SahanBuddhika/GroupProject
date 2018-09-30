@extends('layout')

@section('content')

<div class="container">
      <div class="py-5 text-center">
            <!-- add the href to get image -->
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2 >{{$pets->species}}</h2>
            <p>{{$pets->colour}}</p>
            
          </div>

@yield('contex')

@endsection

