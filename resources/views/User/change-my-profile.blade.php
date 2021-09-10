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
                                            <h5 class="m-b-10">Change My Profile</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item">Member Zone</li>
                                            <li class="breadcrumb-item"><a href="#">Change My Profile</a>
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
                                                    <form action="{{url('User/change-my-profile')}}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{($result->id)}}">
                                                        <div class="card-block">
                                                            <div class="form-group row" style="padding:10px 0px;">
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-2 col-md-2 col-sm-12 col-form-label ">
                                                                            <h6>Name*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-10 col-md-10 col-sm-12">
                                                                            <div class="form-group row">
                                                                                <div class="col-xl-4 col-md-4 col-sm-12"
                                                                                    style="padding:1px;">
                                                                                    <select name="select"
                                                                                        class="form-control" required>
                                                                                        <option value="opt1">MR.
                                                                                        </option>
                                                                                        <option value="opt2">MRS.
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-xl-8 col-md-8 col-sm-12"
                                                                                    style="padding:1px;">
                                                                                    <input type="text"
                                                                                        placeholder="Name"
                                                                                        value="{{($result->name)}}"
                                                                                        name="name" class="form-control"
                                                                                        required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-md-3 col-sm-12 col-form-label">
                                                                            <h6>D.O.B*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-9 col-md-9 col-sm-12">
                                                                            <div class="form-group row">
                                                                                <div class="col-xl-4 col-md-4 col-sm-4"
                                                                                    style="padding:1px;">
                                                                                    <select name="dob_day"
                                                                                        class="form-control" required>
                                                                                        <option value="input">Day
                                                                                        </option>
                                                                                        @for ($i = 1; $i <= 31; $i++)
                                                                                            <option value="{{ $i }}">
                                                                                            {{ $i }}
                                                                                            </option>
                                                                                            @endfor

                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-xl-4 col-md-4 col-sm-4"
                                                                                    style="padding:1px;">
                                                                                    <select name="dob_month"
                                                                                        class="form-control" required>
                                                                                        <option value="opt1">Month
                                                                                        </option>
                                                                                        @for ($i = 1; $i <= 12; $i++)
                                                                                            <option value="{{ $i }}">
                                                                                            {{ $i }}
                                                                                            </option>
                                                                                            @endfor
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-xl-4 col-md-4 col-sm-4"
                                                                                    style="padding:1px;">
                                                                                    <select name="dob"
                                                                                        class="form-control" required>
                                                                                        <option value="opt1">Year
                                                                                        </option>
                                                                                        @for ($i = 1900; $i <= 2021;
                                                                                            $i++) <option
                                                                                            value="{{ $i }}">
                                                                                            {{ $i }}
                                                                                            </option>
                                                                                            @endfor
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="padding:10px 0px;">
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-md-3 col-sm-12 col-form-label">
                                                                            <h6>Gender*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-9 col-md-9 col-sm-12">
                                                                            <div class="form-group row">
                                                                                <div class="col-xl-4 col-md-4 col-sm-4"
                                                                                    style="padding:1px;">
                                                                                    <div
                                                                                        class="form-check form-check-inline">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="gender"
                                                                                            id="inlineRadio1"
                                                                                            value="option1">
                                                                                        <label class="form-check-label"
                                                                                            for="inlineRadio1">Male</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-4 col-md-4 col-sm-4"
                                                                                    style="padding:1px;">
                                                                                    <div
                                                                                        class="form-check form-check-inline">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="gender"
                                                                                            id="inlineRadio2"
                                                                                            value="option2">
                                                                                        <label class="form-check-label"
                                                                                            for="inlineRadio2">Female</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-4 col-md-4 col-sm-4"
                                                                                    style="padding:1px;">
                                                                                    <div
                                                                                        class="form-check form-check-inline">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="gender"
                                                                                            id="inlineRadio3"
                                                                                            value="option3">
                                                                                        <label class="form-check-label"
                                                                                            for="inlineRadio3">Others</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-md-3 col-sm-12 col-form-label">
                                                                            <h6>Marital Status*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-9 col-md-9 col-sm-12">
                                                                            <div class="form-group row">
                                                                                <div class="col-xl-6 col-md-6 col-sm-6"
                                                                                    style="padding:1px;">
                                                                                    <div
                                                                                        class="form-check form-check-inline">
                                                                                        <input class="form-check-input"
                                                                                            type="radio"
                                                                                            name="maritalstatus"
                                                                                            id="inlineRadio1"
                                                                                            value="option1">
                                                                                        <label class="form-check-label"
                                                                                            for="inlineRadio1">Un-Married</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-6 col-md-6 col-sm-6"
                                                                                    style="padding:1px;">
                                                                                    <div
                                                                                        class="form-check form-check-inline">
                                                                                        <input class="form-check-input"
                                                                                            type="radio"
                                                                                            name="maritalstatus"
                                                                                            id="inlineRadio2"
                                                                                            value="option2">
                                                                                        <label class="form-check-label"
                                                                                            for="inlineRadio2">Married</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="padding:10px 0px;">
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-md-3 col-sm-12 col-form-label">
                                                                            <h6>S/o / D/o / W/o*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-9 col-md-9 col-sm-12"
                                                                            style="padding:1px;">
                                                                            <input type="text" placeholder="Name"
                                                                                name="s_name"
                                                                                value="{{($result->name)}}"
                                                                                class=" form-control" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-md-3 col-sm-12 col-form-label">
                                                                            <h6>Pan Number*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-9 col-md-9 col-sm-12"
                                                                            style="padding:1px;">
                                                                            <input type="text"
                                                                                placeholder="Enter Your Pan Number"
                                                                                value="{{($result->pan_no)}}"
                                                                                name="pan no" class="form-control"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="padding:10px 0px;">
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-md-3 col-sm-12 col-form-label">
                                                                            <h6>Mobile*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-9 col-md-9 col-sm-12"
                                                                            style="padding:1px;">
                                                                            <input type="number"
                                                                                placeholder="Enter your Mobile No"
                                                                                value="{{($result->mobile_no)}}"
                                                                                name="mobile_no" class="form-control"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-md-3 col-sm-12 col-form-label">
                                                                            <h6>Area*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-9 col-md-9 col-sm-12"
                                                                            style="padding:1px;">
                                                                            <input type="text" placeholder="Area"
                                                                                value="{{($result->area)}}" name="area"
                                                                                class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="padding:10px 0px;">
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-md-3 col-sm-12 col-form-label">
                                                                            <h6>City*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-9 col-md-9 col-sm-12"
                                                                            style="padding:1px;">
                                                                            <input type="text" placeholder="City"
                                                                                value="{{($result->city)}}" name="city"
                                                                                class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-md-3 col-sm-12 col-form-label">
                                                                            <h6>PinCode*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-9 col-md-9 col-sm-12"
                                                                            style="padding:1px;">
                                                                            <input type="number" placeholder="PinCode"
                                                                                value="{{($result->pincode)}}"
                                                                                name="pincode" class="form-control"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="padding:10px 0px;">
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-md-3 col-sm-12 col-form-label">
                                                                            <h6>Aadhar No.*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-9 col-md-9 col-sm-12"
                                                                            style="padding:1px;">
                                                                            <input type="number"
                                                                                placeholder="Aadhar Number"
                                                                                value="{{($result->adhar_no)}}"
                                                                                name="adhar_no" class="form-control"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-md-3 col-sm-12 col-form-label">
                                                                            <h6>State*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-9 col-md-9 col-sm-12"
                                                                            style="padding:1px;">
                                                                            <input type="text" placeholder="State"
                                                                                value="{{($result->state)}}"
                                                                                name="state" class="form-control"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="padding:10px 0px;">
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-md-3 col-sm-12 col-form-label">
                                                                            <h6>Email*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-9 col-md-9 col-sm-12"
                                                                            style="padding:1px;">
                                                                            <input type="email" placeholder="Email"
                                                                                value="{{($result->email)}}"
                                                                                name="email" class="form-control"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-md-3 col-sm-12 col-form-label">
                                                                            <h6>Nominee Name*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-9 col-md-9 col-sm-12"
                                                                            style="padding:1px;">
                                                                            <input type="text" placeholder="Nomiee Name"
                                                                                value="{{($result-> nominee_name)}}"
                                                                                name="namiee name" class="form-control"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="padding:10px 0px;">
                                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-xl-3 col-md-3 col-sm-12 col-form-label">
                                                                            <h6>Relationship*:</h6>
                                                                        </label>
                                                                        <div class="col-xl-9 col-md-9 col-sm-12"
                                                                            style="padding:1px;">
                                                                            <input type="text"
                                                                                placeholder="Relationship"
                                                                                value="{{($result->relationship)}}"
                                                                                name="relationship" class="form-control"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-md-6 col-sm-12">
                                                                <div
                                                                    class="form-group row d-flex justify-content-around">
                                                                    <button
                                                                        class="btn waves-effect waves-light btn-success"
                                                                        id="export"
                                                                        style="border-radius:5px;margin:5px;">Update</button>
                                                                    <button
                                                                        class="btn waves-effect waves-light btn-danger"
                                                                        style="border-radius:5px;margin:5px;"><i
                                                                            class="icofont icofont-check-circled"></i>Cancel</button>
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