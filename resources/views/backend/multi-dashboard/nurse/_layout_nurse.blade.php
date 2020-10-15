@include('custom.header')

			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/nurse/dashboard')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Dashboard</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

							<!-- Profile Sidebar -->
							@include('backend.multi-dashboard.nurse._sidebar_nurse')
							<!-- /Profile Sidebar -->

						</div>

						<div class="col-md-7 col-lg-8 col-xl-9">

							<div class="row">
								<div class="col-md-12">
									<div class="card dash-card">
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar1">
															<div class="circle-graph1" data-percent="75">
																<img src="{{ asset('/') }}frontend/assets/img/icon-01.png" class="img-fluid" alt="patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Your Username</h6>
															<h3> {{Auth::User()->username }} </h3>

														</div>
													</div>
												</div>

												<div class="col-md-12 col-lg-4">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar2">
															<div class="circle-graph2" data-percent="65">
																<img src="{{ asset('/') }}frontend/assets/img/icon-02.png" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Your Email</h6>
															<h3>{{ Auth::user()->email }}</h3>

														</div>
													</div>
												</div>

												<div class="col-md-12 col-lg-4">
													<div class="dash-widget">
														<div class="circle-bar circle-bar3">
															<div class="circle-graph3" data-percent="50">
																<img src="{{ asset('/') }}frontend/assets/img/icon-03.png" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Account Created</h6>
															<h3>{{ Auth::user()->created_at->format('jS F Y') }}</h3>

														</div>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    <!-- Table Start -->
                                    <table class="table">
                                       <thead>
                                         <tr>
                                           <th scope="col">Teacher Name</th>
                                           <th scope="col">Booking Date</th>
                                           <th scope="col">Booking Topics</th>
                                           <th scope="col">Booking Status</th>
                                         </tr>
                                       </thead>
                                       <tbody>

                                            @foreach ($bookings as $item)
                                         <tr>
                                           <td>{{ $item->teacher->name }}</td>
                                           <td>{{ date('d/M/Y h:i A', strtotime($item->booking_dateTime)) }}</td>
                                           <td>{{ $item->topicsFor_booking }}</td>
                                           <td>{{ $item->status->status_name }}</td>
                                         </tr>
                                         @endforeach
                                       </tbody>
                                     </table>
                                    <!-- Table Start -->


								</div>
							</div>


						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->

<!-- Footer Start -->
@include('custom.footer')
