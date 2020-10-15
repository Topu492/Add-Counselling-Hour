@include('custom.header')


    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Search</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Your search result here</h2>
                </div>
                <div class="col-md-4 col-12 d-md-block d-none">

                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">

                    <!-- Search Filter -->

                    <!-- /Search Filter -->

                </div>

                <div class="col-md-12 col-lg-8 col-xl-9">

                    <!-- Doctor Widget -->
                    @forelse($doctors as $doctor)
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="doctor-profile.php">
                                            <div class="profile-img">
                                                @if($doctor->user->profile_image == "default.png")
                                                    <img src="{{ asset('/') }}default/default.png" alt="User Image" style="width: 150px; max-width: 100%">
                                                @else
                                                    <img src="{{asset('storage')}}/{{$doctor->User->profile_image}}" class="img-fluid" alt="User Image">
                                                @endif
                                            </div>

                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="{{ route('profile.show' , $doctor->user->username) }}">{{ $doctor->user->name }}</a></h4>
                                        <p class="doc-speciality">{{$doctor->edu_degree}}</p>
                                        <h5 class="doc-department"><img src="{{ asset('/') }}frontend/assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality">{{ $doctor->Category->category_name}}</h5>

                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> {{$doctor->Area->area_name}}</p>

                                        </div>
                                        @if (!Auth::user())
                                            <div class="clinic-services">
                                                <span>If you are not logged in you can't book a doctor</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> {{ $doctor->work_exp }} Years Experience</li>
{{--                                            <li><i class="far fa-comment"></i> 17 Feedback</li>--}}
                                            <li><i class="fas fa-map-marker-alt"></i> {{$doctor->Area->area_name}}</li>
                                            <li><i class="far fa-money-bill-alt"></i> {{ $doctor->doctor_fees }} <i class="fas fa-info-circle" data-toggle="tooltip" title="Visiting Fees May Update!"></i> </li>

                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ route('profile.show' , $doctor->user->username) }}">View Profile</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <h1>Sorry! No Doctor Found on Your Criteria</h1>
                        <a type="button" class="btn btn-facebook" href="{{ route('search.doctor') }}" style="color: honeydew"> Search Again</a>
                @endforelse
                    <!-- /Doctor Widget -->
                    <div class="load-more text-center">
                        <a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>
                    </div>


                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->

@include('custom.footer')
