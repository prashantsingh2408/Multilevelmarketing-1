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
			.col-md-2{
				padding:0px 7px !important;
			}
			.style5{
				border:1px dotted black;
				border-radius:5px !important;
				padding:10px;
			}

			#form-tab-col{
				font-size: 12px; 
				font-family: Sans-Serif;
				font-weight: bold;
				text-align:left;
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
                                    
                                    <span>Welcome, Admin</span>
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
                                            <h5 class="m-b-10">Welcome Letter</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item">Member Zone</li>
                                            <li class="breadcrumb-item"><a href="#">Welcome Letter</a>
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
																			<div class="form-group row">
																				<div class="col-xl-3 col-md-3 col-sm-12"></div>
																				<div class="col-xl-6 col-md-6 col-sm-12" style="width:100%;">
																					<div id="ContentPlaceHolder1_pnlContents" style="height: 100%; overflow: auto; background: #ffffe1 none repeat scroll 0 0">
																						<table width="100%" style="border: 2px solid black;text-align:center;">
																							<tbody>
																								<tr>
																									<td>
																										<table width="100%">
																											<tbody>
																												<tr>
																													<td>
																														<table width="100%">
																															<tbody>
																																<tr>
																																	<td>
																																		<center> <img src="{{asset('user_assets/img/logo.png" height="120px"> </center>
																																	</td>
																																</tr>
																																<tr>
																																	<td align="center" style="font-size: 20px; font-weight: bold; font-family: Sans-Serif;">CONGRATULATIONS</td>
																																</tr>
																															</tbody>
																														</table>
																													</td>
																												</tr>
																												<tr>
																													<td>
																														<hr>
																													</td>
																												</tr>
																												<tr>
																													<td style="font-size: 18px" align="center">
																														Dear <span style="font-weight: bold">KULDEEP SINGH CHAUHAN</span>,<br>                                            
																														<p></p>
																													</td>
																												</tr>
																												<tr>
																													<td>
																														<table width="100%">
																															<tbody>
																																<tr>
																																	<td class="style5">
																																		<table style="width: 100%; height: 161px;">
																																			<tbody>
																																				<tr>
																																					<td id="form-tab-col">Track ID:</td>
																																					<td id="form-tab-col">GF100001</td>
																																				</tr>
																																				<tr>
																																					<td id="form-tab-col">Member Name:</td>
																																					<td id="form-tab-col"> KULDEEP SINGH CHAUHAN</td>
																																				</tr>
																																				<tr>
																																					<td id="form-tab-col">Address:</td>
																																					<td id="form-tab-col"> </td>
																																				</tr>
																																				<tr>
																																					<td id="form-tab-col">City:</td>
																																					<td id="form-tab-col"> </td>
																																				</tr>
																																				<tr>
																																					<td id="form-tab-col">District:</td>
																																					<td id="form-tab-col"> </td>
																																				</tr>
																																				<tr>
																																					<td id="form-tab-col">State:</td>
																																					<td id="form-tab-col"> </td>
																																				</tr>
																																				<tr>
																																					<td id="form-tab-col">Sponsored By:</td>
																																					<td id="form-tab-col"> </td>
																																				</tr>
																																				<tr>
																																					<td id="form-tab-col">Date Of Joining:</td>
																																					<td id="form-tab-col"> </td>
																																				</tr>
																																				<tr>
																																					<td id="form-tab-col">Membership:</td>
																																					<td id="form-tab-col"> </td>
																																				</tr>
																																			</tbody>
																																		</table>
																																	</td>
																																</tr>
																															</tbody>
																														</table>
																													</td>
																												</tr>
																												<tr>
																													<td align="center" style="font-size: 16px;width:100%;">                                            
																													<hr>
																													We appreciate your decision in choosing your opportunity.With your enthusiasm and support of your sponsor. You will achieve financial freedom.<br>
																													<span style="font-size: 13px"><b>Note:</b> This is computer generated document,no need of stamp or signature.</span>
																												</tr>
																												<tr>
																													<td>                                            
																														<br><b>THANKS &amp; REGARDS</b><br>PRESIDENT<br>Global Life Foundation<br>www.goldenlifefoundation.in</td>
																												</tr>
																												<tr>
																													<td>
																														<hr>
																													</td>
																												</tr>
																											</tbody>
																										</table>
																									</td>
																								</tr>
																							</tbody>
																						</table><center style="padding:10px;">
																						<button type="button" class="btn btn-success">
																							<a onclick="return PrintPanel();" id="ContentPlaceHolder1_pnt" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$pnt','')" style="text-decoration:none;">Print Welcome Letter</a>
																						</button></center>
																					</div>
																				</div>
																				<div class="col-xl-3 col-md-3 col-sm-12"></div>
																			</div>
																		</div>
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
