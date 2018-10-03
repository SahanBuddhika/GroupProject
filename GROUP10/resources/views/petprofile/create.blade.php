@extends('layout')

 @section('content')

{!! Form::open(['action' => 'PostToPets@store','method'=>'POST']) !!}
<div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
</div>

<div class="form-group">
    {{Form::label('specialNote','Special Discription about pet')}}
    {{Form::textarea('specialNote','',['class'=>'form-control','placeholder'=>'Note-Down Here '])}}
</div>

 
{{Form::submit('Save',['class'=>'btn btn-primary'])}}
    
{!! Form::close() !!} 

@if(count($pet)>0)

<ul class="list-goup">
<h1>Recently Added</h1>
@foreach($pet as $post)
    <h2>
    <li class="list-group-item">{{$post->colour}} <h2>
    <small>{{$post->species}}</small>
    </li>
@endforeach
</ul>

@endif

@endsection 