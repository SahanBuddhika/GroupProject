@extends('layout')

@section('content')

{!! Form::open(['action' => 'PostToPets@craete','method'=>'POST']) !!}
<div class="form-group">
    {{Form::lable('title','Title')}}
    {{Form::text('title','',['class'=>'form-controll','placeholder'=>Title])}}
</div>
    
{!! Form::close() !!}

@endsection