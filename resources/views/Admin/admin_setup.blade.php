<?php
if(isset($User)){
    foreach ($User as $value){}
}
?>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/icon/themify-icons/themify-icons.css')}}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/font-awesome-n.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/font-awesome.min.css')}}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/jquery.mCustomScrollbar.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/style.css')}}">
    <style>
    table {
        table-layout: fixed;
        width: 100%;
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
                                            <h5 class="m-b-10">Admin Setup</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="dashboard"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item">Member Zone</li>
                                            <li class="breadcrumb-item"><a href="#">New Registration</a>
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
                                                    <div class="card-block">
                                                    <form action="add_setup" method="post">
                                                        @csrf
                                                       <div class="row">
                                                           <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">TDS Deduction (With PAN - in %age)*</label>
                                                                    @if(isset($value))
                                                                        <input type="text" value="{{$value->tds_deduction_with_pan ? $value->tds_deduction_with_pan : ''}}" name="tds_deduction" class="form-control" placeholder="TDS Deduction with PAN">
                                                                    @else
                                                                        <input type="text" name="tds_deduction" class="form-control" placeholder="TDS Deduction with PAN">
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Admin Charges (With PAN - in %age)*</label>
                                                                    @if(isset($value))
                                                                    <input type="text" value="{{$value->admin_charge_with_pan ? $value->admin_charge_with_pan : ''}}" name="admin_charge" class="form-control" placeholder="Admin Charges with PAN">
                                                                    @else
                                                                    <input type="text" name="admin_charge" class="form-control" placeholder="Admin Charges with PAN">
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Payout Limit (in Rupees)*</label>
                                                                    @if(isset($value))
                                                                    <input type="text" value="{{$value->payout_limit ? $value->payout_limit : ''}}" name="payout_limit" class="form-control" placeholder="Payout Limit">
                                                                    @else
                                                                    <input type="text" name="payout_limit" class="form-control" placeholder="Payout Limit">
                                                                    @endif
                                                                </div>
                                                           </div>
                                                           <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">TDS Deduction (Without PAN - in %age)*</label>
                                                                    @if(isset($value))
                                                                    <input type="text" value="{{$value->tds_deduction_without_pan ? $value->tds_deduction_without_pan : ''}}" name="tds_deductionwp" class="form-control" placeholder="TDS Deduction without PAN">
                                                                    @else
                                                                    <input type="text" name="tds_deductionwp" class="form-control" placeholder="TDS Deduction without PAN">
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Admin Charges (Without PAN - in %age)*</label>
                                                                    @if(isset($value))
                                                                    <input type="text" value="{{$value->admin_charge_without_pan ? $value->admin_charge_without_pan : ''}}" name="admin_chargewp" class="form-control" placeholder="Admin Charges without PAN">
                                                                    @else
                                                                    <input type="text" name="admin_chargewp" class="form-control" placeholder="Admin Charges without PAN">
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for=""></label>
                                                                    <input type="submit"  class="form-control btn btn-success col-md-3 my-4" value="UPDATE">
                                                                </div>
                                                            </div>
                                                       </div>
                                                    </form>
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
    <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <script>
    let button = document.querySelector("#export");
    button.addEventListener("click", e => {
        let table1 = document.querySelector("#ContentPlaceHolder1_grd");
        TableToExcel.convert(table1);
    });
    </script>
    <script>
    function printData() {
        var divToPrint = document.getElementById("TABLE");
        newWin = window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }

    $('#print').on('click', function() {
        printData();
    })
    </script>
</body>

</html>