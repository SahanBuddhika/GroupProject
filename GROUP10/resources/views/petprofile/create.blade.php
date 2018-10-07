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


<div class="form-group">
<div class="row">
    <div class="col-lg-9">
 {{Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Select The Medicine','class'=>'form-control'])}}
 </div>
 <div class="col-lg-2">
 {{Form::text('quantity','',['class'=>'form-control','placeholder'=>'Quantity'])}}
 </div>
 <div class="col-lg-1">
 {{Form::submit('Add+',['class'=>'btn btn-success'])}}
 </div>
 </div>
 </div>


 
{{Form::submit('Save',['class'=>'btn btn-primary'])}}
    
{!! Form::close() !!} 

@if(count($pet)>0)

<br>
<br>
<br>

<h1>Recently Added</h1>
@foreach($pet as $post)

<div class="my-3 p-3 bg-white rounded box-shadow">
        <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">{{$post->colour}}</strong>
              <small>{{$post->created_at}}</small>
            </div>
</div>
<hr>
    <small>{{$post->species}}</small>

@endforeach
</ul>

@endif

@endsection 