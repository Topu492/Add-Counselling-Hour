@if(Auth::user()->role_id == 4)
@extends('backend.multi-dashboard.user._layout_user')
@elseif(Auth::user()->role_id == 1)
    @extends('backend._layout')
    @elseif(Auth::user()->role_id == 2)
        @extends('backend.multi-dashboard.doctor._layout_doctor')
{{--} @else(Auth::user()->role_id == 2) {--}}
{{--@extends('backend.multi-dashboard.doctor._layout_doctor')--}}
{{--}@else(Auth::user()->role_id == 3) {--}}
{{--@extends('backend.multi-dashboard.nurse._layout_nurse')--}}
{{--} @else{--}}
{{--@extends('backend.multi-dashboard.user._layout_user')--}}
{{--}--}}
@endif

@section('content')

    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Panels</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Base</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Panels</a>
                    </li>
                </ul>
            </div>
            <div class="row">

                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Seetings Page</h4>
                        </div>

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif


                        <div class="card-body">
                            <div class="row">
                                <div class="col-5 col-md-4">
                                    <div class="nav flex-column nav-pills nav-secondary" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Update Profile</a>
                                        <a class="nav-link" id="v-pills-change_pass-tab" data-toggle="pill" href="#v-pills-change_pass" role="tab" aria-controls="v-pills-change_pass" aria-selected="false">Change Password</a>

                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-12">
                                        <form method="POST" action="{{route('profile.update') }}" class="form-control" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
											<div class="form-group">
												<label for="name">Full Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{Auth::user()->name}}">
											</div>
											{{-- <div class="form-group">
												<label for="disableinput">Disable Input</label>
												<input type="text" class="form-control" id="disableinput" placeholder="Enter Input" disabled>
											</div> --}}
											<div class="form-group">
												<label for="text">Username</label>
												<input type="text" class="form-control" id="username" name="username" placeholder="Username" value="{{Auth::user()->username}}">
											</div>
											<div class="form-group">
												<label for="text">PHN Number</label>
												<input type="text" class="form-control" id="phn_number" name="phn_number" placeholder="Phn Number" value="{{Auth::user()->phn_number}}">
											</div>
{{--											<div class="form-group">--}}
{{--												<label for="exampleFormControlFile1">Profile Image</label>--}}
{{--												<input type="file" class="form-control-file" id="profile_image" name="profile_image">--}}
{{--                                            </div>--}}

										</div>
									</div>
								</div>
								<div class="card-action">
									<button class="btn btn-success" type="submit">Submit</button>
									<button class="btn btn-danger">Cancel</button>
                                </div>
                            </form>
							</div>
						</div>
                    </div>
                                        <div class="tab-pane fade" id="v-pills-change_pass" role="tabpanel" aria-labelledby="v-pills-change_pass-tab">
                                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
