<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>PetRays</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="/css/style1.css">
        <!--  <link rel="stylesheet" href="/css/bootstrap.css"> -->
        <!--  <script src="js/bootstrap.js"></script> -->
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        
    </head>
    <body>

        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div id="dismiss">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                </div>

                <div class="sidebar-header">
                    <h3>PetRays</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>Contents</p>
                    <li >
                        <a href="/homepage">Home</a>
                         
                    </li>
                    <li >
                        <a href="/clients">Clients</a>
                         
                    </li>
                    <li>
                        
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Analyse</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="/analyse_income">Income</a></li>
                            <li><a href="/analyse_clientbase">ClientBase</a></li>
                            <li><a href="/analyse_diseases">Diseases</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/appoinments">Appoinments</a>
                    </li>
                    <li>
                        <a href="/stock">Stock</a>
                    </li>
                </ul>

                
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Open Sidebar</span>
                            </button>
                        </div>

                       
                         <div class = "search">
                                    <form class="form-inline" action="/action_page.php">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                            <button class="btn btn-success" type="submit">Search</button>
                                    </form>
                                </div>
                    </div>
                </nav>

                <h2 class="topic">Treatments</h2>
                

                <div class="line"></div>

                    
                <form class="form-horizontal" action="/action_page.php">

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="date">Date:</label>
                      <div class="col-sm-6">
                        <input type="date" class="form-control" id="date" placeholder="Enter Date">
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="note">Note:</label>
                        <div class="col-sm-6">
                          <input type="note" class="form-control" id="note" placeholder="Note">
                        </div>
                      </div>

                      <div class="line"></div>

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="med">Name Of Medicine:</label>
                        <div class="col-sm-6">
                          <input type="med" class="form-control" id="med" placeholder="Enter Name Of Medicine">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="qua">Quantity:</label>
                        <div class="col-sm-6">
                          <input type="qua" class="form-control" id="qua" placeholder="Enter Quantity">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="price">Price:</label>
                        <div class="col-sm-6">
                          <input type="price" class="form-control" id="price" placeholder="Enter Price">
                        </div>
                      </div>

                      <div class="form-group">
                            <label class="control-label col-sm-2" for="dc">Doctor's Charge:</label>
                            <div class="col-sm-6">
                              <input type="dc" class="form-control" id="dc" placeholder="Enter Doctor's Charge ">
                            </div>
                          </div>

                          <div class="form-group">
                                <label class="control-label col-sm-2" for="total">Total:</label>
                                <div class="col-sm-6">
                                  <input type="total" class="form-control" id="total" placeholder="Enter Total ">
                                </div>
                              </div>
                        
    
                

                    <div class="form-group"> 
                      <div class="col-sm-offset-7 col-sm-5">
                        <button type="edit" class="btn btn-default">Print</button>
                      </div>
                    </div>
                    
                    <div class="line"></div>
                    <h2 class="topic">Treatment History</h2>
            </div>
        </div>



        <div class="overlay"></div>


        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
    </body>
</html>