
@extends('layout')

@section('content')
<div class="container">
     <!-- Breadcrumbs-->
     <ol class="breadcrumb">
            <li class="breadcrumb-item active">WELCOME TO PETRAYS ANIMAL CLINIC <p> {{Carbon\Carbon::now()}}</p></li>
        
        </ol>
    
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Event Calander</h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted"></small></p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Income</h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted"></small></p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Client Base</h5>
                <p class="card-text"> </p>
                <p class="card-text"><small class="text-muted"></small></p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="py-5 text-center">
            <img src="\image\finallogo.png">
            </div>
        </div>
    

    
</div>
@endsection('content')