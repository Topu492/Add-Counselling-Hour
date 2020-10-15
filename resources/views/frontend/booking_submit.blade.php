@include('custom.header')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">

                        @if (session()->has('message'))
                            <div class="alert alert-info" role="alert">
                                <strong>Your Request Sent Successfully!</strong>      {{ session()->get('message') }}
                            </div>
                        @endif

                        <div class="col-md-12 col-lg-8">
                            <div class="login-header">
                                <h3>Submit Booking Information For Your Teacher</h3>

                            </div>

                            <form action="{{ route('booking.confirmation') }}" method="post">
                                @csrf
                                <div class="form-group form-focus">
                                    <input type="hidden" name="teacher_id" value="{{ $id }}">
                                    <input type="text" name="topicsFor_booking" class="form-control floating">
                                    <label class="focus-label">Your Topics For Booking</label>

                                </div>
                                <div class="form-group form-focus">
                                    <input type="datetime-local" name="booking_dateTime"  class="form-control floating">
                                    <label class="focus-label">Booking Time</label>
                                </div>

                                <br> <hr>
                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Submit</button>
                            </form>
                            <hr> <br>
                        </div>
                    </div>
                </div>
                <!-- /Login Tab Content -->
            </div>
        </div>
    </div>
</div>

@include('custom.footer')
