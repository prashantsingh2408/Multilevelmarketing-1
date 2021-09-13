<?php
foreach ($data as $data){}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <title>Golden Life Foundation </title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('admin_assets/img/favicon.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
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
                                    <!-- <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image"> -->
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
                                            <h5 class="m-b-10">Edit Profile</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="dashboard"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <!-- <li class="breadcrumb-item">Member Zone</li> -->
                                            <li class="breadcrumb-item"><a href="#">Edit Profile</a>
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
                                    <form method="post" action="{{url('Admin/update_user_profile')}}">
                                    @csrf
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
                                                            <input type="hidden" name="pid" value="{{$data -> id}}">
                                                            <div class="col-xl-12 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Name:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-2">
                                                                        <select name="salutation" class="form-control"
                                                                            required>
                                                                            <option value="Mr" {{$data -> salutation == 'Mr' ? 'selected' : ''}}>Mr.</option>
                                                                            <option value="Mrs" {{$data -> salutation == 'Mrs' ? 'selected' : ''}}>Mrs.</option>
                                                                            <option value="Ms" {{$data -> salutation == 'Ms' ? 'selected' : ''}}>Ms.</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" value="{{$data -> name}}" class="form-control" required
                                                                            name="name"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Password*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input value="{{$data -> password}}" name="password" type="text" class="form-control"
                                                                            required placeholder="password"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter DOB:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input value="{{$data -> dob}}" type="date" class="form-control" required
                                                                            name="dob"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Gender:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9" style="display:flex;">
                                                                        <div class="form-check" style="margin:0 5px;">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="gender" value="Male" id="Male" {{$data -> gender == 'Male' ? 'checked' : ''}}>
                                                                            <label class="form-check-label" for="Male">
                                                                                Male
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check" style="margin:0 5px;">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="gender" value="Female" id="Female" {{$data -> gender == 'Female' ? 'checked' : ''}}>
                                                                            <label class="form-check-label"
                                                                                for="Female">
                                                                                Female
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check" style="margin:0 5px;">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="gender" id="Others" value="Other" {{$data -> gender == 'Other' ? 'checked' : ''}}>
                                                                            <label class="form-check-label"
                                                                                for="Others">
                                                                                Others
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Marital Status:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9" style="display:flex;">
                                                                        <div class="form-check" style="margin:0 5px;">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="marital_status" value="Married" id="Married" {{$data -> marital_status == 'Married' ? 'checked' : ''}}>
                                                                            <label class="form-check-label"
                                                                                for="Married">
                                                                                Married
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check" style="margin:0 5px;">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="marital_status" value="Unmarried" id="Un-Married" {{$data -> marital_status == 'Unmarried' ? 'checked' : ''}}>
                                                                            <label class="form-check-label"
                                                                                for="Un-Married">
                                                                                Un-Married
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xl-12 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Guardian:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-2">
                                                                        <select name="s_name" class="form-control"
                                                                            required>
                                                                            <option value="S/o" {{$data -> s_name == 'S/o' ? 'selected' : ''}}>S/o.</option>
                                                                            <option value="D/o" {{$data -> s_name == 'D/o' ? 'selected' : ''}}>D/o.</option>
                                                                            <option value="W/o" {{$data -> s_name == 'W/o' ? 'selected' : ''}}>W/o.</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <input type="text" name="guardian" class="form-control" required
                                                                            placeholder="Name" value="{{$data -> guardian}}"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Mobile Number*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="number" name="mobile" value="{{$data -> mobile_no}}" class="form-control"
                                                                            required placeholder="Mobile-Number"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Address:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="area" value="{{$data -> area}}" class="form-control" required
                                                                            placeholder="Address"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter City:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="city" value="{{$data -> city}}" class="form-control"
                                                                            required placeholder="city"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Email:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="email" name="email" value="{{$data -> email}}" class="form-control"
                                                                            required placeholder="email"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Nominee Name:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" required
                                                                            placeholder="Nominee Name" name="nominee" value="{{$data -> nominee_name}}"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Relationship:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="relationship" value="{{$data -> relationship}}" class="form-control" required
                                                                            placeholder="Relationship"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Bank Name:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" required
                                                                            placeholder="Bank Name" value="{{$data -> bank_name }}" name="bank_name" value=""
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Account Name:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" value="{{$data -> name }}" name="account_name" required
                                                                            placeholder="Account Name"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Branch Name:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" value="{{$data -> branch_name }}" class="form-control" required name="branch_name"
                                                                            placeholder="Branch Name"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Account Type:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" required
                                                                            placeholder="Account Type" value="{{$data -> account_type }}"  name="accountType"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Account Number:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="number" class="form-control"
                                                                            required placeholder="Account Number" value="{{$data -> account_no }}" name="account_no"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter IFSC:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" required
                                                                            placeholder="IFSC" value="{{$data -> ifsc }}" name="IFSC"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xl-6 col-md-6 col-sm-6 text-center">
                                                                <button type="submit" class="btn waves-effect waves-light btn-success"
                                                                    style="border-radius:5px;margin:5px;"><i
                                                                        class="icofont icofont-check-circled"></i>Update</button>
                                                            </div>
                                                            <div class="col-xl-6 col-md-6 col-sm-6 text-center">
                                                                <button class="btn waves-effect waves-light btn-danger"
                                                                    style="border-radius:5px;margin:5px;"><i
                                                                        class="icofont icofont-check-circled"></i>Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  sale analytics end -->
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </form>
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
   <script type="text/javascript" src="{{ asset('admin_assets/js/jquery/jquery.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('admin_assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('admin_assets/js/popper.js/popper.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('admin_assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
   <!-- waves js -->
   <script src="{{ asset('admin_assets/pages/waves/js/waves.min.js') }}"></script>
   <!-- jquery slimscroll js -->
   <script type="text/javascript" src="{{ asset('admin_assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
   <!-- slimscroll js -->
   <script src="{{ asset('admin_assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
   <!-- menu js -->
   <script src="{{ asset('admin_assets/js/pcoded.min.js') }}"></script>
   <script src="{{ asset('admin_assets/js/vertical/vertical-layout.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('admin_assets/js/script.js') }}"></script>
   <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
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