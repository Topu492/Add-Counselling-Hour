 			<!-- Footer -->
             <footer class="footer">


				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="{{ asset('/') }}frontend/assets/img/footer-logo.png" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>{{ $settings->site_shortDescription }}</p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="{{ $settings->site_fbLink }}" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="{{ $settings->site_ytLink }}" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Students</h2>
									<ul>

										<li><a href="{{ route('login') }} "><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="{{ route('register') }}"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="{{ route('user.dashboard') }}"><i class="fas fa-angle-double-right"></i> Dashboard</a></li>
										<li><a href="{{ url('/password/reset') }}"><i class="fas fa-angle-double-right"></i>Reset Password</a></li>
										<li><a href="{{ route('search.doctor') }}"><i class="fas fa-angle-double-right"></i> Search Teachers</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Others</h2>
									<ul>

										<li><a href=" {{ route('login') }} "><i class="fas fa-angle-double-right"></i>Teacher Login</a></li>
										<li><a href=" {{ route('doctorSignUpForm') }} "><i class="fas fa-angle-double-right"></i>Teacher Registration</a></li>
                                        <li><a href=" {{route('login')}} "><i class="fas fa-angle-double-right"></i> Student Login</a></li>
                                        <li><a href=" {{route('nurse.signup')}} "><i class="fas fa-angle-double-right"></i>Student Registration</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> {{ $settings->site_address }} </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
                                            {{ $settings->site_phnNumber }}
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
                                            {{ $settings->site_mail }}
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->

							</div>

						</div>
					</div>
				</div>
				<!-- /Footer Top -->

				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container-fluid">

						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0">&copy; {{ now()->year }} DIU Counseling Management .  Developed By
											<a href="#"> Batch - 44 CSE </a>
										</p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">

									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="#">Terms and Conditions</a></li>
											<li><a href="#">Policy</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->

								</div>
							</div>
						</div>
						<!-- /Copyright -->

					</div>
				</div>
				<!-- /Footer Bottom -->

			</footer>
			<!-- /Footer -->

	   </div>
	   <!-- /Main Wrapper -->

       <!-- JS File Start -->

		<!-- jQuery -->
		<script src="{{ asset('/') }}frontend/assets/js/jquery.min.js"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{ asset('/') }}frontend/assets/js/popper.min.js"></script>
		<script src="{{ asset('/') }}frontend/assets/js/bootstrap.min.js"></script>

		<!-- Slick JS -->
		<script src="{{ asset('/') }}frontend/assets/js/slick.js"></script>

		<!-- Custom JS -->
		<script src="{{ asset('/') }}frontend/assets/js/script.js"></script>
		<!-- jQuery -->
		<script src="{{ asset('/') }}frontend/assets/js/jquery.min.js"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{ asset('/') }}frontend/assets/js/popper.min.js"></script>
		<script src="{{ asset('/') }}frontend/assets/js/bootstrap.min.js"></script>

		<!-- Sticky Sidebar JS -->
        <script src="{{ asset('/') }}frontend/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="{{ asset('/') }}frontend/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

		<!-- Datetimepicker JS -->
		<script src="{{ asset('/') }}frontend/assets/js/moment.min.js"></script>
		<script src="{{ asset('/') }}frontend/assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Full Calendar JS -->
        <script src="{{ asset('/') }}frontend/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="{{ asset('/') }}frontend/assets/plugins/fullcalendar/fullcalendar.min.js"></script>
        <script src="{{ asset('/') }}frontend/assets/plugins/fullcalendar/jquery.fullcalendar.js"></script>
        <script src="{{ asset('/') }}frontend/assets/plugins/fancybox/jquery.fancybox.min.js"></script>

		<!-- Custom JS -->
        <script src="{{ asset('/') }}frontend/assets/js/script.js"></script>

	</body>

</html>
