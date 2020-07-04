<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
         <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>YMC-Dashboard</title>

         <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets\css\bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets\css\font-awesome.min.css">

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets\css\line-awesome.min.css">

		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets\css\dataTables.bootstrap4.min.css">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets\css\select2.min.css">

		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets\css\bootstrap-datetimepicker.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="assets\css\style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
            <div class="header">

				<!-- Logo -->
                <div class="header-left">
                    <a href="#" class="logo">
						<img src="assets\img\logo.png" width="40" height="40" alt="">
					</a>
                </div>
				<!-- /Logo -->

				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>

				<!-- Header Title -->
                <div class="page-title-box">
					<h3>YMC WEB PORTAL</h3>
                </div>
				<!-- /Header Title -->

				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

				<!-- Header Menu -->
				<ul class="nav user-menu">





                        {{-- @guest

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else --}}

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="assets\img\profiles\driver.png" alt="">
							<span class="status online"></span></span>
							<span> {{ Auth::user()->name }}</span>
						</a>
						<div class="dropdown-menu">
							{{-- <a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="settings.html">Settings</a> --}}
							<a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
						</div>
                    </li>
                    {{-- @endguest --}}
				</ul>
				<!-- /Header Menu -->

				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
					</div>
				</div>
				<!-- /Mobile Menu -->

            </div>
			<!-- /Header -->

			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title">
								<span>Main</span>
							</li>
							<li>
								<a href="{{route('dashboard')}}"><i class="la la-dashboard"></i> <span> Dashboard</span> </a>

							</li>
							{{-- <li >
                            <a href="{{route('client.registed')}}"><i class="la la-user"></i> <span> Registed Clients</span> </a>

                            </li> --}}
                            <li >
                                <a href="{{route('ymc.members')}}"><i class="la la-user"></i> <span> Members</span> </a>

                                </li>

							{{-- <li class="menu-title">
								 <span>Accounts</span>
                            </li>
                            <li >
                                    <a href="{{route('portal.registed')}}"><i class="la la-user-plus"></i> <span> Registed Clients</span> </a>

                                    </li> --}}
							{{--<li class="submenu">
								<a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="employees.html">All Employees</a></li>
									<li><a href="holidays.html">Holidays</a></li>

								</ul>
							</li> --}}


						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->




            @yield('content')


				<!-- Add Salary Modal -->
				<div id="add_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Staff Salary</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Select Staff</label>
												<select class="select">
													<option>John Doe</option>
													<option>Richard Miles</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<label>Net Salary</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<h4 class="text-primary">Earnings</h4>
											<div class="form-group">
												<label>Basic</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>DA(40%)</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>HRA(15%)</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Conveyance</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Allowance</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Medical  Allowance</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Others</label>
												<input class="form-control" type="text">
											</div>
											<div class="add-more">
												<a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
											</div>
										</div>
										<div class="col-sm-6">
											<h4 class="text-primary">Deductions</h4>
											<div class="form-group">
												<label>TDS</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>ESI</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>PF</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Leave</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Prof. Tax</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Labour Welfare</label>
												<input class="form-control" type="text">
											</div>
											<div class="form-group">
												<label>Others</label>
												<input class="form-control" type="text">
											</div>
											<div class="add-more">
												<a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Salary Modal -->

				<!-- Edit Salary Modal -->
				<div id="edit_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Staff Salary</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Select Staff</label>
												<select class="select">
													<option>John Doe</option>
													<option>Richard Miles</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<label>Net Salary</label>
											<input class="form-control" type="text" value="$4000">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<h4 class="text-primary">Earnings</h4>
											<div class="form-group">
												<label>Basic</label>
												<input class="form-control" type="text" value="$6500">
											</div>
											<div class="form-group">
												<label>DA(40%)</label>
												<input class="form-control" type="text" value="$2000">
											</div>
											<div class="form-group">
												<label>HRA(15%)</label>
												<input class="form-control" type="text" value="$700">
											</div>
											<div class="form-group">
												<label>Conveyance</label>
												<input class="form-control" type="text" value="$70">
											</div>
											<div class="form-group">
												<label>Allowance</label>
												<input class="form-control" type="text" value="$30">
											</div>
											<div class="form-group">
												<label>Medical  Allowance</label>
												<input class="form-control" type="text" value="$20">
											</div>
											<div class="form-group">
												<label>Others</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<h4 class="text-primary">Deductions</h4>
											<div class="form-group">
												<label>TDS</label>
												<input class="form-control" type="text" value="$300">
											</div>
											<div class="form-group">
												<label>ESI</label>
												<input class="form-control" type="text" value="$20">
											</div>
											<div class="form-group">
												<label>PF</label>
												<input class="form-control" type="text" value="$20">
											</div>
											<div class="form-group">
												<label>Leave</label>
												<input class="form-control" type="text" value="$250">
											</div>
											<div class="form-group">
												<label>Prof. Tax</label>
												<input class="form-control" type="text" value="$110">
											</div>
											<div class="form-group">
												<label>Labour Welfare</label>
												<input class="form-control" type="text" value="$10">
											</div>
											<div class="form-group">
												<label>Fund</label>
												<input class="form-control" type="text" value="$40">
											</div>
											<div class="form-group">
												<label>Others</label>
												<input class="form-control" type="text" value="$15">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Salary Modal -->

				<!-- Delete Salary Modal -->
				<div class="modal custom-modal fade" id="delete_salary" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Salary</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Salary Modal -->

            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets\js\jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets\js\popper.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets\js\jquery.slimscroll.min.js"></script>

		<!-- Select2 JS -->
		<script src="assets\js\select2.min.js"></script>

		<!-- Datetimepicker JS -->
		<script src="assets\js\moment.min.js"></script>
		<script src="assets\js\bootstrap-datetimepicker.min.js"></script>

		<!-- Datatable JS -->
		<script src="assets\js\jquery.dataTables.min.js"></script>
		<script src="assets\js\dataTables.bootstrap4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets\js\app.js"></script>

    </body>
</html>
