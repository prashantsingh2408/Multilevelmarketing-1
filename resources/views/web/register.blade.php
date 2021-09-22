<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
	<title>Golden Life Foundation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
	<meta name="author" content="Codedthemes" />
	<!-- Favicon icon -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{asset('admin_assets/img/favicon.png')}}" type="image/x-icon">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/bootstrap/css/bootstrap.min.css')}}">
	<!-- waves.css -->
	<link rel="stylesheet" href="{{asset('admin_assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
	<!-- themify-icons line icon -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/icon/themify-icons/themify-icons.css')}}">
	<!-- ico font -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/icon/icofont/css/icofont.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/icon/font-awesome/css/font-awesome.min.css')}}">
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/style.css')}}">
</head>

<body themebg-pattern="theme1">
	<!-- Pre-loader start -->
	<div class="preloader"></div>
	<!-- Pre-loader end -->

	<section class="login-block">
		<!-- Container-fluid starts -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- Authentication card start -->
					<form class="md-float-material form-material" action={{url('web/register')}} method='post'>
						@csrf
						<div class="text-center">
							<img src="{{asset('admin_assets/img/logo.png')}}" alt="logo.png" class="main-img">
						</div>
						<div class="auth-box card" style="max-width:100%;">
							<div class="card-block">
								<div class="row m-b-20">
									<div class="col-md-12">
										<h3 class="text-center">Register</h3>
										<span class="text-danger">{{Session::get('error')}}</span>
									</div>
								</div>
								<div class="row m-b-20">
									<div class="col-md-12">
										<h6 class="text-left"><u>Sponsor Details</u></h6>
									</div>
								</div>

								<div class="form-group form-primary">
									<input type="text" id="sponsor_id" name="sponsor_id" class="form-control">
									<span class="form-bar"></span>
									<label class="float-label">Sponsor ID</label>
									@error('sponsor_id')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="form-group form-primary">
									<input type="hidden" id="pid" name="pid" class="form-control">
									<input type="text" id="sponsor_name" name="sponsor_name" class="form-control">
									<span class="form-bar"></span>
									<label class="float-label">Sponsor Name</label>
									@error('sponsor_name')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="row m-b-20">
									<div class="col-md-12">
										<h6 class="text-left"><u>Personal Details</u></h6>
									</div>

								</div>
								<div class="form-group form-primary">
									<input type="text" name="name" class="form-control">
									<span class="form-bar"></span>
									<label class="float-label">Full Name</label>
									@error('name')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="form-group form-primary">
									<input type="number" name="mobile_no" class="form-control">
									<span class="form-bar"></span>
									<label class="float-label">Mobile</label>
									@error('mobile_no')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="form-group form-primary">
									<input type="email" name="email" class="form-control">
									<span class="form-bar"></span>
									<label class="float-label">Email</label>
								</div>
								<div class="row m-b-20">
									<div class="col-md-12">
										<h6 class="text-left"><u>Login Details</u></h6>
									</div>
								</div>
								<div class="form-group form-primary">
									<input type="password" name="password" class="form-control">
									<span class="form-bar"></span>
									<label class="float-label">Enter Password</label>
									@error('password')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="form-group form-primary">
									<input type="password" name="confirm_password" class="form-control">
									<span class="form-bar"></span>
									<label class="float-label">Confirm Password</label>
									@error('confirm_password')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="row m-t-30">
									<div class="col-md-12 text-center">
										<input type="checkbox" id="terms" name="terms" value="terms">
										<label for="terms">I Agree to the <a href="term-condition.php">Terms And Conditions</a></label><br>
									</div>
								</div>
								<div class="row m-t-30">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Register</button>
									</div>
								</div>
								<hr />
								
							</div>
						</div>
					</form>
					<!-- end of form -->
				</div>
				<!-- end of col-sm-12 -->
			</div>
			<!-- end of row -->
		</div>
		<!-- end of container-fluid -->
	</section>
	<!-- Required Jquery -->
	<script type="text/javascript" src="{{asset('admin_assets/js/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_assets/js/popper.js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- waves js -->
	<script src="{{asset('admin_assets/pages/waves/js/waves.min.js')}}"></script>
	<!-- jquery slimscroll js -->
	<script type="text/javascript" src="{{asset('admin_assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_assets/js/common-pages.js')}}"></script>
	<script>
		$('document').ready(function() {
           $('#sponsor_id').change(function(e) {
             e.preventDefault();
			 var data = $('#sponsor_id').val();
			 
			 $.ajax({
			   url : 'getUser',
               method: 'POST',
			   data : {data : data},
			   dataType : 'JSON',
			   headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
			   success: function (data){
                    $('#pid').val(data.id);
                    $('#sponsor_name').val(data.name);
			   }
			 });
		   });
		});
	</script>
</body>

</html>