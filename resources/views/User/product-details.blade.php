

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
                    <span>Welcome, User</span>
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
            @include('User/sidebar')
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
                          <a href="index.php"> <i class="fa fa-home"></i> </a>
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
                                <div class="col-xl-12 col-md-12 col-sm-12 d-flex flex-row-reverse">
                                  <button class="btn waves-effect waves-light btn-success" style="border-radius:5px;margin:5px;">Add Product</button>
                                </div>
                              </div>
                              <div class="table-responsive-xl" style="padding:0 10px;">
                                <table class="table table-responsive table-bordered" rules="all" id="ContentPlaceHolder1_grd" style="width:100%;border-collapse:collapse;" cellspacing="0" cellpadding="4" border="1">
                                  <tbody>
                                    <tr style="color:White;background-color:#000000;font-weight:bold;" align="center">
                                      <th scope="col">Product Name</th>
                                      <th scope="col">Investment</th>
                                      <th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:14px;" align="center">Processing Charge</th>
                                      <th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:14px;" align="center">Price</th>
                                      <th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:14px;" align="center">Point</th>
                                      <th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:14px;" align="center">Sponsor Value</th>
                                      <th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:14px;" align="center">Bond Value</th>
                                      <th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:14px;" align="center">Maturity Time</th>
                                      <th scope="col" style="color:White;background-color:#000000;font-family:verdana;font-size:14px;" align="center">Action</th>
                                    </tr>
                                    <tr style="color:#333333;background-color:#F7F6F3;border-color:#8B91A0;" align="center">
                                      <td>
                                        Package 500
                                      </td>
                                      <td>
                                        <a target="_blank" href="editprofileadmin.aspx?id=GF100000">500</a>
                                      </td>
                                      <td style="font-size:14px;height:30px;" align="center">
                                        <span id="ContentPlaceHolder1_grd_Label2_0">500</span>
                                      </td>
                                      <td style="font-size:14px;height:30px;" align="center">
                                        <span id="ContentPlaceHolder1_grd_Label1_0">500</span>
                                      </td>
                                      <td style="font-size:14px;height:30px;" align="center">500</td>
                                      <td style="font-size:14px;height:30px;" align="center">200</td>
                                      <td style="font-size:14px;height:30px;" align="center">10</td>
                                      <td style="font-size:14px;height:30px;" align="center">10</td>
                                      <td style="font-size:14px;height:30px;" align="center">
																				<a href=""><i class="fas fa-edit fa-2x" style="margin:auto;padding:0 5px"></i></a>
																				<a href=""><i class="fas fa-trash-alt fa-2x" style="margin:auto;padding:0 5px"></i></a>
																			</td>
                                    </tr>
                                    <tr class="grd" style="color:#284775;background-color:White;border-color:#8B91A0;" align="center">
                                    </tr>
																		<tr class="gridviewPager">
																			<td colspan="17"><table></table></td>
																		</tr>
                                  </tbody>
                                </table>
                              </div>
                              <div class="form-group row">
                                <div class="col-xl-12 col-md-12 col-sm-12 d-flex flex-row-reverse">
                                  <button class="btn waves-effect waves-light btn-inverse" id="export" style="border-radius:5px;margin:5px;"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Export TO Excel</button>
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
    <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <script>
      let button = document.querySelector("#export");
      button.addEventListener("click", e => {
      	let table1 = document.querySelector("#TABLE");
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

