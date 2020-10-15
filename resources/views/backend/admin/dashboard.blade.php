@extends('backend._layout')

@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold"> Welcome to Dashboard , <strong> {{ Auth::user()->name }} </strong>  <br>
                   </b>
                </h2>
                <h4 class="text-white op-12 mb-2">You are authenticated as <b> {{   Auth::user()->role->name }} </b> </h4>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">

   <!--  End Star -->
        <div class="col-md-4">
            <div class="card card-secondary">
                <div class="card-body skew-shadow">
                    <h1>{{ $users = \App\User::where('role_id', '4')->count() }}</h1>
                    <h5 class="op-10">Total Users</h5>
                    <div class="pull-right">
                        <h3 class="fw-bold op-10">User Database</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-dark bg-secondary-gradient">
                <div class="card-body bubble-shadow">
                    <h1>{{ $users = \App\User::where('role_id','2')->count() }}</h1>
                    <h5 class="op-10">Total Teacher</h5>
                    <div class="pull-right">
                        <h3 class="fw-bold op-10">Teacher Database</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-dark bg-secondary2">
                <div class="card-body curves-shadow">
                    <h1>{{ $users = \App\User::where('role_id','3')->count() }}</h1>
                    <h5 class="op-10">Total Student</h5>
                    <div class="pull-right">
                        <h3 class="fw-bold op-10">Student Database</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start -->
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-primary card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-shopping-bag"></i>
                            </div>
                        </div>
                        {{-- <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Total Product</p>
                                <h4 class="card-title">{{ \App\Product::count() }}</h4>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-info card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-interface-6"></i>
                            </div>
                        </div>
                        {{-- <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Product Booking</p>
                                <h4 class="card-title">{{ \App\ProductBooking::count() }}</h4>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-success card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-shapes-1"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Total Dept.

                                </p>
                                <h4 class="card-title">{{ \App\Category::count() }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-secondary card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-box-2"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Total Campus </p>
                                <h4 class="card-title">{{ \App\Area::count() }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!--   Data Table Add -->
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-chart-pie text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Doctor Booking</p>
                                <h4 class="card-title">{{ \App\Booking::count() }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Another Booking</p>
                                <h4 class="card-title">Blank</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-delivery-truck text-primary"></i>
                            </div>
                        </div>
                        {{-- <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Nurse Booking</p>
                                <h4 class="card-title">{{ \App\ContactForm::count() }}</h4>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-success text-gray"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Dear , </p>
                                <h4 class="card-title">Thank You!</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Data -->
    <div class="row">
        <div class="col-md-12">
            <!-- Notification Start Here -->
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        <!-- Notification End Here -->
            <div class="card">
                <div class="card-header">
                    <div class="card-header">
                        <h4 align="center" class="card-title" style="background-color: darkcyan; color: white;">Counseling Hour Booking</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Teacher Name</th>
                                <th>Dept.</th>
                                <th>Appointment date</th>
                                <th>Student PHN No</th>
                                <th>Status</th>
                                <th>Delete</th>

                            </tr>
                            </thead>

                            <tbody>

                @foreach($bookings  as $booking)
                            <tr>
                                <td>{{ $booking->User->name }}</td>
                                <td>{{ $booking->teacher->name }}</td>
                                <td>{{ $booking->get_doctor_details->Category->category_name }}</td>
                                <td>{{ $booking->created_at->format('jS F Y') }}</td>
                                <td>{{ $booking->User->phn_number }}</td>
                                <td>{!! $booking->Status->status_name !!}</td>
                                <td>
                                    <a href="{{ route('bookingDelete', $booking->id )}}" type="button" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Doctor Booking Table  -->

</div>
@endsection
