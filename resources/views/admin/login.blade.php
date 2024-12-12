<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/auth-basic-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 09:10:21 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ url('admin_assets/assets/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ url('admin_assets/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ url('admin_assets/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ url('admin_assets/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ url('admin_assets/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ url('admin_assets/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ url('admin_assets/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ url('admin_assets/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ url('admin_assets/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ url('admin_assets/assets/css/icons.css') }}" rel="stylesheet">

	<title>Admin Login</title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mb-0">
							<div class="card-body">
								<div class="p-4">
									<div class="mb-3 text-center">
										<img src="{{ url('admin_assets/assets/images/logo-icon.png') }}" width="60" alt="" />
									</div>
									<div class="text-center mb-4">
										<h5 class="">Admin</h5>
										<p class="mb-0">Please log in to your account</p>
									</div>
									<div class="form-body">
										<form class="row g-3" method="POST" action="{{ url('admin_login') }}">
											@if (Session::has('success'))
                                        <div class="alert alert-success alert-dismissable">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    @if (Session::has('error'))
                                        <div id="popup" class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                        <script>
                                            // Function to hide the popup after 3 seconds
                                            setTimeout(function(){
                                                document.getElementById('popup').style.display = 'none';
                                            }, 3000); // 3000 milliseconds = 3 seconds
                                        </script>
                                    @endif
                                    @if (Session::has('loginfirst'))
                                        <div class="alert alert-danger alert-dismissable">
                                            {{ Session::get('loginfirst') }}
                                        </div>
                                    @endif

											@csrf
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" name="email" class="form-control" value="{{ old('email') }}" id="inputEmailAddress" placeholder="email@example.com">
												<span class="text-danger">@error('email')
													{{ $message }}
												  @enderror</span>
											</div>
											<div class="col-12 mb-4">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" name="password" value="{{ old('password') }}" class="form-control border-end-0" id="inputChoosePassword" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>

												</div>
												<span class="text-danger">@error('password')
													{{ $message }}
												  @enderror</span>
											</div>
											{{-- <div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div> --}}
											{{-- <div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a> --}}
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" value="submit" class="btn btn-primary">Sign in</button>
												</div>
											</div>
											{{-- <div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
													</p>
												</div>
											</div> --}}
										</form>
									</div>
									{{-- <div class="login-separater text-center mb-5"> <span>OR SIGN IN WITH</span>
										<hr/>
									</div>
									<div class="list-inline contacts-social text-center">
										<a href="javascript:;" class="list-inline-item bg-facebook text-white border-0 rounded-3"><i class="bx bxl-facebook"></i></a>
										<a href="javascript:;" class="list-inline-item bg-twitter text-white border-0 rounded-3"><i class="bx bxl-twitter"></i></a>
										<a href="javascript:;" class="list-inline-item bg-google text-white border-0 rounded-3"><i class="bx bxl-google"></i></a>
										<a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i class="bx bxl-linkedin"></i></a>
									</div> --}}

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{ url('admin_assets/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ url('admin_assets/assets/js/jquery.min.js') }}"></script>
	<script src="{{ url('admin_assets/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ url('admin_assets/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ url('admin_assets/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{ url('admin_assets/assets/js/app.js') }}"></script>
</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/auth-basic-signin.tml by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 09:10:21 GMT -->
</html>
