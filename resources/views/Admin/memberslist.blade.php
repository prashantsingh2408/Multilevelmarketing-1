<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <base href="../">
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
                                            <h5 class="m-b-10">Member List</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="dashboard"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item">Member Zone</li>
                                            <li class="breadcrumb-item"><a href="#">Member List</a>
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
                                        <div class="row justify-content-center">
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
                                                        <div class="form-group row"
                                                            style="display:flex;justify-content:space-between;">
                                                            <div class="col-xl-4 col-md-4 col-sm-6 text-center">
                                                                <button class="btn waves-effect waves-light btn-inverse"
                                                                    id="export" style="border-radius:5px;margin:5px;"><i
                                                                        class="fa fa-file-excel-o"
                                                                        aria-hidden="true"></i>Export TO Excel</button>
                                                            </div>
                                                            <div class="col-xl-4 col-md-4 col-sm-6 text-center">
                                                                <button class="btn waves-effect waves-light btn-inverse"
                                                                    id="print" style="border-radius:5px;margin:5px;"><i
                                                                        class="fa fa-print"
                                                                        aria-hidden="true"></i>Print</button>
                                                            </div>
                                                            <div class="col-xl-4 col-md-4 col-sm-12 text-center">
                                                                <button class="btn waves-effect waves-light btn-inverse"
                                                                    style="border-radius:5px;margin:5px;">Add User By
                                                                    Agent</button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter TrackID:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input id='idGFinput' type="text"
                                                                            class="form-control" required
                                                                            placeholder="TrackID"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Name:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" required
                                                                            placeholder="Name"
                                                                            style="border-radius:3px;">
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
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">
                                                                        <h6>Enter Mobile Number:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="number" class="form-control"
                                                                            required placeholder="0000 000 000"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <h5>Joining Date</h5>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">
                                                                        <h6>From:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-4">
                                                                        <input type="date" class="form-control" required
                                                                            placeholder="TrackID"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                    <label class="col-sm-2 col-form-label">
                                                                        <h6>To:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-4">
                                                                        <input type="date" class="form-control" required
                                                                            placeholder="TrackID"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <h5>Activation Date</h5>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">
                                                                        <h6>From:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-4">
                                                                        <input type="date" class="form-control" required
                                                                            placeholder="TrackID"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                    <label class="col-sm-2 col-form-label">
                                                                        <h6>To:*</h6>
                                                                    </label>
                                                                    <div class="col-sm-4">
                                                                        <input type="date" class="form-control" required
                                                                            placeholder="TrackID"
                                                                            style="border-radius:3px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xl-4 col-md-4 col-sm-6 text-center">
                                                                <button class="btn waves-effect waves-light btn-danger"
                                                                    style="border-radius:5px;margin:5px;"><i
                                                                        class="icofont icofont-check-circled"></i>Reset</button>
                                                            </div>
                                                            <div class="col-xl-4 col-md-4 col-sm-6 text-center">

                                                                <button onclick="sentGF()"
                                                                    class="btn waves-effect waves-light btn-success"
                                                                    style="border-radius:5px;margin:5px;"><i
                                                                        class="icofont icofont-check-circled"></i>Get
                                                                    Detail</button>
                                                            </div>
                                                            <div class="col-xl-4 col-md-4 col-sm-12 text-center">
                                                                <button class="btn waves-effect waves-light btn-inverse"
                                                                    style="border-radius:5px;margin:5px;">Block/Unblock
                                                                    Customer</button>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive-xl" style="padding:0 10px;">
                                                            <table class="table table-responsive table-bordered"
                                                                rules="all" id="ContentPlaceHolder1_grd"
                                                                style="width:100%;border-collapse:collapse;"
                                                                cellspacing="0" cellpadding="4" border="1">
                                                                <tbody>
                                                                    {{ $memberlist ?? '' }}
                                                                    <tr style="color:White;background-color:#000000;font-weight:bold;"
                                                                        align="center">
                                                                        <th scope="col">Sr. No</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Full Name</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Member ID</th>
                                                                        {{-- <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">password</th> --}}
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Sponsor Name</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Sponsor ID</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Product</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Mobile No.</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Date of Joining</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Block/Unblock Member</th>
                                                                        <th scope="col">Activation Date</th>
                                                                        <th scope="col">Edit</th>
                                                                        <th scope="col">Top Up</th>
                                                                        <th scope="col"
                                                                            style="color:White;background-color:#000000;font-family:verdana;font-size:12px;"
                                                                            align="left">Info..</th>
                                                                        <th scope="col">Member Login</th>
                                                                    </tr>
                                                                    @php $a=1; @endphp
                                                                    @foreach($data as $value)
                                                                    <tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;"
                                                                        align="center">
                                                                        <td>
                                                                            {{$a++}}
                                                                        </td>
                                                                       


                                                                        <td style="font-size:12px;height:30px;"
                                                                            align="left">
                                                                            <span id="ContentPlaceHolder1_grd_Label2_0">
                                                                            {{$value->name}}
                                                                            </span>
                                                                        </td>
                                                                        <td style="font-size:12px;height:30px;"
                                                                            align="left">
                                                                            <span
                                                                                id="ContentPlaceHolder1_grd_Label1_0">{{$value->member_id}}</span>
                                                                        </td>
                                                                        
                                                                        <td style="font-size:12px;height:30px;"
                                                                            align="left">{{$value->sponsor_name}}</td>
                                                                        <td style="font-size:12px;height:30px;"
                                                                            align="left">{{$value->sponsor_id}}</td>
                                                                        <td style="font-size:12px;height:30px;"
                                                                            align="left">{{$value->product}}</td>
                                                                        <td style="font-size:12px;height:30px;"
                                                                            align="left">{{$value->mobile_no}}</td>
                                                                        <td style="font-size:12px;height:30px;"
                                                                            align="left">{{$value->joining_date_from}}</td>
                                                                        <td style="font-size:12px;height:30px;" align="left">
                                                                            <span style="font-family:sans-serif;color: #000000;">
                                                                                @if($value -> status == 'Active')
                                                                                <button type="button" class="btn btn-sm btn-success blockBtn" id="{{$value -> id}}">{{$value -> status}}</button>
                                                                                @elseif($value -> status == 'Inactive')
                                                                                <button type="button" class="btn btn-sm btn-danger blockBtn" id="{{$value -> id}}">{{$value -> status}}</button>
                                                                             @endif
                                                                            </span>
                                                                        </td>
                                                                        <td style="font-size:12px;height:30px;"
                                                                            align="left">{{$value->activation_date_from}}</td>
                                                                        <td>
                                                                            <a class="btn btn-primary btn-sm" target="_blank" href="Admin/change-my-profile/{{$value->id}}"> Edit</a>
                                                                        </td>
                                                                        <td>
                                                                            <a class="btn btn-info btn-sm" href="{{url('Admin/topupreport')}}/{{$value->id}}">Topup Report</a>
                                                                        </td>
                                                                        <td style="font-size:12px;height:30px;"
                                                                            align="left">
                                                                            <a class="btn btn-primary btn-sm" id="ContentPlaceHolder1_grd_Info_0"
                                                                                href="javascript:openWindow('1');">More
                                                                                Info..</a>
                                                                        </td>
                                                                        <td>
                                                                            <a target="_blank"
                                                                                href="../Member_Login/Dashboard.aspx?adminTrack=GF100000">
                                                                                <i class="fa fa-users fa-2x"></i>
                                                                            </a>
                                                                        </td>
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
        $(document).ready(function() {
          $('.blockBtn').click(function(e) {
              e.preventDefault();
              var rowid = $(this).attr('id');
              $.ajax({
                type: "POST",
                data : {id : rowid},
                url: "Admin/blockUser",
                dataType: "JSON",
                headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
                success: function(data) {
                   if(data.status == 'success') {
                    window.location.reload(); 
                   }
                }
              });
          });
        });
    </script>
    <script>
    function sentGF() {

        idGFinput = $("#idGFinput").val();
        alert(idGFinput);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });
        $.ajax({
            type: "POST",
            cache: false,
            url: "Admin/memberlist",
            data: idGFinput, // multiple data sent using ajax
            success: function(html) {

                alert(html);
            }
        });
    }
    let button = document.querySelector("#export");
    button.addEventListener("click", e => {
        let table1 = document.querySelector("#ContentPlaceHolder1_grd");
        TableToExcel.convert(table1);
    });
    </script>
    <script>
    function printData() {
        var divToPrint = document.getElementById("ContentPlaceHolder1_grd");
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