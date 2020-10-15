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
                        <div class="card-title">Update Campus Here</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-8">


                                <form action="{{ route('updateArea') }}" method="POST">
                                 @csrf
                                <div class="form-group">
                                <label for="text">Update Campus Name</label>
                                <input type="text" class="form-control" name="area_name" id="area_name" value="{{ $areas->area_name }}" placeholder="Enter Area Name">
                                <input type="hidden" name="area_name_id"  value="{{ $areas->id }}">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                                <button class="btn btn-success">Submit</button>
                        <a href="{{ url('/show/area') }}" class="btn btn-danger">Cancel</a>
                        </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection
