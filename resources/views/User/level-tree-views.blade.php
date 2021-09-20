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
      <link rel="icon" href="{{asset('user_assets/img/favicon.png')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('user_assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('user_assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('user_assets/pages/waves/css/waves.min.css" type="text/css')}}" media="all">
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
		table {
      table-layout: fixed;
      width: 100%;   
      }
			.title{
				padding:3px 0px;
			}
		</style>
		<style>
    .node circle {
        fill: #fff;
        stroke: steelblue;
        stroke-width: 3px;
    }
    
    .node text {
        font: 12px sans-serif;
    }
    
    .link {
        fill: none;
        stroke: #ccc;
        stroke-width: 2px;
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
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
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
                                            <h5 class="m-b-10">Level Tree Views</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item">Network</li>
                                            <li class="breadcrumb-item"><a href="#">Level Tree Views</a>
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
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
																										<div id="here">	
																									
											</div>
<!-- 																										
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-1">Level 1</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-1" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div>
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-2">Level 2</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-2" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div>
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-3">Level 3</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-3" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div>
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-4">Level 4</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-4" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div>
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-5">Level 5</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-5" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div>
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-6">Level 6</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-6" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div>
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-7">Level 7</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-7" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div>
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-8">Level 8</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-8" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div>
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-9">Level 9</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-9" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div>
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-10">Level 10</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-10" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div>
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-11">Level 11</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-11" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div>
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-12">Level 12</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-12" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div>
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-13">Level 13</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-13" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div>
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-14">Level 14</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-14" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div>
                                                    <div class="card-block">
																											<div class="row form-group" style="display:grid;place-items:center;">
																												<button type="button" class="btn btn-dark" id="level-15">Level 15</button>
																												<div class="title"><h6>Total Members : </h6></div>
																												<div class="title"><h6>Non-Active Members : </h6></div>
																												<div class="title"><h6>Active Members : </h6></div>
																											</div>
																											<div class="table-responsive-xl level-15" style="padding:0 10px;display:none;">
																												<table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
																													<tbody>
																														<tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Member ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Name</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Sponsor ID</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Joining Date</th>
																															<th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:12px;" align="left">Product</th>
																														</tr>
																														<tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="grd" style="color:#333333;background-color:White;border-color:#8B91A0;" align="center">
																															<td>GF100002</td>
																															<td>UPASANA SINGH</td>
																															<td>GF100001</td>
																															<td>7/1/2021 6:52:59 PM</td>
																															<td>Package 500</td>
																														</tr>
																														<tr class="gridviewPager">
																															<td colspan="17"><table></table></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
                                                    </div> -->
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
		<script>
		$(document).ready(function(){
			$("#level-1").click(function(){
				$(".level-1").toggle(800);
			});
		});
		</script>
		<script>
		$(document).ready(function(){
			$("#level-2").click(function(){
				$(".level-2").toggle(800);
			});
		});
		</script>
		<script>
		$(document).ready(function(){
			$("#level-3").click(function(){
				$(".level-3").toggle(800);
			});
		});
		</script>
		<script>
		$(document).ready(function(){
			$("#level-4").click(function(){
				$(".level-4").toggle(800);
			});
		});
		</script>
		<script>
		$(document).ready(function(){
			$("#level-5").click(function(){
				$(".level-5").toggle(800);
			});
		});
		</script>
		<script>
		$(document).ready(function(){
			$("#level-6").click(function(){
				$(".level-6").toggle(800);
			});
		});
		</script>
		<script>
		$(document).ready(function(){
			$("#level-7").click(function(){
				$(".level-7").toggle(800);
			});
		});
		</script>
		<script>
		$(document).ready(function(){
			$("#level-8").click(function(){
				$(".level-8").toggle(800);
			});
		});
		</script>
		<script>
		$(document).ready(function(){
			$("#level-9").click(function(){
				$(".level-9").toggle(800);
			});
		});
		</script>
		<script>
		$(document).ready(function(){
			$("#level-10").click(function(){
				$(".level-10").toggle(800);
			});
		});
		</script>
		<script>
		$(document).ready(function(){
			$("#level-11").click(function(){
				$(".level-11").toggle(800);
			});
		});
		</script>
		<script>
		$(document).ready(function(){
			$("#level-12").click(function(){
				$(".level-12").toggle(800);
			});
		});
		</script>
		<script>
		$(document).ready(function(){
			$("#level-13").click(function(){
				$(".level-13").toggle(800);
			});
		});
		</script>
		<script>
		$(document).ready(function(){
			$("#level-14").click(function(){
				$(".level-14").toggle(800);
			});
		});
		</script>
		<script>
		$(document).ready(function(){
			$("#level-15").click(function(){
				$(".level-15").toggle(800);
			});
		});
		</script>
		    <!-- load the d3.js library -->
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script>
        var treeData = {
            "name": "Top Level",
            "children": [{
                "name": "Level 2: A",
                "children": [{
                    "name": "Son of A"
                }, {
                    "name": "Daughter of A"
                }]
            }, {
                "name": "Level 2: B"
            }]
        };

        // Set the dimensions and margins of the diagram
        var margin = {
                top: 20,
                right: 90,
                bottom: 30,
                left: 90
            },
            width = 960 - margin.left - margin.right,
            height = 500 - margin.top - margin.bottom;

        // append the svg object to the body of the page
        // appends a 'group' element to 'svg'
        // moves the 'group' element to the top left margin
        var svg = d3.select("#here").append("svg")
            .attr("width", width + margin.right + margin.left)
            .attr("height", height + margin.top + margin.bottom)
            .append("g")
            .attr("transform", "translate(" +
                margin.left + "," + margin.top + ")");

        var i = 0,
            duration = 750,
            root;

        // declares a tree layout and assigns the size
        var treemap = d3.tree().size([height, width]);

        // Assigns parent, children, height, depth
        root = d3.hierarchy(treeData, function(d) {
            return d.children;
        });
        root.x0 = height / 2;
        root.y0 = 0;

        // Collapse after the second level
        root.children.forEach(collapse);

        update(root);

        // Collapse the node and all it's children
        function collapse(d) {
            if (d.children) {
                d._children = d.children
                d._children.forEach(collapse)
                d.children = null
            }
        }

        function update(source) {

            // Assigns the x and y position for the nodes
            var treeData = treemap(root);

            // Compute the new tree layout.
            var nodes = treeData.descendants(),
                links = treeData.descendants().slice(1);

            // Normalize for fixed-depth.
            nodes.forEach(function(d) {
                d.y = d.depth * 180
            });

            // ****************** Nodes section ***************************

            // Update the nodes...
            var node = svg.selectAll('g.node')
                .data(nodes, function(d) {
                    return d.id || (d.id = ++i);
                });

            // Enter any new modes at the parent's previous position.
            var nodeEnter = node.enter().append('g')
                .attr('class', 'node')
                .attr("transform", function(d) {
                    return "translate(" + source.y0 + "," + source.x0 + ")";
                })
                .on('click', click);

            // Add Circle for the nodes
            nodeEnter.append('circle')
                .attr('class', 'node')
                .attr('r', 1e-6)
                .style("fill", function(d) {
                    return d._children ? "lightsteelblue" : "#fff";
                });

            // Add labels for the nodes
            nodeEnter.append('text')
                .attr("dy", ".35em")
                .attr("x", function(d) {
                    return d.children || d._children ? -13 : 13;
                })
                .attr("text-anchor", function(d) {
                    return d.children || d._children ? "end" : "start";
                })
                .text(function(d) {
                    return d.data.name;
                });

            // UPDATE
            var nodeUpdate = nodeEnter.merge(node);

            // Transition to the proper position for the node
            nodeUpdate.transition()
                .duration(duration)
                .attr("transform", function(d) {
                    return "translate(" + d.y + "," + d.x + ")";
                });

            // Update the node attributes and style
            nodeUpdate.select('circle.node')
                .attr('r', 10)
                .style("fill", function(d) {
                    return d._children ? "lightsteelblue" : "#fff";
                })
                .attr('cursor', 'pointer');


            // Remove any exiting nodes
            var nodeExit = node.exit().transition()
                .duration(duration)
                .attr("transform", function(d) {
                    return "translate(" + source.y + "," + source.x + ")";
                })
                .remove();

            // On exit reduce the node circles size to 0
            nodeExit.select('circle')
                .attr('r', 1e-6);

            // On exit reduce the opacity of text labels
            nodeExit.select('text')
                .style('fill-opacity', 1e-6);

            // ****************** links section ***************************

            // Update the links...
            var link = svg.selectAll('path.link')
                .data(links, function(d) {
                    return d.id;
                });

            // Enter any new links at the parent's previous position.
            var linkEnter = link.enter().insert('path', "g")
                .attr("class", "link")
                .attr('d', function(d) {
                    var o = {
                        x: source.x0,
                        y: source.y0
                    }
                    return diagonal(o, o)
                });

            // UPDATE
            var linkUpdate = linkEnter.merge(link);

            // Transition back to the parent element position
            linkUpdate.transition()
                .duration(duration)
                .attr('d', function(d) {
                    return diagonal(d, d.parent)
                });

            // Remove any exiting links
            var linkExit = link.exit().transition()
                .duration(duration)
                .attr('d', function(d) {
                    var o = {
                        x: source.x,
                        y: source.y
                    }
                    return diagonal(o, o)
                })
                .remove();

            // Store the old positions for transition.
            nodes.forEach(function(d) {
                d.x0 = d.x;
                d.y0 = d.y;
            });

            // Creates a curved (diagonal) path from parent to the child nodes
            function diagonal(s, d) {

                path = `M ${s.y} ${s.x}
            C ${(s.y + d.y) / 2} ${s.x},
              ${(s.y + d.y) / 2} ${d.x},
              ${d.y} ${d.x}`

                return path
            }

            // Toggle children on click.
            function click(d) {
                if (d.children) {
                    d._children = d.children;
                    d.children = null;
                } else {
                    d.children = d._children;
                    d._children = null;
                }
                update(d);
            }
        }
    </script>
</body>
</html>
