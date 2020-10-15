@include('custom.header')

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Booking</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Product Booking</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content success-page-cont">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-6">

                <!-- Success Card -->
                <div class="card success-card">
                    <div class="card-body">
                        <div class="success-cont">
                            <i class="fas fa-check"></i>
                            <h3>Product booked Successfully!</h3>
                            <p>Your Product Buying Request is Sent To Our Admin Panel. <br>
                                Our Admin Will Contact With You Immediately. Please Check Your Dashboard For Admin Activity.
                                <span>Thank You!</span>
                            </p>
                            <a href="{{route('user.dashboard')}}" class="btn btn-primary view-inv-btn">Check Status</a>
                        </div>
                    </div>
                </div>
                <!-- /Success Card -->
            </div>
        </div>

    </div>
</div>
<!-- /Page Content -->

@include('custom.footer')
