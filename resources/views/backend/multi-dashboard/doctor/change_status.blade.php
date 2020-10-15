@include('custom.header')


<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('doctor.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Status Action</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Status Action</h2>
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
            <!-- /Profile Sidebar -->

            </div>
            <div class="col-md-7 col-lg-8 col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">

                                <div class="card-body">
                                    <!-- Modal -->
                                    <!-- Notification Start Here -->
                                    @if (session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif

                                    @if (session()->has('errorMSG'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('errorMSG') }}
                                        </div>
                                    @endif

                                </div>

                                <!-- Change Password Form -->
                                <form action="{{ route('teacher.status') }}" method="POST">
                                @csrf

                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $bookings->id }}">
                                        <label>Update Status</label>
                                        <select name="status" class="form-control select">
                                            @php($statuss= \App\Status::all())
                                            @foreach ($statuss as $status)
                                                <option {{ ($bookings->status_id == $status->id) ? 'selected' : '' }} value="{{ $status->id }}">{{$status->status_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="#" class="btn btn-danger">Cancel</a>
                    </div>
                    </form>
                                <!-- /Change Password Form -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



@include('custom.footer')
