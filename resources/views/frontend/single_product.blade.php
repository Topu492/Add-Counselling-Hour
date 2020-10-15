@include('custom.header')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home  / <a href="{{ route('allProduct') }}"> Product /</a> </a></li>
                    </ol>
                </nav>
                <h5 style="color:#fff;">{{ $product->product_name }}</h5>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <img style="width:100%;margin-bottom: 1%;" src="{{ asset('storage') }}/{{$product->package_image}}">
            </div>
            <div class="col-md-4 col-xs-12">
                <h3>{{ $product->product_name }}</h3>

            </div>
            <div class="col-md-4 col-xs-12">
                <h3>Selected Package</h3>
                <hr>
                <div class="row">
                    <div class="col-md-8 col-9"><h6>Total Rate</h6></div>
                    <div class="col-md-4 col-3"><h6 style="font-weight:bold;">&#2547; {{ $product->total_rate }}</h6></div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-8 col-9"><h6>Package Rate</h6></div>
                    <div class="col-md-4 col-3"><h6 style="font-weight:bold;">&#2547; {{ $product->package_rate }}</h6></div>
                </div>
                <hr>

                <hr>
                @auth
                <div class="btn-search">
                    <a href="{{ route('productBooking', $product->id) }}" class="btn btn-block"> Book Now </a>
                </div>
                @endauth
                @if (!Auth::check())

                <span style="background-color: aqua">To book this package, You have to login!</span>

            @endif

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h3>Why should book this checkup?</h3>
                <p>{!! $product->description !!}</p>
            </div>
        </div>
    </div>

</div>
<!-- /Page Content -->
@include('custom.footer')
