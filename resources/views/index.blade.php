<!DOCTYPE html>
<html>
    <head>
        <title>Hooleh | @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/font-awesome.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/ionicons.css') }}">

        <link rel="stylesheet" href="{{ URL::asset('assets/plugins/datepicker/datepicker3.css') }}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ URL::asset('assets/dist/css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ URL::asset('assets/dist/css/skins/_all-skins.min.css') }}">
        
        

    </head>

    <body class="hold-transition skin-blue sidebar">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="index.php" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>H</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Hooleh</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                </nav>
            </header>
            <!-- NAVBAR  -->

            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="assets/dist/img/avatar.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Administrator</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Administrator</a>
                        </div>
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="?menu=home">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                <span class="pull-right-container">
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-wrench"></i>
                                <span>Maintenance</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="?menu=violation"><i class="fa fa-circle-o"></i> Violation</a></li>
                                <li><a href="?menu=enforcer"><i class="fa fa-circle-o"></i> Enforcer</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-chart"></i>
                                <span>Reports</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="?menu=violation_transaction"><i class="fa fa-circle-o"></i> Violation Reports</a></li>
                                <li><a href="?menu=driver"><i class="fa fa-circle-o"></i> Violent Drivers</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- SIDEBAR  -->

            <div class="content-wrapper">
                 @yield('content')
            </div>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2017 <a href="">Team Intern</a>.</strong> All rights reserved.
            </footer>
        </div>
        
        <script src="{{ URL::asset('assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- bootstrap datepicker -->
        <script src="{{ URL::asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
        <!-- DataTables -->
        <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
        <!-- SlimScroll -->
        <script src="{{ URL::asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ URL::asset('assets/plugins/fastclick/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ URL::asset('assets/dist/js/app.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ URL::asset('assets/dist/js/demo.js') }}"></script>
        <!-- page script -->
        <script>
        $(function () {
            $("#example1").DataTable();
            
        });
        </script>


    </body>
    
</html>
