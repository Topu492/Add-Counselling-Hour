<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{  App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" alt="Your Gravatar " class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a href="#" >
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level"> {{ Auth::user()->username }} </span>
                            <span class="caret"></span>
                        </span>
                    </a>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Internal Option</h4>
                </li>

                 <li class="nav-item">
                    <a href="{{ url('/') }}">
                        <i class="fas fa-home"></i>
                        <p>Homepage</p>
                    </a>
                </li><li class="nav-item">
                    <a href="{{ route('allProduct') }}">
                        <i class="fas fa-desktop"></i>
                        <p>All Product</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('search.doctor') }}">
                        <i class="fas fa-user-shield"></i>
                        <p>Search Doctor</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
