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

                <h2 class="topic">Pet Profile</h2>
                

                <div class="line"></div>


                <form class="form-horizontal" action="/action_page.php">

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="name">Name:</label>
                      <div class="col-sm-6">
                        <input type="name" class="form-control" id="name" placeholder="Enter Name">
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="weight">Weight:</label>
                        <div class="col-sm-6">
                          <input type="weight" class="form-control" id="weight" placeholder="Enter Weight">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="age">Age:</label>
                        <div class="col-sm-6">
                          <input type="age" class="form-control" id="tp" placeholder="Enter Age">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="co">Color:</label>
                        <div class="col-sm-6">
                          <input type="co" class="form-control" id="co" placeholder="Enter color">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="specialnote">Special Notes:</label>
                        <div class="col-sm-6">
                          <input type="co" class="form-control" id="specialnote" placeholder="Enter Special Notes">
                        </div>
                      </div>

                

                    <div class="form-group"> 
                      <div class="col-sm-offset-7 col-sm-5">
                        <button type="edit" class="btn btn-default">Edit</button>
                      </div>
                    </div>

                    <div class="form-group"> 
                        <div class="col-sm-offset-7 col-sm-5">
                          <button type="save" class="btn btn-default">Save</button>
                        </div>
                      </div>
                  </form>

                  <div class = "treatments">
                        <div class="col-sm-offset-10 col-sm-5">
                    <form class="form-inline" action="/treatments">
                        <button class="btn btn-success" type="submit">Treatments</button>
                    </form>
                </div>
                </div>
                <div class = "periodic_treatments">
                        <div class="col-sm-offset-10 col-sm-5">
                    <form class="form-inline" action="/periodic">
                        <button class="btn btn-success" type="submit">Periodic_Treatments</button>
                    </form>
                </div>
                </div>
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