<!-- Sidebar Start -->
<div class="sidebar col-2 "  style="height: 500px;">
    <nav class="navbar bg-light navbar-light">
        <a href="{{ route('adminhome') }}" class="navbar-brand mx-4 mb-4">
            <h3 class="text-primary font-weight-bold"><i class="fa fa-hashtag me-2"></i></h3>OnlineSurvey Admin
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('assets')}}/admin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Mehmet Eray Karakaşlı</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin_category') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Category</a>

            <a href="{{ route('admin_surveys') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Surveys</a>



            <a href="{{route('admin_setting')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Settings</a>
            <a href="{{route('admin_setting')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Boş</a>


            <a href="{{asset('assets')}}/admin/" class="nav-item nav-link" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Logout</a>

        </div>
    </nav>
</div>

