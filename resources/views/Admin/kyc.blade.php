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
    <link rel="icon" href="{{ asset('admin_assets/img/favicon.png')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('admin_assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('admin_assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/icon/themify-icons/themify-icons.css')}}" }>
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/font-awesome-n.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/font-awesome.min.css')}}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/jquery.mCustomScrollbar.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/style.css')}}">
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

                                    <span>Welcome, Admin</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="auth-normal-sign-in.php">
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
                                            <h5 class="m-b-10">KYC</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="dashboard"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item">Member Zone</li>
                                            <li class="breadcrumb-item"><a href="#">KYC</a>
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
                                                        <form id="form" value="{{url('Admin/getkycdetails')}}">
                                                        @csrf
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">
                                                                <h6>Enter Track ID*:</h6>
                                                            </label>
                                                            <div class="col-sm-10">
                                                                <input name="track_id" type="text" class="form-control" required
                                                                    placeholder="Enter Track ID"
                                                                    style="border-radius:3px;">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row d-flex flex-row-reverse">
                                                            <button id="btnSubmit" class="btn waves-effect waves-light btn-success"
                                                                style="border-radius:5px;margin:5px;" type="submit"
                                                                id="get-details"><i
                                                                    class="icofont icofont-check-circled"></i>Get
                                                                Details</button>
                                                        </div>
                                                        </form>
                                                        <div class="row justify-content-center"> <span class="text-danger" id="error_msg"></span></div>
                                                        <div class="table-responsive-xl details d-none"
                                                            style="padding:0 10px;">
                                                            <table id="table" class="table text-center table-responsive table-bordered"
                                                                rules="all" id="ContentPlaceHolder1_grd"
                                                                style="width:100%;border-collapse:collapse;display:inline-table;"
                                                                cellspacing="0" cellpadding="4" border="1">
                                                                <tbody>
                                                                    <tr style="color:White;background-color:#000000;font-weight:bold;"
                                                                        align="center">
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Pan Number</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Photo</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Pan File</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Aadhar</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Cheque</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Remark</th>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
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
    <script type="text/javascript" src="{{ asset('admin_assets/js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- waves js -->
    <script src="{{ asset('admin_assets/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('admin_assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('admin_assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- menu js -->
    <script src="{{ asset('admin_assets/js/pcoded.min.js')}}"></script>
    <script src="{{ asset('admin_assets/js/vertical/vertical-layout.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin_assets/js/script.js')}}"></script>
    <script>
    $(document).ready(function() {
        $('#btnSubmit').click(function(e) {
        var url = $('#form').attr('value');
        e.preventDefault();
        $.ajax({
           url : url,
           method : 'POST',
           data:$('#form').serialize(),
           dataType : 'JSON',
           success : function(data){
            if(data.status == 'success'){
                $('.details').removeClass('d-none');
                $('#table tr:last').after('<tr><td>'+data.pan_number+'</td><td><img src="/uploads/'+data.photo+'" height="40%" width="40%"></td><td><a href="../uploads/'+data.pan_file+'" target="_blank">View</a></td><td><a href="../uploads/'+data.adhar_file+'" target="_blank">View</a></td><td><a href="../uploads/'+data.cheque_file+'" target="_blank">View</a></td><td>'+data.remarks+'</td></tr>');
            }else{
                $('#error_msg').html(data.error);
            }
            }
        });
        });
    });
    </script>
</body>

</html>