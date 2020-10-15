  @include('custom.header')
    		<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-8 offset-md-2">

							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="{{ asset('/') }}frontend/assets/img/login-banner.png" class="img-fluid" alt="AmarDoctor Login">
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login <span>AmarDoctor</span></h3>
										</div>
                                        <form method="POST" action="{{ route('login') }}">
                                        @csrf
											<div class="form-group form-focus">
												<input type="email" name="email" id="email" class="form-control floating @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                <label class="focus-label">Email</label>

                                                @error('email')
                                               <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                               </span>
                                                @enderror
											</div>
											<div class="form-group form-focus">
												<input type="password" id="password" name="password" class="form-control floating @error('password') is-invalid @enderror" required autocomplete="current-password">
												<label class="focus-label">Password</label>
                                            </div>

											<div class="text-right">
                                                @if (Route::has('password.request'))
                                                <a class="forgot-link" href="{{ route('password.request') }}">Forgot Password ?</a>
                                                @endif
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
												</div>
												<div class="col-6">
													<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
												</div>
											</div>
											<div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->

						</div>
					</div>

				</div>

			</div>
            <!-- /Page Content -->
   @include('custom.footer')
