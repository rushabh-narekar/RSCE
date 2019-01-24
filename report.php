<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>College Data</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
   


    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">DTE-ADMIN</a>
            </div>
           
        </div>
    </nav>
    
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/meet-profile.jpg" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">VATSHAL PANCHAL</div>
                    <div class="email">vatshalpanchal027@gmail.com</div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons">domain</i>
                            <span>Institute</span>
                        </a>
                    </li>
                     <li>
                        <a href="pages/examples/complain.php">
                            <i class="material-icons">announcement</i>
                            <span>Complain Desk</span>
                        </a>
                    </li>
                      <li>
                        <a href="pages/examples/contact_us.php"><i class="material-icons">contacts</i><span>Contact Us</span></a>
                    </li>
                    <li>
                        <a href="pages/examples/about.php"><i class="material-icons">info</i><span>About Us</span></a>
                    </li>
                    <li>
                        <a href="pages/examples/sign-in.php"><i class="material-icons">phonelink_erase</i><span>Sign Out</span></a>
                    </li>
                    
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
           </div>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>College Name</th>
                                            <th>Contact No.</th>
                                            <th>Age</th>
                                            <th>Project Field</th>
                                            <th>Project Title</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                         <th>Student Name</th>
                                            <th>College Name</th>
                                            <th>Contact No.</th>
                                            <th>Age</th>
                                            <th>Project Field</th>
                                            <th>Project Title</th>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>VIJAY</td>
                                            <td>LD</td>
                                            <td>909090990</td>
                                            <td>20</td>
                                            <td>Research</td>
                                            <td>RSCE</td>
                                        </tr>
                                        <tr>
                                            <td>VIJAY</td>
                                            <td>LD</td>
                                            <td>909090990</td>
                                            <td>20</td>
                                            <td>Research</td>
                                            <td>RSCE</td>
                                        </tr>
                                        <tr>
                                            <td>VIJAY</td>
                                            <td>LD</td>
                                            <td>909090990</td>
                                            <td>20</td>
                                            <td>Research</td>
                                            <td>RSCE</td>
                                        </tr>
                                        <tr>
                                            <td>VIJAY</td>
                                            <td>LD</td>
                                            <td>909090990</td>
                                            <td>20</td>
                                            <td>Research</td>
                                            <td>RSCE</td>
                                        </tr>
                                        <tr>
                                            <td>VIJAY</td>
                                            <td>LD</td>
                                            <td>909090990</td>
                                            <td>20</td>
                                            <td>Research</td>
                                            <td>RSCE</td>
                                        </tr>
                                        <tr>
                                            <td>VIJAY</td>
                                            <td>LD</td>
                                            <td>909090990</td>
                                            <td>20</td>
                                            <td>Research</td>
                                            <td>RSCE</td>
                                        </tr>
                                        <tr>
                                            <td>VIJAY</td>
                                            <td>LD</td>
                                            <td>909090990</td>
                                            <td>20</td>
                                            <td>Research</td>
                                            <td>RSCE</td>
                                        </tr>
                                        <tr>
                                            <td>VIJAY</td>
                                            <td>LD</td>
                                            <td>909090990</td>
                                            <td>20</td>
                                            <td>Research</td>
                                            <td>RSCE</td>
                                        </tr>
                                        <tr>
                                            <td>VIJAY</td>
                                            <td>LD</td>
                                            <td>909090990</td>
                                            <td>20</td>
                                            <td>Research</td>
                                            <td>RSCE</td>
                                        </tr>
                                        <tr>
                                            <td>VIJAY</td>
                                            <td>LD</td>
                                            <td>909090990</td>
                                            <td>20</td>
                                            <td>Research</td>
                                            <td>RSCE</td>
                                        </tr>
                                        <tr>
                                            <td>VIJAY</td>
                                            <td>LD</td>
                                            <td>909090990</td>
                                            <td>20</td>
                                            <td>Research</td>
                                            <td>RSCE</td>
                                        </tr>
                                        <tr>
                                            <td>VIJAY</td>
                                            <td>LD</td>
                                            <td>909090990</td>
                                            <td>29</td>
                                            <td>Research</td>
                                            <td>RSCE</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>

    </section>























    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
