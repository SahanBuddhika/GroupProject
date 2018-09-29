@extends('layout')

@section('content')
<div class="container">
    
    @if(count($pet)>0)

        <ul class="list-goup">
        <h1>Clients</h1>
        @foreach($pet as $post)
            <h2>
            <li class="list-group-item"><a href="/pet/{{$post->id}}">{{$post->ename}}</a> <h2>
            <small>{{$post->mobile}}</small>
            </li>
        @endforeach
        </ul>

    @endif
</div>
@endsection('content')