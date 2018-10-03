@extends('layout')

@section('content')
<div class="container">
    <!-- Breadcrumbs-->
 <ol class="breadcrumb">
    <li class="breadcrumb-item active">ANALYSE DISEASES</li>
  </ol>

    <div class="card mb-3">
                    <div class="card-header">
                         <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Year
                        <span class="caret"></span></button>
                             <ul class="dropdown-menu">
                             <li><a href="/periodic"></a></li>
                            <li><a href="/dewarming"></a></li>
                            <li><a href="/other"></a></li>
                            </ul>
                        </div>
                    </div>
    </div>

      <div class="card mb-3">
                    <div class="card-header">
                         <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Month
                        <span class="caret"></span></button>
                             <ul class="dropdown-menu">
                             <li><a href="/periodic"></a></li>
                            <li><a href="/dewarming"></a></li>
                            <li><a href="/other"></a></li>
                            </ul>
                        </div>
                    </div>
    </div>
 
 
   
</div>
@endsection('content')




 
