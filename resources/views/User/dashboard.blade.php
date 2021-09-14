<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <title>Golden Life Foundation </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('user_assets/img/favicon.png') ?? 'not found' }} " type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('user_assets/pages/waves/css/waves.min.css') ?? 'not found' }} " type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('user_assets/css/bootstrap/css/bootstrap.min.css') ?? 'not found' }} ">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('user_assets/pages/waves/css/waves.min.css') ?? 'not found' }} " type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('user_assets/icon/themify-icons/themify-icons.css') ?? 'not found' }} ">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('user_assets/css/font-awesome-n.min.css') ?? 'not found' }} ">
    <link rel="stylesheet" type="text/css" href="{{asset('user_assets/css/font-awesome.min.css') ?? 'not found' }} ">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('user_assets/css/jquery.mCustomScrollbar.css') ?? 'not found' }} ">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('user_assets/css/style.css') ?? 'not found' }} ">
    <style>
        .col-md-2 {
            padding: 0px 7px !important;
        }

        .avatar-preview {
            display: flex;
            justify-content: center;
        }

        .h6 {
            margin-bottom: 0px !important;
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
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
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
                                        <a href={{url("User/logout") ?? 'not found' }} >
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
                                            <h5 class="m-b-10">Dashboard</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
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
                                                        <div class="form-group row">
                                                            <div class="col-md-3 col-sm-12">
                                                                <!-- Profile Image -->
                                                                <div class="box box-primary">
                                                                    <div class="box-body box-profile">
                                                                        <div>
                                                                            <div class="avatar-preview">
                                                                                <img src="{{url('images/' . $data->pic)}}" class="profile-user-img img-responsive img-circle" id="imagePreview" src="#" alt="User profile picture" style="height:128px;width:128px;border:1px solid black;">
                                                                            </div>
                                                                            <div class="avatar-upload">
                                                                                <center>
                                                                                    <div class="avatar-edit">
                                                                                        <form action="{{url('User/dashboard')}}" method="post" id="form-image" enctype="multipart/form-data">
                                                                                        @csrf
                                                                                            <input name='file' type='file' id="imageUpload" accept=".png, .jpg, .jpeg" /><button>Upload</button>
                                                                                        </form>
                                                                                    </div>
                                                                                </center>
                                                                            </div>
                                                                            <ul class="list-group list-group-unbordered">
                                                                                <li class="list-group-item">
                                                                                    <h6><b>Name:</b></h6>
                                                                                    <h6 class="pull-right">
                                                                                        {{$data -> name ?? 'not found' }} 
                                                                                    </h6>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <h6><b>User ID:</b></h6>
                                                                                    <h6 class="pull-right">
                                                                                        {{$data -> member_id ?? 'not found' }} 
                                                                                    </h6>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <h6><b>Pan:</b></h6>
                                                                                    <h6 class="pull-right">
                                                                                    {{$data -> pan ?? 'not found' }} 
                                                                                    </h6>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <h6><b>Status:</b></h6>
                                                                                    <h6 class="pull-right">
                                                                                        {{$data -> status ?? 'not found' }} 
                                                                                    </h6>
                                                                                </li>
                                                                            </ul>
                                                                            <a href="#" class="btn btn-danger btn-block"><b>Click
                                                                                    To View Plan</b></a>
                                                                        </div>
                                                                        <!-- /.box-body -->
                                                                    </div>
                                                                    <!-- /.box -->

                                                                </div>
                                                            </div>
                                                            <div class=" col-xl-9 col-md-9 col-sm-12">
                                                                <div class="card">
                                                                    <div class="row form-group" style="margin:10px;padding:10px;border:1px solid black;">
                                                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                                                            <div class="row form-group">
                                                                                <div class="col-xl-5 col-md-5 col-sm-5">
                                                                                    <div class="title">
                                                                                        <h6><u>Joining Date:
                                                                                            </u>{{$data -> joining_date_from ?? 'not found' }} 
                                                                                            <h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-9 col-md-9 col-sm-9">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row form-group">
                                                                                <div class="col-xl-5 col-md-5 col-sm-5">
                                                                                    <div class="title">
                                                                                        <h6><u>Activation
                                                                                                Date:
                                                                                            </u>{{$data -> activation_date_from ?? 'not found' }} 
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-9 col-md-9 col-sm-9">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row form-group">
                                                                                <div class="col-xl-5 col-md-5 col-sm-5">
                                                                                    <div class="title">
                                                                                        <h6><u>Referral Link:
                                                                                            </u>
                                                                                            {{$data -> referal_link ?? 'not found' }} 
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-9 col-md-9 col-sm-9">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row form-group">
                                                                                <div class="col-xl-5 col-md-5 col-sm-5">
                                                                                    <div class="title">
                                                                                        <h6><u>Sponsor ID: </u>
                                                                                            {{$data -> sponsor_id ?? 'not found' }} 
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-9 col-md-9 col-sm-9">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row form-group" style="margin:10px;">
                                                                        <div class="col-xl-12 col-md-12 col-sm-12" style="border:1px solid black;padding:0px">
                                                                            <table class="table">
                                                                                <thead class="thead-dark">
                                                                                    <tr>
                                                                                        <th scope="col">
                                                                                            <center>News</center>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td style="padding: 10px !important;">
                                                                                            <textarea style="width:100%;height:135px;"> {{$data -> sponsor_id ?? 'not found' }} </textarea>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">E-Wallet</p>
                                                                            <h4 class="m-0">{{$data -> e_wallet ?? '0' }}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="card bg-c-blue total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Received Amount</p>
                                                                            <h4 class="m-0">{{$data -> recevied_amount ?? '0' }}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="card bg-c-green total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Due Amount</p>
                                                                            <h4 class="m-0">{{$data -> due_amount ?? '0' }}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="card bg-c-yellow total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Direct Team</p>
                                                                            <h4 class="m-0">{{$data -> direct_team ?? '0' }}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Available Pin</p>
                                                                            <h4 class="m-0">{{$data -> available_pin ?? '0' }}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="card bg-c-blue total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Direct Income</p>
                                                                            <h4 class="m-0">{{$data -> direct_income ?? '0' }}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="card bg-c-green total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Level Income</p>
                                                                            <h4 class="m-0">{{$data -> level_income ?? '0' }}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="card bg-c-yellow total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Rank Level Income</p>
                                                                            <h4 class="m-0">{{$data -> rank_level_income ?? '0' }}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="card bg-c-red total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Auto Pool Income</p>
                                                                            <h4 class="m-0">{{$data -> auto_pool_income ?? '0' }}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="card bg-c-blue total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Total Team</p>
                                                                            <h4 class="m-0">{{$data -> total_team ?? '0' }}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="card bg-c-green total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Daily Joining Members</p>
                                                                            <h4 class="m-0">{{$data -> daily_joining_members ?? '0' }}</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6">
                                                                <div class="card bg-c-yellow total-card">
                                                                    <div class="card-block">
                                                                        <div class="text-left">
                                                                            <p class="m-0">Daily Active Member</p>
                                                                            <h4 class="m-0">{{$data -> daily_active_member ?? '0' }}</h4>
                                                                        </div>
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
</body>

</html>