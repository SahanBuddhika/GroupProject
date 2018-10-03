@extends('layout')

@section('content')
<div class="container">
    <!-- Breadcrumbs-->
 <ol class="breadcrumb">
    <li class="breadcrumb-item active">PERIODIC TREATMENTS</li>
  </ol>
 
  <div class="card mb-3">
                    <div class="card-header">
                         <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Periodic_Treatments
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="/periodic">periodic</a></li>
                    <li><a href="/dewarming">Dewarming</a></li>
                    <li><a href="/other">Other</a></li>
                  </ul>
                </div>
                    </div>
                </div>

    <div class="card mb-3">
        <div class="card-header">
            <div class="card-body">
            <form class="form-horizontal" action="/action_page.php">


                 <div class="card-header">
                         <div class="dropdown">
                             <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Medicine
                             <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="/periodic"></a></li>
                                <li><a href="/dewarming"></a></li>
                                <li><a href="/other"></a></li>
                               </ul>
                        </div>
                </div>
            

            <div class="form-group">
              <label class="control-label col-sm-2" for="quantity">Quantity:</label>
              <div class="col-sm-6">
                <input type="quantity" class="form-control" id="quantity" placeholder="Enter Quantity">
              </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="price">Price:</label>
                <div class="col-sm-6">
                  <input type="price" class="form-control" id="price" placeholder="Enter Price">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="duration"> Duration:</label>
                <div class="col-sm-6">
                  <input type="duration" class="form-control" id="duration" placeholder="Enter Duration">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="sn">Special Notes:</label>
                <div class="col-sm-6">
                  <input type="sn" class="form-control" id="sn" placeholder="Enter Doctor Charge">
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
              <td>Stsrt Date</td>
              <td>End Date</td>
              <td>Informations</td>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <td>Start Date</td>
              <td>End Date</td>
              <td>Informations</td>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td> 
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td> 
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
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





 