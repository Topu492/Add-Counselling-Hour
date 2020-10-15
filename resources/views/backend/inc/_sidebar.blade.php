<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}"   alt="image profile" class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level"> {{ Auth::user()->role->name }} </span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>


                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a class="btn btn-info" target="_blank" href="{{ url('/') }}">
                        <i style="color: white" class="fas fa-home"></i>
                        <p style="color: white">Go To Site</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Internal Function</h4>
                </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.showAllDoctor') }}">
                        <i class="fas fa-user-md"></i>
                        <p>Teacher List</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.showAllNurse') }}">
                        <i class="fa fa-ambulance" aria-hidden="true"></i>
                        <p>Student List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('showArea') }}">
                        <i class="fas fa-university "></i>
                        <p>Campus List</p>
                    </a>
                </li>

                <li class="nav-item">
                <a href="{{ route('showCategory') }}">
                    <i class="fas fa-book-open"></i>
                        <p>Department List</p>
                    </a>
                </li>


                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Settings Panel</h4>
                    <li class="nav-item">
                        <a href="{{ url('admin/dashboard') }}">
                            <i class="fa fa-bullseye"></i>
                                <p>Go Dashboard</p>
                        </a>
                    </li>


                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        {{-- <h4 class="text-section">Internal Function</h4> --}}
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Seetings</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.settings') }}">
                                        <span class="sub-item">Control Panel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/log-reader') }}">
                                        <span class="sub-item">Log Reader</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
            </ul>
        </div>
    </div>
</div>
