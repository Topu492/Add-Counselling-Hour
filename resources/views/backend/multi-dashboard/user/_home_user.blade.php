@extends('backend.multi-dashboard.user._layout_user')

@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Hello Dear, {{ Auth::user()->name }} </h2>
                <h5 class="text-white op-7 mb-2">Your Username: {{ Auth::user()->username }}</h5>
            </div>

        </div>
    </div>
</div>
<div class="page-inner mt--20 col-md-12">
  <div class="row mt--9">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 align="center" style="background-color: #0de0fe"> Doctor Booking Status Table</h3>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Patient Name</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Area</th>
                    <th scope="col">Req Date</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{$booking->User->name}}</td>
                        <td>{{$booking->get_doctor_info->name }}</td>
                        <td>{{ $booking->get_doctor_details->Category->category_name }}</td>
                        <td>{{ $booking->get_doctor_details->Area->area_name }}</td>
                        <td> {{ $booking->created_at->format('jS F Y') }}</td>
                        <td>{!! $booking->Status->status_name !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>
    <!-- Product Booking Status -->
    <div class="page-inner mt--20 col-md-12">
        <div class="row mt--9">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 align="center" style="background-color: #0f6674; color: white;"> Product Booking   Status Table</h3>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>

                            <th scope="col">Product Name</th>
                            <th scope="col">Total Rate</th>
                            <th scope="col">Package Rate</th>
                            <th scope="col">Admin PHN Number</th>
                            <th scope="col">Req Date</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product_bookings as $productbooking)
                            <tr>
                                <td>{{$productbooking->get_product_details->product_name}}</td>
                                <td>{{$productbooking->get_product_details->total_rate }}</td>
                                <td>{{ $productbooking->get_product_details->package_rate }}</td>
                                <td>{{ $productbooking->get_product_details->phn_number }}</td>
                                <td> {{ $productbooking->created_at->format('jS F Y') }}</td>
                                <td>{!! $productbooking->Status->status_name !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
