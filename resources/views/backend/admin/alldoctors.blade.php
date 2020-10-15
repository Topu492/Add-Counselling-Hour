@extends('backend._layout')

@section('content')

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                @yield('title','Show Teachers List')
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
                                    <th>Teacher Name</th>
                                    <th>Teacher Email</th>
                                    <th>Teacher PHN Number</th>
                                    <th>Teacher Edu Degree</th>
                                    <th>Teacher BMDC Certificate</th>
                                    <th>Dept.</th>
                                    <th>Campus</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->User->name }}</td>
                                        <td>{{ $doctor->User->email }}</td>
                                        <td>{{ $doctor->User->phn_number }}</td>
                                        <td>{{ $doctor->edu_degree }}</td>
                                        <td>
                                            <img style="width: 50px; max-width: auto;" src="{{ asset('storage') }}/{{ $doctor->bmdc_cer}}">
                                        </td>
                                        <td>{{ $doctor->Category->category_name}}</td>
                                        <td>{{ $doctor->Area->area_name}}</td>

                                        <td>
                                            <a href="{{ route('admin.deleteDoctor', $doctor->id) }}" type="button" class="btn btn-sm btn-danger">Delete</a>
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
