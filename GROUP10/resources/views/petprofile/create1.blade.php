@extends('layout')




 @section('content')

<form action="" method="POST">
    
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" id="colour" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Disd</label>
      <input type="text" class="form-control" id="species" placeholder="Password">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Title1</label>
      <input type="text" class="form-control" id="x" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Disd2</label>
      <input type="text" class="form-control" id="quantity" placeholder="Password">
    </div>
    {{ csrf_field() }}
  </div>




    <button type="submit" name="action" value="save">Save</button>
    <button type="submit" name="action" value="preview">Preview</button>
    
</form>






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