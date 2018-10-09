@extends('layout')

@section('content')
<div class="container">
    <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">ADD STOCK</li>
  </ol>

    <div class="card mb-3">
        <div class="card-header">
             <li class="breadcrumb-item active">Add New Medicine</li>
        </div>
    </div>
 
    <div class="card mb-3">
        <div class="card-header">
            <div class="card-body">
             <form action="/insert" method = "post"> 
            <table>
              <tr>
            <div class="form-group">
              <label class="control-label col-sm-2" for="name">Name:</label>
              <div class="col-sm-6">
                <input type="name" class="form-control" id="name" placeholder="Enter Name">
              </div>
            </div>
              </tr>

              <tr>
            <div class="form-group">
                <label class="control-label col-sm-2" for="quantity">Quantity:</label>
                <div class="col-sm-6">
                  <input type="quantity" class="form-control" id="quantity" placeholder="Enter Quantity">
                </div>
              </div>
              </tr>

              <tr>
              <div class="form-group">
                <label class="control-label col-sm-2" for="up">Unit Price:</label>
                <div class="col-sm-6">
                  <input type="up" class="form-control" id="up" placeholder="Enter Unit price">
                </div>
              </div>
              </tr>

              <tr>
              <div class="form-group">
                <label class="control-label col-sm-2" for="ed">Expire Date:</label>
                <div class="col-sm-6">
                  <input type="ed" class="form-control" id="ed" placeholder="Enter Expire Date">
                </div>
              </div>
              </tr>

              <tr>
              <div class="form-group">
                <label class="control-label col-sm-2" for="specialnote">Relevent Species:</label>
                <div class="col-sm-6">
                  <input type="co" class="form-control" id="specialnote" placeholder="Enter Special Notes">
                </div>
              </div>
              </tr>

        
              <tr>
            <div class="form-group"> 
              <div class="col-sm-offset-7 col-sm-5">
                <button type="button" class="btn btn-success">PROCEED</button>
              </div>
            </div>
              </tr>
            </table>
            
          </form> 

            </div>
        </div>
    </div>


    <div class="card mb-3">
        <div class="card-header">
             <li class="breadcrumb-item active">Add Medicine</li>
        </div>
    </div>


    
    <div class="card mb-3">
        <div class="card-header">
            <div class="card-body">
            <form class="form-horizontal" action="/action_page.php">

            <div class="form-group">
              <label class="control-label col-sm-2" for="name">Name:</label>
              <div class="col-sm-6">
                <input type="name" class="form-control" id="name" placeholder="Enter Name">
              </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="quantity">Quantity:</label>
                <div class="col-sm-6">
                  <input type="quantity" class="form-control" id="quantity" placeholder="Enter Quantity">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="up">Unit Price:</label>
                <div class="col-sm-6">
                  <input type="up" class="form-control" id="up" placeholder="Enter Unit price">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="ed">Expire Date:</label>
                <div class="col-sm-6">
                  <input type="ed" class="form-control" id="ed" placeholder="Enter Expire Date">
                </div>
              </div>

    

            <div class="form-group"> 
              <div class="col-sm-offset-7 col-sm-5">
                <button type="button" class="btn btn-success">PROCEED</button>
              </div>
            </div>

            
          </form>

            </div>
        </div>
    </div>
  
</div>
@endsection('content')








 