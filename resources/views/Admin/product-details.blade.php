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
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                            <h5 class="m-b-10">Product Details</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="dashboard"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item">Product Zone</li>
                                            <li class="breadcrumb-item"><a href="#">Product Details</a>
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
                                                        <span class="text-success">{{Session::get('message')}}</span>
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
                                                        <div class="form-group row">
                                                            <div
                                                                class="col-xl-12 col-md-12 col-sm-12 d-flex flex-row-reverse">
                                                                <button class="btn waves-effect waves-light btn-success"
                                                                    style="border-radius:5px;margin:5px;"
                                                                    data-toggle="modal" data-target="#ad-product">Add
                                                                    Product</button>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive-xl" style="padding:0 10px;">
                                                            <table class="table table-responsive table-bordered"
                                                                rules="all" id="ContentPlaceHolder1_grd"
                                                                style="width:100%;border-collapse:collapse;"
                                                                cellspacing="0" cellpadding="4" border="1">
                                                                <tbody>
                                                                    <tr style="color:White;background-color:#000000;font-weight:bold;"
                                                                        align="center">
                                                                        <th scope="col">Product Name</th>
                                                                        <th scope="col">Investment</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                            align="center">Processing Charge</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                            align="center">Price</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                            align="center">Point</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                            align="center">Sponsor Value</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                            align="center">Bond Value</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                            align="center">Maturity Time</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:14px;"
                                                                            align="center">Action</th>
                                                                    </tr>
                                                                    @foreach ($data as $value)
                                                                    <tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;"
                                                                        align="center">
                                                                        <td>
                                                                            {{$value -> product}}
                                                                        </td>
                                                                        <td>
                                                                            <a target="_blank"
                                                                                href="editprofileadmin.aspx?id=GF100000">{{$value -> investment}}</a>
                                                                        </td>
                                                                        <td style="font-size:14px;height:30px;"
                                                                            align="center">
                                                                            <span
                                                                                id="ContentPlaceHolder1_grd_Label2_0">{{$value -> processing_charge}}</span>
                                                                        </td>
                                                                        <td style="font-size:14px;height:30px;"
                                                                            align="center">
                                                                            <span
                                                                                id="ContentPlaceHolder1_grd_Label1_0">{{$value -> price}}</span>
                                                                        </td>
                                                                        <td style="font-size:14px;height:30px;"
                                                                            align="center">{{$value -> point}}</td>
                                                                        <td style="font-size:14px;height:30px;"
                                                                            align="center">{{$value -> sponser_value}}</td>
                                                                        <td style="font-size:14px;height:30px;"
                                                                            align="center">{{$value -> bond_value}}</td>
                                                                        <td style="font-size:14px;height:30px;"
                                                                            align="center">{{$value -> maturity_time}}</td>
                                                                        <td style="font-size:14px;height:30px;"
                                                                            align="center">
                                                                            <svg value="{{url('Admin/getproduct')}}" id="{{$value -> id}}" aria-hidden="true" focusable="false"
                                                                                data-prefix="fas" data-icon="edit"
                                                                                class="svg-inline--fa fa-edit fa-w-18"
                                                                                role="img"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 576 512"
                                                                                data-toggle="modal"
                                                                                data-target="#edit-product"
                                                                                style="cursor:pointer;width:30px;">
                                                                                <path fill="currentColor"
                                                                                    d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z">
                                                                                </path>
                                                                            </svg>
                                                                            <a href="{{url('Admin/delete_product')}}/{{$value->id}}"><i class="fas fa-trash-alt fa-2x"
                                                                                    style="margin:auto;padding:0 5px"></i></a>
                                                                        </td>
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
                                                        <div class="form-group row">
                                                            <div
                                                                class="col-xl-12 col-md-12 col-sm-12 d-flex flex-row-reverse">
                                                                <button class="btn waves-effect waves-light btn-inverse"
                                                                    id="export" style="border-radius:5px;margin:5px;"><i
                                                                        class="fa fa-file-excel-o"
                                                                        aria-hidden="true"></i>Export TO Excel</button>
                                                            </div>
                                                        </div>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="edit-product" tabindex="-1"
                                                            role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                            aria-hidden="true">
                                                            <form action="{{url('Admin/update_product')}}" method="post">
                                                                @csrf
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLongTitle">Edit Product</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Enter Product Name:*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input type="hidden" name="pid" id="pid">
                                                                                <input type="text" name="product" id="product" class="form-control"
                                                                                    required placeholder="Product-Name"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Investment:*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input name="investment" id="investment" type="number"
                                                                                    class="form-control" required
                                                                                    placeholder="Investment"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Processing Charge*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input name="processing_charge" id="processing_charge" type="number"
                                                                                    class="form-control" required
                                                                                    placeholder="Processing Charge"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Enter Price*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input name="price" id="price" type="number"
                                                                                    class="form-control" required
                                                                                    placeholder="Price"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Enter Point:*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input name="point" id="point" type="number"
                                                                                    class="form-control" required
                                                                                    placeholder="Point"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Enter Sponsor Value:*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input name="sponser_value" id="sponser_value" type="number"
                                                                                    class="form-control" required
                                                                                    placeholder="Sponsor Value"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Enter Bond Value:*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input name="bond_value" id="bond_value" type="number"
                                                                                    class="form-control" required
                                                                                    placeholder="Bond Value"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Enter Maturity Time:*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input name="maturity_time" id="maturity_time" type="number"
                                                                                    class="form-control" required
                                                                                    placeholder="Maturity Time"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Update</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="ad-product" tabindex="-1"
                                                            role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                            aria-hidden="true">
                                                        <form action="{{url('Admin/add_product')}}" method="post">
                                                            @csrf
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLongTitle">Add Product</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Enter Product Name:*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input name="product" type="text" class="form-control"
                                                                                    required placeholder="Product-Name"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Investment:*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input id="investment" name="investment" type="number"
                                                                                    class="form-control" required
                                                                                    placeholder="Investment"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Processing Charge*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input id="processing_charge" name="processing_charge" type="number"
                                                                                    class="form-control" required
                                                                                    placeholder="Processing Charge"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Enter Price*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input id="price" name="price" type="number"
                                                                                    class="form-control" required
                                                                                    placeholder="Price"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Enter Point:*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input id="point" name="point" type="number"
                                                                                    class="form-control" required
                                                                                    placeholder="Point"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Enter Sponsor Value:*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input id="sponser_value" name="sponser_value" type="number"
                                                                                    class="form-control" required
                                                                                    placeholder="Sponsor Value"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Enter Bond Value:*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input id="bond_value" name="bond_value" type="number"
                                                                                    class="form-control" required
                                                                                    placeholder="Bond Value"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-5 col-form-label">
                                                                                <h6>Enter Maturity Time:*</h6>
                                                                            </label>
                                                                            <div class="col-sm-7">
                                                                                <input id="maturity_time" name="maturity_time" type="number"
                                                                                    class="form-control" required
                                                                                    placeholder="Maturity Time"
                                                                                    style="border-radius:3px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
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
        $(document).ready(function(){
           $('.fa-edit').click(function(e){
            var url = $('.fa-edit').attr('value');
            var id = $('.fa-edit').attr('id');
            // alert(id);
             e.preventDefault();
             $.ajax({
                url : url,
                method : 'POST',
                data:{id : id},
                dataType : 'JSON',
                headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
                success : function(data){
                   $('#pid').val(data.id);
                   $('#product').val(data.product);
                   $('#investment').val(data.investment);
                   $('#processing_charge').val(data.processing_charge);
                   $('#price').val(data.price);
                   $('#point').val(data.point);
                   $('#bond_value').val(data.bond_value);
                   $('#sponser_value').val(data.sponser_value);
                   $('#maturity_time').val(data.maturity_time);
                }
             });
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