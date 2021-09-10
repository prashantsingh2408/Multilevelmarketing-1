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
      <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<style>
			.col-md-2{
				padding:0px 7px !important;
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
									<?php include "sidebar.php"; ?>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Rank Level Tree View(President)</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item">Genealogy Zone</li>
                                            <li class="breadcrumb-item"><a href="#">Rank Level Tree View(President)</a>
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
                            <div class="card-block">
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">
                                  <h6>Enter Track ID*:</h6>
                                </label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" required placeholder="Enter Track ID" style="border-radius:3px;">
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-xl-12 col-md-12 col-sm-12 d-flex flex-row-reverse">
                                  <button class="btn waves-effect waves-light btn-success" style="border-radius:5px;margin:5px;" id="get-details"><i class="icofont icofont-check-circled"></i>Get Details</button>
                                </div>
                              </div>
                              <div class="row form-group details" style="display:none;">
                                <div class="col-sm-12">
                                  <div class="card-block">
                                    <div class="row form-group" style="display:grid;place-items:center;">
                                      <button type="button" class="btn btn-dark" id="level-1">Level 1</button>
                                      <div class="title">
                                        <h6>Total Members : </h6>
                                      </div>
                                      <div class="title">
                                        <h6>Non-Active Members : </h6>
                                      </div>
                                      <div class="title">
                                        <h6>Active Members : </h6>
                                      </div>
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
                                            <td colspan="17">
                                              <table></table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="card-block">
                                    <div class="row form-group" style="display:grid;place-items:center;">
                                      <button type="button" class="btn btn-dark" id="level-2">Level 2</button>
                                      <div class="title">
                                        <h6>Total Members : </h6>
                                      </div>
                                      <div class="title">
                                        <h6>Non-Active Members : </h6>
                                      </div>
                                      <div class="title">
                                        <h6>Active Members : </h6>
                                      </div>
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
                                            <td colspan="17">
                                              <table></table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="card-block">
                                    <div class="row form-group" style="display:grid;place-items:center;">
                                      <button type="button" class="btn btn-dark" id="level-3">Level 3</button>
                                      <div class="title">
                                        <h6>Total Members : </h6>
                                      </div>
                                      <div class="title">
                                        <h6>Non-Active Members : </h6>
                                      </div>
                                      <div class="title">
                                        <h6>Active Members : </h6>
                                      </div>
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
                                            <td colspan="17">
                                              <table></table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="card-block">
                                    <div class="row form-group" style="display:grid;place-items:center;">
                                      <button type="button" class="btn btn-dark" id="level-4">Level 4</button>
                                      <div class="title">
                                        <h6>Total Members : </h6>
                                      </div>
                                      <div class="title">
                                        <h6>Non-Active Members : </h6>
                                      </div>
                                      <div class="title">
                                        <h6>Active Members : </h6>
                                      </div>
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
                                            <td colspan="17">
                                              <table></table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="card-block">
                                    <div class="row form-group" style="display:grid;place-items:center;">
                                      <button type="button" class="btn btn-dark" id="level-5">Level 5</button>
                                      <div class="title">
                                        <h6>Total Members : </h6>
                                      </div>
                                      <div class="title">
                                        <h6>Non-Active Members : </h6>
                                      </div>
                                      <div class="title">
                                        <h6>Active Members : </h6>
                                      </div>
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
                                            <td colspan="17">
                                              <table></table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="card-block">
                                    <div class="row form-group" style="display:grid;place-items:center;">
                                      <button type="button" class="btn btn-dark" id="level-6">Level 6</button>
                                      <div class="title">
                                        <h6>Total Members : </h6>
                                      </div>
                                      <div class="title">
                                        <h6>Non-Active Members : </h6>
                                      </div>
                                      <div class="title">
                                        <h6>Active Members : </h6>
                                      </div>
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
                                            <td colspan="17">
                                              <table></table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="card-block">
                                    <div class="row form-group" style="display:grid;place-items:center;">
                                      <button type="button" class="btn btn-dark" id="level-7">Level 7</button>
                                      <div class="title">
                                        <h6>Total Members : </h6>
                                      </div>
                                      <div class="title">
                                        <h6>Non-Active Members : </h6>
                                      </div>
                                      <div class="title">
                                        <h6>Active Members : </h6>
                                      </div>
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
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- slimscroll js -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script>
      $(document).ready(function(){
      	$("#get-details").click(function(){
      		$(".details").toggle(800);
      	});
      });
    </script>
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
  </body>
</html>