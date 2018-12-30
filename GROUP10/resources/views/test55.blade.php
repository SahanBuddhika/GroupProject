@extends('layout')




 @section('content')


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("h6").mouseover(function(){
    $("h6").css("background-color", "lightgray");
  });
  $("h6").mouseout(function(){
    $("h6").css("background-color", "none");
  });
});
</script>

 <div class="card text-white bg-info mb-3" id="card" style="max-width: 18rem;">
  <div class="card-header"><h6>Header</h6></div>
  <div class="card-body">
    <h5 class="card-title">Info card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<!-- <p>I am Chamin </p> -->
 @endsection