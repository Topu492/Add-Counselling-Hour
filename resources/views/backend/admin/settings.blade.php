@extends('backend._layout')
@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Site Settings')
            </h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Settings</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>

            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="card-title">Website Controlling Option</div>
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
                                <form action="{{route('admin.settings.store')}}" method="POST">
                                    <!--  -->
                                    @csrf
                                    <div class="form-group">
                                        <label for="text">Add Site PHN Number</label>
                                        <input type="text" class="form-control" name="site_phnNumber" id="text" placeholder="Enter PHN Number" value="{{$site_data->site_phnNumber}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Add Site Mail</label>
                                        <input type="email" class="form-control" name="site_mail" id="text" placeholder="Enter Site Mail" value="{{$site_data->site_mail}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Add Site Address</label>
                                        <textarea type="text" class="form-control" name="site_address" id="text" placeholder="Enter Site Address" >{{$site_data->site_address}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Add Site Short Description</label>
                                        <textarea type="text" class="form-control" name="site_shortDescription" id="text" placeholder="Enter Short Description">{{$site_data->site_shortDescription}}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Add Facebook Page</label>
                                        <input type="text" class="form-control" name="site_fbLink" id="text" placeholder="Enter Facebook Link" value="{{$site_data->site_fbLink}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Add Youtube Link</label>
                                        <input type="text" class="form-control" name="site_ytLink" id="text" placeholder="Enter Youtube Link" value="{{$site_data->site_ytLink}}">
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
