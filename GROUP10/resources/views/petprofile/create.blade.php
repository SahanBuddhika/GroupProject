@extends('layout')




 @section('content')

{!! Form::open(['action' => 'PostToPets@store','method'=>'POST']) !!}


 
 <div class="container">
      <div class="py-5 text-center">
            <!-- add the href to get image -->
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2 >Rox </h2>
            <p>Species:Dog</p>
            
          </div>
          </div>

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
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select Medicine</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    @foreach($medicine as $med)
    <option value="1">{{$med->name}}</option>
    @endforeach

  </select>
</div>
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



<br>
<br>
<br>

<h1>Recently Added</h1>

@if(count($pet)>0)
@foreach($pet as $post)

<div class="my-3 p-3 bg-white rounded box-shadow">
        <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">{{$post->colour}}</strong>
              <small>{{$post->created_at}}</small>
            </div>
</div>

    <small>{{$post->species}}</small>
<hr>
<hr>
    

@endforeach
</ul>

@endif

@endsection 