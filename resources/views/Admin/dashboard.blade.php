<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <title>Golden Life Foundation </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('admin_assets/img/favicon.png') }}" type="image/x-icon">
    <!-- Google font-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> -->
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('admin_assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/bootstrap/css/bootstrap.min.css') }}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('admin_assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/icon/themify-icons/themify-icons.css') }}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/font-awesome-n.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/font-awesome.min.css') }}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/jquery.mCustomScrollbar.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/style.css') }}">
    <style>
    .col-md-2 {
        padding: 0px 7px !important;
    }
    </style>
</head>

<body>
    <!-- Start Modal -->
    <div class="modal hide fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="offer"></h5>
              <button id="closeBtn" >Close</button>
            </div>
            <div class="modal-body">
                <img id="image" height="100%" width="100%">
            </div>
          </div>
        </div>
    </div>
    <!-- End Modal -->
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i
                                                class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i
                                                class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">

                                    <span>Welcome, Admin</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="logout">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('Admin/sidebar')
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="dashboard"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!--  sale analytics start -->
                                            <div class="col-xl-12 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <!-- <h5>Dashboard</h5> -->
                                                        <div class="card-header-right" style="padding:0px;">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i>
                                                                </li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Total Members</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Active Members</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Non-Active Members</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Total Amount</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Paid Amount</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Due Amount</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Total Joinings</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Today Joinings</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">This month Joinings</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Total Pin Issue</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Total Pin Used</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Total Pin</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Package 500 Total pin</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Package 500 Used Pin</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Package 500 Available Pin</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Total Income</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Today Income</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">This Month Income</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Today Login</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">This month Login</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Foundation Wallet</p>
                                                                            <h4 class="m-0">489</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  sale analytics end -->
                                            </div>
                                        </div>
                                        <!-- Page-body end -->
                                    </div>
                                    <div id="styleSelector"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('user_assets/js/jquery/jquery.min.js') ?? 'not found' }} "></script>
    <script type="text/javascript" src="{{asset('user_assets/js/jquery-ui/jquery-ui.min.js') ?? 'not found' }} "></script>
    <script type="text/javascript" src="{{asset('user_assets/js/popper.js/popper.min.js') ?? 'not found' }} "></script>
    <script type="text/javascript" src="{{asset('user_assets/js/bootstrap/js/bootstrap.min.js') ?? 'not found' }} "></script>
    <!-- waves js -->
    <script src="{{asset('user_assets/pages/waves/js/waves.min.js') ?? 'not found' }} "></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('user_assets/js/jquery-slimscroll/jquery.slimscroll.js') ?? 'not found' }} "></script>

    <!-- slimscroll js -->
    <script src="{{asset('user_assets/js/jquery.mCustomScrollbar.concat.min.js') ?? 'not found' }} "></script>

    <!-- menu js -->
    <script src="{{asset('user_assets/js/pcoded.min.js') ?? 'not found' }} "></script>
    <script src="{{asset('user_assets/js/vertical/vertical-layout.min.js') ?? 'not found' }} "></script>

    <script type="text/javascript" src="{{asset('user_assets/js/script.js') ?? 'not found' }} "></script>
        <script type="text/javascript">
            $('document').ready(function() {
                $(window).on('load', function(e) {
                    e.preventDefault();
                    $.ajax({
                       url : "getpopupadmin",
                       method : 'GET',
                       dataType : 'json',
                       success : function(result) {
                          if(result.status == 'success') {
                              $.each(result.data, function(key, value) {
                                 $('#offer').html(value.title);
                                 $('#image').attr('src','../uploads/'+value.file);
                                 $('#myModal').modal('show');
                                 $('#closeBtn').click(function(){
                                    $('#myModal').modal('hide');
                                 });
                              });
                          }
                       }
                    });
                });
            });
        </script>
</body>

</html>