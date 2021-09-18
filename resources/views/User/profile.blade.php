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
    <link rel="icon" href="{{asset('user_assets/img/favicon.png')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('user_assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('user_assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('user_assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('user_assets/icon/themify-icons/themify-icons.css')}}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('user_assets/css/font-awesome-n.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user_assets/css/font-awesome.min.css')}}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('user_assets/css/jquery.mCustomScrollbar.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('user_assets/css/style.css')}}">
    <style>
    .col-form-label {
        padding: 5px 0px !important;
    }

    .form-group {
        margin: 1px 0px !important;
    }
    </style>
</head>

<body>
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
                                    <span>Welcome, User</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href={{url("User/logout")}}>
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
                    @include('User/sidebar')
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Profile</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item">Member Zone</li>
                                            <li class="breadcrumb-item"><a href="#">Profile</a>
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
                                                    <form action="" method="POST">
                                                       
                                                        @csrf
                                                        <div class="row" style="padding:10px;">
                                                            <div class="col-xl-1 col-md-1 col-sm-12"></div>
                                                            <div class="col-xl-10 col-md-10 col-sm-12">
                                                                <div class="card" style="padding:10px;">
                                                                    <div class="form-group row"
                                                                        style="background-color:rgba(136,0,0,0.7);border:1px dotted grey;border-radius:3px;">
                                                                        <h4 style="margin:auto 5px;color:white;">Sponser
                                                                            Details</h4>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label  name="sponser_id" class="col-sm-6 col-form-label" >
                                                                 
                                                                            <h6>
                                                                                Sponsor id: @if(isset($result)){{$result -> sponsor_id}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                Sponsor Name:  @if(isset($result)){{$result -> sponsor_name}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                Sponsor Contact:  @if(isset($result)){{$result -> sponsor_contact}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row"
                                                                        style="background-color:rgba(136,0,0,0.7);border:1px dotted grey;border-radius:3px;">
                                                                        <h4 style="margin:auto 5px;color:white;">My
                                                                            Details</h4>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                Name:  @if(isset($result)){{$result -> name}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                Date Of Birth:   @if(isset($result)){{$result -> dob}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                Gender:  @if(isset($result)){{$result -> gender}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                Marital Status:  @if(isset($result)){{$result -> marital_status}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                S/o / W/o / D/o:  @if(isset($result)){{$result -> s_name}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                Pin Code:*  @if(isset($result)){{$result -> pincode}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                Aadhar No:*   @if(isset($result)){{$result -> adhar_no}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                PAN Number:  @if(isset($result)){{$result -> pan_no}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                Mobile:  @if(isset($result)){{$result -> mobile}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                Area:  @if(isset($result)){{$result -> area}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                City:  @if(isset($result)){{$result -> city}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                State: @if(isset($result)){{$result -> status}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                E-mail:  @if(isset($result)){{$result -> email}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                Nominee Name: @if(isset($result)){{$result -> nominee_name}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-6 col-form-label">
                                                                            <h6>
                                                                                RelationShip:  @if(isset($result)){{$result -> relationship}} @endif
                                                                            </h6>
                                                                        </label>
                                                                        <div class="col-sm-6">
                                                                            <label class="col-sm-6 col-form-label">
                                                                                <h6></h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            </div>
                                                            <div class="col-xl-1 col-md-1 col-sm-12"></div>
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
    <script type="text/javascript" src="{{asset('user_assets/js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('user_assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('user_assets/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('user_assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- waves js -->
    <script src="{{asset('user_assets/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('user_assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- slimscroll js -->
    <script src="{{asset('user_assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!-- menu js -->
    <script src="{{asset('user_assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('user_assets/js/vertical/vertical-layout.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('user_assets/js/script.js')}}"></script>
</body>

</html>