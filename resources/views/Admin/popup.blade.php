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
    <link rel="icon" href="{{asset('admin_assets/img/favicon.png')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('admin_assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('admin_assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/icon/themify-icons/themify-icons.css')}}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/font-awesome-n.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/font-awesome.min.css')}}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/jquery.mCustomScrollbar.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/style.css')}}">
    <style>
    .col-md-2 {
        padding: 0px 7px !important;
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
                                    <!-- <img src="" class="img-radius" alt="User-Profile-Image"> -->
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
                                            <h5 class="m-b-10">News</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="dashboard"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#">Pop Up</a>
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
                                                    <div class="row justify-content-center">
                                                        <span class="text-success">{{Session::get('success')}}</span>
                                                        <span class="text-danger">{{Session::get('error')}}</span>
                                                    </div>
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
                                                    <form action="{{url('Admin/addPopup')}}" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <div class="col-xl-6 col-md-12 col-sm-12">
                                                                <div class="row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Title*:</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="title" class="form-control"
                                                                        required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-md-12 col-sm-12">
                                                                <div class="row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Select Screen*:</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <select name="screen" class="form-control"
                                                                            required>
                                                                            <option>Select</option>
                                                                            <option value="home">Home</option>
                                                                            <option value="member">Member</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-md-12 py-3 col-sm-12">
                                                                <div class="row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Upload Image*:</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="file" id="myFile" name="filename">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row d-flex flex-row-reverse">
                                                            <button class="btn waves-effect waves-light btn-success"
                                                                style="border-radius:5px;"><i
                                                                    class="icofont icofont-check-circled"></i>Submit</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                   
                                                </div>
                                            </div>
                                           
                                            <!--  sale analytics end -->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive-xl" style="padding:0 10px;">
                                                    <table 
                                                        style="width:100%;border-collapse:collapse;display:block-inline;"
                                                        cellspacing="0" cellpadding="4" border="1">
                                                        <tbody>
                                                            <tr style="color:White;background-color:#000000;font-weight:bold;"
                                                                align="center">
                                                                <th scope="col"
                                                                    style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                    align="left">SI No</th>
                                                                <th scope="col"
                                                                    style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                    align="left">Title</th>
                                                                <th scope="col"
                                                                    style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                    align="left">Image</th>
                                                                <th scope="col"
                                                                    style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                    align="left">Action</th>
                                                            </tr>
                                                            @php $a = 1; @endphp
                                                            @foreach ($data as $value)
                                                                <tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
                                                                    <td>{{$a++}}</td>
                                                                    <td>{{$value->title}}</td>
                                                                    <td><img src="../uploads/{{$value->file}}"</td>
                                                                    <td><a href="deletepopup/{{$value->id}}" class="btn btn-danger">Delete</a></td>
                                                                </tr>
                                                            @endforeach
                                                            <tr class="gridviewPager">
                                                                <td colspan="17">
                                                                    <table></table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
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
    <script type="text/javascript" src="{{asset('admin_assets/js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin_assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin_assets/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin_assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- waves js -->
    <script src="{{asset('admin_assets/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('admin_assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- slimscroll js -->
    <script src="{{asset('admin_assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!-- menu js -->
    <script src="{{asset('admin_assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/vertical/vertical-layout.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin_assets/js/script.js')}}"></script>
</body>

</html>