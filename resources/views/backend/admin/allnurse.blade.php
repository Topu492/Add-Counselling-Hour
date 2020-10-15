@extends('backend._layout')

@section('content')

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Show All Student')
            </h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Modal -->

                        <!-- Notification Start Here -->
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                    @endif
                    <!-- Notification End Here -->

                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover" >
                                <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Student Mail</th>
                                    <th>Student PHN Number</th>
                                    <th>Student Username</th>

                                    <th>Student ID Created</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($details_user as $detail)
                                    <tr>
                                        <td>{{ $detail->name }}</td>
                                        <td>{{ $detail->email }}</td>
                                        <td>{{ $detail->phn_number }}</td>
                                        <td>{{ $detail->username }}</td>

                                        <td>{{ $detail->created_at }}</td>

                                        <td>
                                            <div class="form-button-action">
                                                <a href="#" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
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
    </div>

@endsection
