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
                                            <h5 class="m-b-10">Product Wise Sales</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="dashboard"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item">Product Zone</li>
                                            <li class="breadcrumb-item"><a href="#">Product Wise Sales</a>
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
                                                        <div class="table-responsive-xl" style="padding:0 10px;">
                                                            <table class="table table-responsive table-bordered"
                                                                rules="all" id="ContentPlaceHolder1_grd"
                                                                style="width:100%;border-collapse:collapse;"
                                                                cellspacing="0" cellpadding="4" border="1">
                                                                <tbody>
                                                                    <tr style="color:White;background-color:#000000;font-weight:bold;"
                                                                        align="center">
                                                                        <th scope="col">Product Name</th>
                                                                        <th scope="col">Total Users</th>
                                                                    </tr>
                                                                    <tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;"
                                                                        align="center">
                                                                        <td>
                                                                            Package 500
                                                                        </td>
                                                                        <td>
                                                                            <a target="_blank"
                                                                                href="editprofileadmin.aspx?id=GF100000">67</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="grd"
                                                                        style="color:#284775;background-color:White;border-color:#8B91A0;"
                                                                        align="center">
                                                                        <td>
                                                                            Package 500
                                                                        </td>
                                                                        <td>
                                                                            <a target="_blank"
                                                                                href="editprofileadmin.aspx?id=GF100000">67</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="gridviewPager">
                                                                        <td colspan="17">
                                                                            <table></table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xl-12 col-md-12 col-sm-12 text-center"
                                                                style="padding:10px 0;">
                                                                <h4>Product Wise Searching</h4>
                                                            </div>
                                                            <div class="col-xl-10 col-md-10 col-sm-10">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">
                                                                        <h6>Select Product*:</h6>
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <select name="select" class="form-control"
                                                                            required>
                                                                            <option value="product">Select Product
                                                                            </option>
                                                                            <option value="Package 500">Package 500
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-md-2 col-sm-2 text-center">
                                                                <button class="btn waves-effect waves-light btn-success"
                                                                    style="border-radius:5px;" id="submit"><i
                                                                        class="icofont icofont-check-circled"></i>Submit</button>
                                                            </div>
                                                            <div class="table-responsive-xl product-table"
                                                                style="padding:0 10px;display:none;">
                                                                <table class="table table-responsive table-bordered"
                                                                    rules="all" id="ContentPlaceHolder1_grd"
                                                                    style="width:100%;border-collapse:collapse;"
                                                                    cellspacing="0" cellpadding="4" border="1">
                                                                    <tbody>
                                                                        <tr style="color:White;background-color:#000000;font-weight:bold;"
                                                                            align="center">
                                                                            <th scope="col"
                                                                                style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                                align="center">Customer Name</th>
                                                                            <th scope="col"
                                                                                style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                                align="center">Track Id</th>
                                                                            <th scope="col"
                                                                                style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                                align="center">Sponsor Name</th>
                                                                            <th scope="col"
                                                                                style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                                align="center">Sponsor ID</th>
                                                                            <th scope="col"
                                                                                style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                                align="center">Parent Name</th>
                                                                            <th scope="col"
                                                                                style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                                align="center">Parent ID</th>
                                                                            <th scope="col"
                                                                                style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                                align="center">Status</th>
                                                                            <th scope="col"
                                                                                style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                                align="center">Edit</th>
                                                                        </tr>
                                                                        <tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;"
                                                                            align="center">
                                                                            <td>
                                                                                Lorem, ipsum dolor
                                                                            </td>
                                                                            <td>
                                                                                <a target="_blank"
                                                                                    href="editprofileadmin.aspx?id=GF100000">GF100000</a>
                                                                            </td>
                                                                            <td style="font-size:14px;height:30px;"
                                                                                align="center">
                                                                                <span
                                                                                    id="ContentPlaceHolder1_grd_Label2_0">root</span>
                                                                            </td>
                                                                            <td style="font-size:14px;height:30px;"
                                                                                align="center">
                                                                                <span
                                                                                    id="ContentPlaceHolder1_grd_Label1_0">root</span>
                                                                            </td>
                                                                            <td style="font-size:14px;height:30px;"
                                                                                align="center">root</td>
                                                                            <td style="font-size:14px;height:30px;"
                                                                                align="center">root</td>
                                                                            <td style="font-size:14px;height:30px;"
                                                                                align="center">active</td>
                                                                            <td style="font-size:14px;height:30px;"
                                                                                align="center">
                                                                                <a href="details.php">
                                                                                    <svg aria-hidden="true"
                                                                                        focusable="false"
                                                                                        data-prefix="fas"
                                                                                        data-icon="info-circle"
                                                                                        class="svg-inline--fa fa-info-circle fa-w-16"
                                                                                        role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 512 512"
                                                                                        style="cursor: pointer;width:30px;">
                                                                                        <path fill="currentColor"
                                                                                            d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">
                                                                                        </path>
                                                                                    </svg>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="grd"
                                                                            style="color:#284775;background-color:White;border-color:#8B91A0;"
                                                                            align="center">
                                                                        </tr>
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
    <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js')}}"></script>

    <script>
    $(document).ready(function() {
        $("#submit").click(function() {
            $(".product-table").toggle(800);
        });
    });
    </script>
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