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
                                            <h5 class="m-b-10">Transfer Pin</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item">Pin Management</li>
                                            <li class="breadcrumb-item"><a href="#">Transfer Pin</a></li>
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
                                                    <form action="{{ url('User/transfer-pin') }}" method="post">
                                                        @csrf
                                                        <div class="card-block">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">
                                                                    <h6>Enter Member ID*:</h6>
                                                                </label>
                                                                <div class="col-sm-9">
                                                                    <input id='sponsor_id' type="text" name='member_id'
                                                                        class="form-control" required
                                                                        placeholder="Enter Track ID">
                                                                        <p id='show_name'></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 co-md-12 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label"
                                                                        style="padding:0px;">
                                                                        <button id='show'
                                                                            type='button'
                                                                            class="btn waves-effect waves-light btn-inverse"
                                                                            style="border-radius:5px;margin:0 5px;"><i
                                                                                class="icofont icofont-check-circled"></i>Show</button>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <h6 id='name'></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">
                                                                    <h6>Select Product*:</h6>
                                                                </label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control" required disabled>
                                                                        <option value="PACKAGE(500)">PACKAGE(500)
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">
                                                                    <h6>Enter Number Of Pins*:</h6>
                                                                </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="no_of_pins"
                                                                        class="form-control" required
                                                                        placeholder="Enter No. Of Pins" disabled>
                                                                </div>
                                                            </div>
                                                            @if(Session::has('success'))
                                                            <div class="alert alert-success">
                                                                {{ Session::get('success') }}
                                                            </div>
                                                            @endif
                                                            @if(Session::has('error'))
                                                            <div class="alert alert-danger">
                                                                {{ Session::get('error') }}
                                                            </div>
                                                            @endif
                                                            <div class="form-group row"
                                                                style="display:grid;place-items:center;">

                                                                
                                                                <button type="submit"
                                                                    class="btn waves-effect waves-light btn-success"
                                                                    style="border-radius:5px;"><i
                                                                        class="icofont icofont-check-circled"></i>Transfer</button>
                                                            </div>
                                                        </div>
                                                </div>
                                                </form>
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
<script>
    $(document).ready(function() {
            $('#show').click(function() {
   
                sponsor_id = $('#sponsor_id').val();
                $.ajax({
                    url: "{{url('Admin/generatepindirects_show_name')}}",
                    type: 'post',
                    data: {
                        _token: '{{ csrf_token() }}',
                        sponsor_id: sponsor_id
                    },
                    success: function(name) {
                        if(name == 'null'){
                            $('#name').html('User not found');
                            //disable select product
                            $('input[name=no_of_pins]').prop('disabled', true);
                            $('select[name=select]').prop('disabled', true);
                           
                        }
                        var obj = JSON.parse(name);
                        $('#name').html(obj.name);
                        //enable select product
                        $('select[name=package]').prop('disabled', false);
                        //enable select product
                        $('input[name=no_of_pins]').prop('disabled', false);
                        //enable select product
                        $('select[name=select]').prop('disabled', false);
                    }
                });
            });
        });
</script>


</html>