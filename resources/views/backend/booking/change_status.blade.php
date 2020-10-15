@extends('backend._layout')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Update Page</h4>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Update Booking Status</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-8">

                                <form action="{{ route('statusChangeOpt') }}" method="POST">
                                    @csrf
{{--                                    <div class="form-group">--}}
{{--                                        <label for="text">Update Booking Status</label>--}}
{{--                                        <input type="text" class="form-control" name="status" id="status" value="{{ $bookings->status }}" placeholder="Enter Area Name">--}}
{{--                                        <input type="hidden" name="booking_id"  value="{{ $bookings->id }}">--}}
{{--                                    </div>--}}

                                    <!--- Booking & Status -->
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $bookings->id }}">
                                        <label>Update Status</label>
                                        <select name="status" class="form-control select">
                                            @php($statuss= \App\Status::all())
                                            @foreach ($statuss as $status)
                                                <option {{ ($bookings->status == $status->id) ? 'selected' : '' }} value="{{ $status->id }}">{{$status->status_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">Cancel</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

