@extends('layout')

@section('content')
<div class="container">
     <!-- Breadcrumbs-->
     <ol class="breadcrumb">
        <li class="breadcrumb-item active">TREATMENTS</li>
      </ol>

      <div class="card mb-3">
            <div class="card-header">
                <div class="card-body">
                <form class="form-horizontal" action="/action_page.php">

                <div class="form-group">
                  <label class="control-label col-sm-2" for="date">Date:</label>
                  <div class="col-sm-6">
                    <input type="date" class="form-control" id="date" placeholder="Enter Date">
                  </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="sn">Note:</label>
                    <div class="col-sm-6">
                      <input type="sn" class="form-control" id="sn" placeholder="Special Notes">
                    </div>
                  </div>

                  
                
              </form>

                </div>
            </div>
        </div>



        <div class="card mb-3">
            <div class="card-header">
                 <li class="breadcrumb-item active">Medicine</li>
            </div>
        </div>
     
        <div class="card mb-3">
            <div class="card-header">
                <div class="card-body">
                <form class="form-horizontal" action="/action_page.php">

                <div class="form-group">
                  <label class="control-label col-sm-2" for="name">Name Of Medicine:</label>
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
                    <label class="control-label col-sm-2" for="price"> Price:</label>
                    <div class="col-sm-6">
                      <input type="price" class="form-control" id="price" placeholder="Enter price">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="dc">Doctor Charge:</label>
                    <div class="col-sm-6">
                      <input type="dc" class="form-control" id="dc" placeholder="Enter Doctor Charge">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="tp">Total Price:</label>
                    <div class="col-sm-6">
                      <input type="tp" class="form-control" id="tp" placeholder="Enter Total Price">
                    </div>
                  </div>

            

                <div class="form-group"> 
                  <div class="col-sm-offset-7 col-sm-5">
                    <button type="edit" class="btn btn-default">PRINT</button>
                  </div>
                </div>

                
              </form>

                </div>
            </div>
        </div>


       
      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Past Treatments</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <td>Date</td>
                  <td>Medicines</td>
                  <td>Price</td>
                  <td>Special Notes</td>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <td>Date</td>
                  <td>Medicines</td>
                  <td>Price</td>
                  <td>Special Notes</td>
                </tr>
              </tfoot>
              <tbody>
                <tr>
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
                </tr>
                <tr>
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
                </tr>
                <tr>
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





         