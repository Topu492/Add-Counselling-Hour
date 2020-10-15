@extends('backend._layout')

@section('content')

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Show All User')
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
                        @if (session()->has('warning'))
                            <div class="alert alert-danger">
                                {{ session()->get('warning') }}
                            </div>
                          @endif
                    <!-- Notification End Here -->

                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover" >
                                <thead>
                                <tr>
                                    <th>Patient Name</th>
                                    <th>Patient Mail</th>
                                    <th>Patient PHN NUMBER</th>
                                    <th>Patient Username</th>
                                    <th>Patient ID Created</th>
                                    <th>Action</th>

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
                                                <a href="{{ route('admin.deleteUser', $detail->id) }}" type="button" class="btn btn-sm btn-danger">Delete</a>
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
