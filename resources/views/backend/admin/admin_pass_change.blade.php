@extends('backend._layout')
@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Settings')
            </h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="{{ url('/admin/dashboard') }}">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Admin</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Password Change</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="card-title">Change Your Here</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-8">

                                <!-- error message -->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <!-- error message end -->
                                <!-- Notification Start Here -->
                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                            <!-- Notification End Here -->
                                <form action="{{ route('admin.changepaswword') }}" method="POST">
                                    <!--  -->
                                    @csrf
                                    <div class="form-group">
                                        <label for="text">Enter Your Old Password</label>
                                        <input type="text" class="form-control" name="oldpassword" id="text" placeholder="Enter Your Old Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Enter Your New Password</label>
                                        <input type="text" class="form-control" name="password" id="text" placeholder="Enter Your New Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Confirm Your New Password</label>
                                        <input type="text" class="form-control" name="password_confirmation" id="text" placeholder="Confirm Your New Password">
                                    </div>

                                </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                            <a href="#" class="btn btn-danger">Cancel</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
