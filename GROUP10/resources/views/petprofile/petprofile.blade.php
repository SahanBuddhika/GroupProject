<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PETRAYS</title>
       <link rel="stylesheet" href="/css/bootstrap.css">
      
    <!-- <script src="js/gulp.js"></script> -->
    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <link href="/css/bootstrapcore.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/css/customfonts.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="/css/pagelevel.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/customstyles.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="/homepage">PETRAYS ANIMAL CLINIC</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
           
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Inbox</a>
            <a class="dropdown-item" href="#">Reply</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Remove</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-users"></i>
            <span>Clients</span></a>
             <div class="dropdown-menu" aria-labelledby="pagesDropdown">
			            <a class="dropdown-item" href="/clients">Clients</a>
			            <div class="dropdown-divider"></div>
          		</div>
          
        </li>
		
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-chart-line"></i>
            <span>Analyse</span></a>
				 <div class="dropdown-menu" aria-labelledby="pagesDropdown">
			            <a class="dropdown-item" href="/analyse_income">Income</a>
			            <a class="dropdown-item" href="/analyse_clientbase">Client Base</a>
			            <a class="dropdown-item" href="/analyse_diseases"> Diseases</a>
			            <div class="dropdown-divider"></div>
          		</div>
        </li>
		
        <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-calendar-check"></i>
            <span>Appoinments</span></a>
                        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
			            <a class="dropdown-item" href="/appoinments">Appoinments</a>
			            <div class="dropdown-divider"></div>
          		</div>
        </li>
		
		  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
            <span>Stock</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
			            <a class="dropdown-item" href="/addstock">Add Stock</a>
			            <a class="dropdown-item" href="/viewstock">View Stock</a>
                        <a class="dropdown-item" href="/updatestock">Update Stock</a>
			            <div class="dropdown-divider"></div>
          		</div>
				 
        </li>
		
		
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">PET PROFILE</li>
          </ol>
         
          <div class="container">
      <div class="py-5 text-center">
            <!-- add the href to get image -->
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2 >Rox </h2>
            <p>Species:Dog</p>
            
          </div><!-- /.col-lg-4 -->
    
         
        

      <div class="card mb-3">


                 <div class="card-header">
                    <div class="card-body">
                    <form class="form-horizontal" action="/action_page.php">

                   <!-- <i class="far fa-user-circle" style="font-size:100px " ></i> -->


                     <div class="card mb-3">
                    <div class="card-header">
                    <div class="card-body">  
                   <div class="form-group">
                        <label for="disabledInput" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="disabledInput" type="text" placeholder="" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="disabledInput" class="col-sm-2 control-label">Weight</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="disabledInput" type="text" placeholder="" disabled>
                        </div>
                    </div>

                      <div class="form-group">
                        <label for="disabledInput" class="col-sm-2 control-label">Age</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="disabledInput" type="text" placeholder="" disabled>
                        </div>
                    </div>

                      <div class="form-group">
                        <label for="disabledInput" class="col-sm-2 control-label">Color</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="disabledInput" type="text" placeholder="" disabled>
                        </div>
                    </div>
                    </div>
                    </div>


                     <div class="card mb-3">
                    <div class="card-header">
                    <div class="card-body">
                   <div class="form-group">
                        <label for="disabledInput" class="col-sm-2 control-label">Special Notes</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="disabledInput" type="input" placeholder="" disabled>
                            
                        </div>
                        <div class="form-group"> 
                      <div class="col-sm-offset-7 col-sm-5">
                        <button type="edit" class="btn btn-default">Edit</button>
                      </div>
                    </div>
                    <div class="form-group"> 
                      <div class="col-sm-offset-7 col-sm-5">
                        <button type="edit" class="btn btn-default">Save</button>
                      </div>
                    </div>
                    </div>

                    </div>
                    </div>
                    </div>
                   </div>
                 
                    
                  </form>

                    </div>
                </div>
                <a href="/periodic">
                    <button  type="button" class="btn btn-primary btn-block" >Periodic</button>
                </a>
               <a href="/treatments">
                    <button  type="button" class="btn btn-success btn-block" >Treatments</button>
                </a>
              
            </div>

           

          


          
    
    

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
             
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="/auth">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="js/bootstrap.js"></script> 
    <script src="js/botstrapcore.js"></script>
    <script src="js/botstrapcore2.js"></script>
    

    <!-- Core plugin JavaScript-->
    <script src="js/coreplugin.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="js/pagelevelplugin1.js"></script>
    <script src="js/pagelevelplugin2.js"></script>
    <script src="js/pagelevelplugin3.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/customscript.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demoscripts.js"></script>
    <script src="js/demoscripts2.js"></script>

  </body>

</html>
