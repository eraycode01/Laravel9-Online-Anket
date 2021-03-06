<!-- Sidebar Start -->
<div class="sidebar col-4" >
    <nav class="navbar bg-light navbar-light">
        <a href="{{ route('adminhome') }}" class="navbar-brand mx-4 mb-4">
            <h4 class="text-primary font-weight-bold"><i class="fa fa-hashtag me-2"></i>OnlineSurvey <br>  <p class="text-lg-center">Admin</p>
            </h4>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">

                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{\Illuminate\Support\Facades\Auth::user()->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin_category') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Category</a>

            <a href="{{ route('admin_surveys') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Surveys</a>



            <a href="{{route('admin_setting')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Settings</a>
            <a href="{{route('home')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Web Page</a>
            <a href="{{route('admin_message')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Messages</a>
            <a href="{{route('admin_review')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Reviews</a>
            <a href="{{route('admin_faq')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Faq</a>
            <a href="{{route('admin_users')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Users</a>
            @auth

            <a href="{{route('logout')}}" class="nav-item nav-link" ><i class="far fa-file-alt me-2"></i>Logout</a>
            @endauth
        </div>
    </nav>
</div>

