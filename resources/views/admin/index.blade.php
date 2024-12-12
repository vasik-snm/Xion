@extends('admin.layouts.main')

@section('main-container')
		<!--start page wrapper -->
		<div class="page-wrapper">
			@if (Session::has('success'))
											<div class="alert alert-success alert-dismissable">
												{{ Session::get('success') }}
											</div>
											@endif
											@if (Session::has('fail'))
											<div class="alert alert-danger alert-dismissable">
												{{ Session::get('fail') }}
											</div>
											@endif
			<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                   <div class="col">
					 <div class="card radius-10 border-start border-0 border-4 border-info">
						<div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Enquiry</p>
                                    <h4 class="my-1 text-info">{{ $totalContacts }}</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto">
                                    <i class="fa-solid fa-circle-info"></i>
                                </div>
                            </div>
                        </div>
					 </div>
				   </div>

				   {{-- <div class="col">
					<div class="card radius-10 border-start border-0 border-4 border-danger">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total  Designs</p>
								   	@php
									$token = Session::get('Token');
									@endphp
								   <p class="my-1 text-danger">{{$token}}</p>
								   <p class="mb-0 font-13">+5.4% from last week</p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto"><i class='bx bxs-wallet'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div> --}}
				  {{-- <div class="col">
					<div class="card radius-10 border-start border-0 border-4 border-success">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total  Reels</p>
								   <h4 class="my-1 text-success">34</h4>
								   <p class="mb-0 font-13">-4.5% from last week</p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bxs-bar-chart-alt-2' ></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div> --}}

				  {{-- <div class="col">
					<div class="card radius-10 border-start border-0 border-4 border-warning">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Customers</p>
								   <h4 class="my-1 text-warning">8.4K</h4>
								   <p class="mb-0 font-13">+8.4% from last week</p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto"><i class='bx bxs-group'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>  --}}
				</div><!--end row-->

			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		 <div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2022. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->

@endsection
