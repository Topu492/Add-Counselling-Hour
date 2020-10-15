<div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="#" class="booking-doc-img">
              <div class="profile-img">
                  @if($data->profile_image == "default.png")
                    <img src="{{ asset('/') }}default/default.png" alt="User Image">
                      @else
                    <img src="{{ asset('storage') }}/{{ $data->profile_image}}" alt="User Image">
                  @endif
               </div>
            </a>
            <div class="profile-det-info">
                <h3>{{Auth::user()->name}}</h3>

                {{--<div class="patient-details">--}}

                    {{--<h5 class="mb-0">{{$details->edu_degree}}</h5>--}}

                {{--</div>--}}
            </div>
        </div>
    </div>
    <div class="dashboard-widget">
        <nav class="dashboard-menu">
            <ul>
                <li class="active">
                    <a href="{{route('nurse.dashboard')}}">
                        <i class="fas fa-columns"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li>
                <a href="{{ route('nurse.nurse_ProfilePage') }}">
                        <i class="fas fa-user-cog"></i>
                        <span>Profile Settings</span>
                    </a>
                </li>

                <li>
                    <a href=" {{ route('nurse.nursePassChange') }} ">
                        <i class="fas fa-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li>
                <a href="{{ route('logout') }}">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
