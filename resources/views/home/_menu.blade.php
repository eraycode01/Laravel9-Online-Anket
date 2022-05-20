

<!-- Main Slider Start -->
<div class="header bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <nav class="navbar bg-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('aboutus')}}"><i class="fa fa-microchip"></i>About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}"><i class="fa fa-microchip"></i>Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('faq')}}"><i class="fa fa-microchip"></i>FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('references')}}"><i class="fa fa-microchip"></i>References</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin"><i class="fa fa-microchip"></i>Admin</a>
                        </li>

                    </ul>
                </nav>
            </div>

            <div class="col-md-4" style="height: 400px;">

                <div class="header-slider normal-slider">
                    @foreach($slider as $rs)
                    <div class="header-slider-item">
                        <img src="{{Storage::url($rs->image)}}" style="height: 400px; width: 650px;" alt="Slider Image" />
                        <div class="header-slider-caption">
                            <p>{{$rs->title}}</p>
                            <a class="btn" href="{{route('survey',['id'=>$rs->id,'slug'=>$rs->slug])}}"><i class=""></i>Make a Survey</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-5">
                <div class="header-img">
                    <div class="img-item">
                        <img src="{{asset('assets')}}/img/category-1.jpg" />
                        <a class="img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                    <div class="img-item">
                        <img src="{{asset('assets')}}/img/category-2.jpg" />
                        <a class="img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
