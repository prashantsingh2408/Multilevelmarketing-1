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
    <link rel="icon" href="{{ asset('admin_assets/img/favicon.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('admin_assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <!--  Fremwork -->
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
                                            <h5 class="m-b-10">Pin Reports</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="dashboard"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item">Pin Management</li>
                                            <li class="breadcrumb-item"><a href="#">Pin Reports</a>
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
                                                        <form method="POST" action={{url("Admin/sortpins")}}>
                                                            @csrf
                                                            <div class="form-group row">
                                                                <div class="col-xl-6 co-md-12 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">
                                                                            <h6>Enter TrackID:*</h6>
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <input name="member_id" type="text" class="form-control" required placeholder="TackID" style="border-radius:3px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 co-md-12 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">
                                                                            <h6>Enter Name:*</h6>
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            @php
                                                                            if(Session::has('name')){
                                                                                $name = Session::get('name');
                                                                            }else{
                                                                                $name = '';
                                                                            }

                                                                            @endphp
                                                                            <input type="text" name='name' class="form-control" required placeholder="{{  $name  }}" style="border-radius:3px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-xl-6 co-md-12 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">
                                                                            <h6>Select Report Type*</h6>
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <select name="report" class="form-control" required>
                                                                                <option value="Show All">Show All</option>
                                                                                <option value="Available">Available</option>
                                                                                <option value="Used">Used</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 co-md-12 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">
                                                                            <h6>Select Approval*</h6>
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <select name="approval" class="form-control" required>
                                                                                <option value=''>Show All</option>
                                                                                <option value="Wait">Wait</option>
                                                                                <option value="Approved">Approved</option>
                                                                                <option value="Rejected">Rejected</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-xl-6 co-md-12 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">
                                                                            <h6>Select Product*</h6>
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <select name="package" class="form-control" required>
                                                                                <option value=''>Select Product</option>
                                                                                <option value="Package 500">Package 500</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 co-md-12 col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">
                                                                            <h6>From:*</h6>
                                                                        </label>
                                                                        <div class="col-sm-4">
                                                                            <input type="date" name='from' class="form-control" required style="border-radius:3px;">
                                                                        </div>
                                                                        <label class="col-sm-2 col-form-label">
                                                                            <h6>To:*</h6>
                                                                        </label>
                                                                        <div class="col-sm-4">
                                                                            <input type="date" name='to' class="form-control" required style="border-radius:3px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-xl-12 col-md-12 col-sm-12 d-flex flex-row-reverse">
                                                                    <button type="submit" class="btn waves-effect waves-light btn-inverse" style="border-radius:5px;margin:5px;"><i class="icofont icofont-check-circled"></i>Search
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                            <div class="row p-3 justify-content-center">
                                                                    @if ($message = Session::get('success'))
                                                                    <div class="col-md-6 alert alert-primary alert-block">
                                                                        <button type="button" class="close" data-dismiss="alert">×</button>    
                                                                        <strong>{{ $message }}</strong>
                                                                    </div>
                                                                    @endif
                                                                    @if ($message = Session::get('error'))
                                                                    <div class="col-md-6 alert alert-danger alert-block">
                                                                        <button type="button" class="close" data-dismiss="alert">×</button>    
                                                                        <strong>{{ $message }}</strong>
                                                                    </div>
                                                                    @endif
                                                            </div>
                                                            <div class="row" style="padding:10px;">
                                                                <label class="col-sm-12 col-form-label">
                                                                    <h6>Total Record :{{$count}}</h6>
                                                                </label>
                                                                <table class="table table-hover table-bordered" style="text-align:center;" id="TABLE">
                                                                    <thead class="thead-dark">

                                                                        <tr>
                                                                            <th scope="col"><strong id="tabth">S.No</strong>
                                                                            </th>
                                                                            <th scope="col"><strong id="tabth">Issued
                                                                                    To</strong></th>
                                                                            <th scope="col"><strong id="tabth">Member
                                                                                    Name
                                                                                    (Issued To)</strong>
                                                                            </th>
                                                                            <th scope="col"><strong id="tabth">Pin
                                                                                    Number</strong>
                                                                            </th>
                                                                            <th scope="col"><strong id="tabth"> Issued
                                                                                    Date</strong>
                                                                            </th>
                                                                            <th scope="col"><strong id="tabth">Product
                                                                                    Name</strong>
                                                                            </th>
                                                                            <th scope="col"><strong id="tabth">Used
                                                                                    By</strong>
                                                                            </th>
                                                                            <th scope="col"><strong id="tabth">Transfer
                                                                                    To</strong>
                                                                            </th>
                                                                            <th scope="col"><strong id="tabth">Member
                                                                                    Name
                                                                                    (Transfer To)</strong>
                                                                            </th>
                                                                            <th scope="col"><strong id="tabth">Transfer
                                                                                    Date</strong>
                                                                            </th>
                                                                            <th scope="col"><strong id="tabth">Status
                                                                                </strong>
                                                                            </th>
                                                                            <th scope="col"><strong id="tabth">Action
                                                                                </strong>
                                                                            </th>
                                                                        </tr>

                                                                    </thead>
                                                                    <tbody>

                                                                        @if(Session::has('show'))
                                                                        @foreach($Users as $item)
                                                                        <tr>
                                                                            <td>{{$item->id}}</td>
                                                                            <td>{{$item->member_id}}</td>
                                                                            <td>{{$item->member_name}}</td>
                                                                            <td>{{$item->pin_no}}</td>
                                                                            <td>{{$item->issue_date ?? 'null'}}</td>
                                                                            <td>{{$item->product ?? 'null' }}</td>
                                                                            <td>{{$item->used_by ?? 'null' }}</td>
                                                                            <td>{{$item->transfer_id ?? 'null' }}</td>
                                                                            <td>{{$item->transfer_name ?? 'null' }}</td>
                                                                            <td>{{$item->transfer_date ?? 'null' }}</td>
                                                                            <td>{{$item->approvel_status ?? 'null' }}</td>
                                                                            <td>
                                                                                <a href="{{url('Admin/editpins',$item->id)}}" class="btn btn-success btn-sm">Edit</a>
                                                                                <a href="{{url('Admin/deletepins',$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                        @else
                                                                        @foreach($Users as $item)
                                                                        <tr>
                                                                            <td>{{$item->id}}</td>
                                                                            <td>{{$item->member_id}}</td>
                                                                            <td>{{$item->member_name}}</td>
                                                                            <td>{{$item->pin_no}}</td>
                                                                            <td>{{$item->issue_date ?? 'null'}}</td>
                                                                            <td>{{$item->product ?? 'null' }}</td>
                                                                            <td>{{$item->used_by ?? 'null' }}</td>
                                                                            <td>{{$item->transfer_id ?? 'null' }}</td>
                                                                            <td>{{$item->transfer_name ?? 'null' }}</td>
                                                                            <td>{{$item->transfer_date ?? 'null' }}</td>
                                                                            <td>{{$item->approvel_status ?? 'null' }}</td>
                                                                            <td>
                                                                                {{-- <a href="{{url('Admin/editpins',$item->id)}}" class="btn btn-success btn-sm">Edit</a> --}}
                                                                                <a href="{{url('Admin/deletepins',$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                        @endif


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-xl-12 col-md-12 col-sm-12 d-flex flex-row-reverse">
                                                                    <button class="btn waves-effect waves-light btn-inverse" id="export" style="border-radius:5px;margin:5px;"><i class="icofont icofont-check-circled"></i>Export</button>
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
    <!--  Jquery -->
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
</body>

</html>