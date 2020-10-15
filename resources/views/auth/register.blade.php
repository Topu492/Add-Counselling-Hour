@include('custom.header')

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-8 offset-md-2">

							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="{{ asset('/') }}frontend/assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Patient Register <a href="{{ route('doctorSignUpForm') }}">Are you a Doctor?</a></h3>

                                         @if (count($errors)>0)
                                             <ul>
                                                 @foreach($errors->all() as $error)
                                                     <li class="alert alert-danger">{{ $error }}</li>
                                                     @endforeach
                                             </ul>
                                         @endif
										</div>

										<!-- Register Form -->
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
											<div class="form-group form-focus">
												<input type="text" name="name" class="form-control floating">
                                                <label class="focus-label">Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="email" name="email" class="form-control floating">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" name="phn_number" class="form-control floating">
												<label class="focus-label">PHN Number</label>
											</div>
										    <div class="form-group form-focus">
												<input type="text" name="username" class="form-control floating">
												<label class="focus-label">Username</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" name="password" class="form-control floating">
												<label class="focus-label">Create Password</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" name="password_confirmation" class="form-control floating">
												<label class="focus-label">Confirm Password</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="{{ url('/login') }}">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>

										</form>
										<!-- /Register Form -->

									</div>
								</div>
							</div>
							<!-- /Register Content -->

						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->

@include('custom.footer')
