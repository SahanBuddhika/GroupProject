@extends('layout')

@section('content')
<div class="container">
    <!-- Breadcrumbs-->
 <ol class="breadcrumb">
    <li class="breadcrumb-item active">VIEW STOCK</li>
  </ol>

 

    
    <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Stock Table</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <td>Name</td>
              <td>Quantity</td>
              <td>Brand</td>
              <td>Price</td>
              <td>Expire Date</td>
            </tr>
          </thead>
          
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>  
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>  
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>  
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>  
            </tr>

            
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted"></div>
  </div>

   
</div>
@endsection('content')









 