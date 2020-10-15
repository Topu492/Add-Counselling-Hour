@include('custom.header')

			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile Settings</h2>
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
                            @include('backend.multi-dashboard.doctor._sidebar_doctor')
							<!-- /Profile Sidebar -->

						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">

							<!-- Basic Information -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Basic Information</h4>
									<div class="row form-row">
										<div class="col-md-12">
											<div class="form-group">
												<div class="change-avatar">

													<div class="profile-img">
                              @if($data->profile_image == "default.png")
														    <img src="{{ asset('/') }}default/default.png" alt="User Image">
                                  @else
                                <img src="{{ asset('storage') }}/{{ $data->profile_image}}" alt="User Image">
                              @endif
													 </div>

                                                    <div class="upload-img">
                          <form action="{{ route('doctor.update.profile_pic') }}" method="post" enctype="multipart/form-data">
                              @csrf
                               <div class="change-photo-btn">
                                  <span><i class="fa fa-upload"></i> Upload Photo</span>
                                    <input type="file" name="profile_pic" class="upload">
                                </div>
                                <button type="submit" class="btn btn-success">Save Changes</button>
                                </form>
                                <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Basic Information -->
							@if (session()->has('success'))
							<div class="alert alert-success">
									{{ session()->get('success') }}
							</div>
							@endif
                            <!-- About Me -->
                            <div class="content">
                            <form action="{{ route('doctor.upadeteprofileSeetings') }}" method="POST">
                            @csrf

							                   <div class="card">
							                   	<div class="card-body">
                                    <h4 class="card-title">Biography</h4>
                                     <div class="form-group mb-0">
                                        <div class="form-group">
                                  <label>Full Name <span class="text-danger">*</span></label>
                                  <input type="text" name="name" class="form-control" value="{{$details_user->name}}">
                                        </div>
                                    </div>
									<div class="form-group mb-0">
										<label>About Me</label>
										<textarea class="form-control" name="about_me" rows="5">{{ $details->about_me }}</textarea>
									</div> <br>
                                                    <div class="form-group mb-0">
										                <label>Publication</label>
										                <textarea class="form-control" name="publication" rows="4">{{ $details->publication }}</textarea>
									            </div> <br>
                                                    <div class="form-group mb-0">
                                                        <label>Interest</label>
                                                        <textarea class="form-control" name="interest" rows="3">{{ $details->interest }}</textarea>
                                                    </div>



								</div>
							</div>
							<!-- /About Me -->
							<!-- Clinic Info -->
							<!-- /Clinic Info -->
							<!-- Contact Details -->
							<div class="card contact-card">
								<div class="card-body">
									<h4 class="card-title">Contact Details</h4>
									<div class="row form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Teacher ID</label>
												<input type="text" class="form-control" name="teacher_varsity_id" value="{{$details->teacher_varsity_id}}">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Email</label>
												<input type="text" class="form-control" name="email" value="{{$data->email}}">
											</div>
										</div>
										<!-- PHN NO  -->
										<div class="col-md-6">
											<div class="form-group">
												<label>PHN Number</label>
												<input type="text" class="form-control" name="phn_number" value="{{$details_user->phn_number}}">
											</div>
										</div>
										<!-- END of PHN -->
										</div>
								</div>
							</div>
							<!-- /Contact Details -->
            <!-- Pricing -->
        <!-- Area  Selection Start -->
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Campus & Room No</h4>

        <div class="registrations-info">
            <div class="row form-row reg-cont">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Select Your Campus</label>
                        <select name="area_name_id" class="form-control select">
                            @php($areas= \App\Area::all())
                            @foreach ($areas as $area)
                            <option {{ ( $details->area_name_id == $area->id) ? "Selected" : ""  }} value="{{$area->id}}">{{$area->area_name}}</option>
                            @endforeach
                        </select>
                    </div>

                            <div class="form-group">
                                <label>Room No</label>
                                <input type="text" class="form-control" name="room_no" value="{{$details->room_no}}">
                            </div>


                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Area Selection End -->
							<!-- Services and Specialization 2-->
							<div class="card services-card">
								<div class="card-body">
									<h4 class="card-title">Specialization</h4>
									<div class="col-md-6">
										<label>Specialization </label>
										<input class="input-tags form-control" type="text" data-role="tagsinput" placeholder="Enter Specialization" name="edu_degree" value="{{$details->edu_degree}}"  id="edu_degree">
										<small class="form-text text-muted">Note : It'll be under your name</small>
                                    </div>
									<div class="col-md-6">
										<label>Employee Title</label>
										<input class="input-tags form-control" type="text" data-role="tagsinput" placeholder="ex: Lecturer" name="work_title" value="{{$details->work_title}}"  id="work_title">
                                    </div>

                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Your Department</label>
                                            <select name="category_name_id" class="form-control select">
                                                @php($categories= \App\Category::all())
                                                @foreach ($categories as $category)
                                                <option {{ ( $details->category_name_id == $category->id) ? "Selected" : ""  }} value="{{$category->id}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
																		</div>
																</div>
							<!-- /Services and Specialization -->
							<div class="submit-section submit-btn-bottom">
								<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
							</div>
            </div>
        </form>

            </div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->

	@include('custom.footer')
