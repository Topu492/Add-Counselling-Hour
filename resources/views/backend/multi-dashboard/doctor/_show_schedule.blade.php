@include('custom.header')

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('doctor.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('doctor.dashboard')}}">Dashboard</a>
                        </li>
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
            @include('backend.multi-dashboard.doctor._sidebar_doctor')
            <!-- /Profile Sidebar -->
            </div>

            <!-- Start From Here -->

            <div class="col-md-7 col-lg-8 col-xl-9">

                <!-- Basic Information -->

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <div class="content">
                    <form action="{{ route('schedulePost') }}" method="POST">

                        @csrf

                        <div class="card contact-card">
                            <div class="card-body">
                                <h4 class="card-title">Schedule Details</h4>
                                <div class="row form-row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Week Day</label>
                                            <input type="day" class="form-control" name="day" placeholder="ex: SAT">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input type="time" class="form-control" name="time_start">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Time End</label>
                                            <input type="time" class="form-control" name="time_end">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Which Topics</label>
                                            <input type="text" class="form-control" name="which_topics">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="submit-section submit-btn-bottom">
                            <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                        </div>
                </div>
                </form>
                <!--Table Start -->
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Day</th>
                        <th scope="col">Start Session</th>
                        <th scope="col">End Session</th>
                        <th scope="col">About Topics</th>
                        <th scope="col">Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($schedules as $schedule)

                        <tr>
                            <td>{{ $schedule->day }}</td>
                            <td style="background-color: #2ecc71">{{ date('h:i A', strtotime($schedule->time_start)) }}</td>
                            <td style="background-color: #EA2027; color: aliceblue">{{ date('h:i A', strtotime($schedule->time_end)) }}</td>
                            <td>{{ $schedule->which_topics }}</td>
                            <td>
                                <a href="{{ route('deleteSchedule' , $schedule->id) }}" type="button"
                                   data-toggle="tooltip" data-original-title="Remove">
                                    <i class="fas fa-trash-alt"> </i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!--Table End-->
            </div>


        </div>

    </div>
</div>
<!-- /Page Content -->

<!-- End Here -->


</div>
</div>
</div>
<!-- /Page Content -->


<!-- Footer Start -->
@include('custom.footer')
