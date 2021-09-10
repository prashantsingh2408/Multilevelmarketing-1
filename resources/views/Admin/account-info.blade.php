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
    <link rel="icon" href="{{ url('admin_assets/img/favicon.png')}}" type="image/x-icon">
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

    svg {
        height: 20px;
        padding: 2px;
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
                                            <h5 class="m-b-10">Account Information</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item">Admin Zone</li>
                                            <li class="breadcrumb-item"><a href="#">Account Information</a>
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
                                                        <div class="form-group row d-flex flex-row-reverse">
                                                            <button class="btn waves-effect waves-light btn-success"
                                                                style="border-radius:5px;" data-toggle="modal"
                                                                data-target="#ad-admin">
                                                                <svg aria-hidden="true" focusable="false"
                                                                    data-prefix="fas" data-icon="user-plus"
                                                                    class="svg-inline--fa fa-user-plus fa-w-20"
                                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 640 512" style="padding-top:8px;">
                                                                    <path fill="currentColor"
                                                                        d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                                                                    </path>
                                                                </svg>
                                                                Add Admin</button>
                                                        </div>
                                                         <!-- Modal -->
                                                                        <div class="modal fade" id="ad-admin"
                                                                            tabindex="-1" role="dialog"
                                                                            aria-labelledby="exampleModalCenterTitle"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog modal-dialog-centered"
                                                                                role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="exampleModalLongTitle">
                                                                                            Add Admin</h5>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <span
                                                                                                aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form
                                                                                            action={{ url('Admin/account-info/add') }}
                                                                                            method='post'>
                                                                                            @csrf
                                                                                            <div class="form-group row">
                                                                                                <label
                                                                                                    class="col-sm-5 col-form-label">
                                                                                                    <h6>Enter
                                                                                                        Username:*
                                                                                                    </h6>
                                                                                                </label>
                                                                                                <div class="col-sm-7">
                                                                                                    <input name='name'
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        required
                                                                                                        placeholder="User Name"
                                                                                                        style="border-radius:3px;">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                                <label
                                                                                                    class="col-sm-5 col-form-label">
                                                                                                    <h6>Enter
                                                                                                        Password:*
                                                                                                    </h6>
                                                                                                </label>
                                                                                                <div class="col-sm-7">
                                                                                                    <input
                                                                                                        name='password'
                                                                                                        type="password"
                                                                                                        class="form-control"
                                                                                                        required
                                                                                                        placeholder="Password"
                                                                                                        style="border-radius:3px;">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                                <label
                                                                                                    class="col-sm-5 col-form-label">
                                                                                                    <h6>Role*</h6>
                                                                                                </label>
                                                                                                <div class="col-sm-7">
                                                                                                    <select name="role"
                                                                                                        class="form-control"
                                                                                                        required>
                                                                                                        <option
                                                                                                            value="admin">
                                                                                                            Admin
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="user">
                                                                                                            User
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                                <label
                                                                                                    class="col-sm-5 col-form-label">
                                                                                                    <h6>Enter
                                                                                                        Address:*
                                                                                                    </h6>
                                                                                                </label>
                                                                                                <div class="col-sm-7">
                                                                                                    <textarea
                                                                                                        name="address"
                                                                                                        class="form-control"
                                                                                                        required
                                                                                                        placeholder="Address"
                                                                                                        style="border-radius:3px;"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                                <label
                                                                                                    class="col-sm-5 col-form-label">
                                                                                                    <h6>Enter Mobile
                                                                                                        Number:*
                                                                                                    </h6>
                                                                                                </label>
                                                                                                <div class="col-sm-7">
                                                                                                    <input
                                                                                                        name="mobile_no"
                                                                                                        type="number"
                                                                                                        class="form-control"
                                                                                                        required
                                                                                                        placeholder="Mobile Number"
                                                                                                        style="border-radius:3px;">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                                <label
                                                                                                    class="col-sm-5 col-form-label">
                                                                                                    <h6>Enter Email ID:*
                                                                                                    </h6>
                                                                                                </label>
                                                                                                <div class="col-sm-7">
                                                                                                    <input name="email"
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        required
                                                                                                        placeholder="Email ID"
                                                                                                        style="border-radius:3px;">
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-dismiss="modal">Close</button>
                                                                                        <button type="submit"
                                                                                            class="btn btn-primary">Save
                                                                                            changes</button>
                                                                                    </div>
                                                                                    </form>
                                                                                </div>
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
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">UserName</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Password</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Role</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Address</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Email ID</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Mobile Number</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Action</th>
                                                                    </tr>
                                                                    @foreach ($admin as $item)
                                                                    <tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;"
                                                                        align="center">
                                                                        <td>{{ $item->name }}</td>
                                                                        <td>{{ $item->password }}</td>
                                                                        <td>{{ $item->role }}</td>
                                                                        <td>{{ $item->address }}</td>
                                                                        <td>{{ $item->email }}</td>
                                                                        <td>{{ $item->mobile_no }}</td>
                                                                        <td>
                                                                            <svg aria-hidden="true" focusable="false"
                                                                                data-prefix="fas" data-icon="edit"
                                                                                class="svg-inline--fa fa-edit fa-w-18"
                                                                                role="img"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 576 512"
                                                                                data-toggle="modal"
                                                                                data-target={{ '#edit-admin' . $item->id }}
                                                                                style="cursor:pointer;">
                                                                                <path fill="currentColor"
                                                                                    d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z">
                                                                                </path>
                                                                            </svg>
                                                                            <a
                                                                                href={{ url('Admin/account-info/delete/' . $item->id) }}>
                                                                                <i class="fa fa-trash"
                                                                                    aria-hidden="true"></i>
                                                                            </a>
                                                                        </td>

                                                                        <!-- Modal -->

                                                                        <div class="modal fade"
                                                                            id={{ 'edit-admin' . $item->id }}
                                                                            tabindex="-1" role="dialog"
                                                                            aria-labelledby="exampleModalCenterTitle"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog modal-dialog-centered"
                                                                                role="document">
                                                                                <div class="modal-content">
                                                                                    <form
                                                                                        action={{ url('Admin/account-info/edit/' . $item->id) }}
                                                                                        method='post'>
                                                                                        @csrf
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title"
                                                                                                id="exampleModalLongTitle">
                                                                                                Edit Admin</h5>
                                                                                            <button type="button"
                                                                                                class="close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div class="form-group row">
                                                                                                <label
                                                                                                    class="col-sm-5 col-form-label">
                                                                                                    <h6>Enter
                                                                                                        Username:*
                                                                                                    </h6>
                                                                                                </label>
                                                                                                <div class="col-sm-7">
                                                                                                    <input name="name"
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        required
                                                                                                        value={{ $item->name }}
                                                                                                        style="border-radius:3px;">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                                <label
                                                                                                    class="col-sm-5 col-form-label">
                                                                                                    <h6>Enter
                                                                                                        Password:*
                                                                                                    </h6>
                                                                                                </label>
                                                                                                <div class="col-sm-7">
                                                                                                    <input
                                                                                                        name="password"
                                                                                                        type="password"
                                                                                                        class="form-control"
                                                                                                        required
                                                                                                        value={{ $item->password }}
                                                                                                        style="border-radius:3px;">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                                <label
                                                                                                    class="col-sm-5 col-form-label">
                                                                                                    <h6>Role*</h6>
                                                                                                </label>
                                                                                                <div class="col-sm-7">
                                                                                                    <select name="role"
                                                                                                        name="select"
                                                                                                        class="form-control"
                                                                                                        required>

                                                                                                        <option
                                                                                                            value="{{ $item->role }}">
                                                                                                            {{ $item->role }}
                                                                                                        </option>
                                                                                                        @if ($item->role
                                                                                                        == 'admin')
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="user">
                                                                                                            User
                                                                                                        </option>
                                                                                                        @else
                                                                                                        <option
                                                                                                            value="admin">
                                                                                                            Admin
                                                                                                        </option>
                                                                                                        @endif
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                                <label
                                                                                                    class="col-sm-5 col-form-label">
                                                                                                    <h6>Enter
                                                                                                        Address:*
                                                                                                    </h6>
                                                                                                </label>
                                                                                                <div class="col-sm-7">
                                                                                                    <textarea
                                                                                                        name="address"
                                                                                                        class="form-control"
                                                                                                        required
                                                                                                        value="{{ $item->address }}"
                                                                                                        style="border-radius:3px;">
                                                                                                    {{ $item->address }}
                                                                                                    </textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                                <label
                                                                                                    class="col-sm-5 col-form-label">
                                                                                                    <h6>Enter Mobile
                                                                                                        Number:*
                                                                                                    </h6>
                                                                                                </label>
                                                                                                <div class="col-sm-7">
                                                                                                    <input
                                                                                                        name="mobile_no"
                                                                                                        type="number"
                                                                                                        class="form-control"
                                                                                                        required
                                                                                                        value={{ $item->mobile_no }}
                                                                                                        style="border-radius:3px;">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                                <label
                                                                                                    class="col-sm-5 col-form-label">
                                                                                                    <h6>Enter Email
                                                                                                        ID:*</h6>
                                                                                                </label>
                                                                                                <div class="col-sm-7">
                                                                                                    <input name="email"
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        required
                                                                                                        value={{ $item->email }}
                                                                                                        style="border-radius:3px;">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-dismiss="modal">Close</button>
                                                                                            <button type="submit"
                                                                                                class="btn btn-primary">Save
                                                                                                changes</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                       
                                                                    </tr>
                                                                    @endforeach
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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <script>
    // let button = document.querySelector("#export");
    // button.addEventListener("click", e => {
    //     let table1 = document.querySelector("#ContentPlaceHolder1_grd");
    //     TableToExcel.convert(table1);
    // });
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