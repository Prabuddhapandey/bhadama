

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


   

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <img src="{{asset('asset/img/logo1.jpg')}}" width="70px" style="border-radius:75%;">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        
                        <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
                        
                        <a href="{{url('/find/your/car')}}" class="nav-item nav-link ">Book Cars</a>
                        {{-- <a href="{{url('/about')}}" class="nav-item nav-link ">About US</a> --}}
                       
                        <div class="nav-item dropdown">
                            <a href="{{route('post.cars')}}" class="nav-link ">PostCars</a>
                           
                        </div> 
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{url('/team')}}"  class="dropdown-item">The Team</a>
                                <a href="{{url('/testimonial')}}" class="dropdown-item">Testimonial</a>
                            </div>
                        </div> --}}
                    {{-- <div>
                
                        <a href="{{url('/search')}}" class="nav-item nav-link">Search Car</a>
                       
                    </div> --}}

                    @if(auth()->check())
                    <div>
                        @if(auth()->user()->role == '0')
                        <a href="{{url('/admin/home')}}" class="nav-item nav-link">Dashboard</a>
                        @endif
                    </div>

                       
                
                        <a href="{{route('myCart.index')}}" class="nav-item nav-link">CART</a>
                        {{-- <a href="{{url('/recommendations'.'/'.$userId)}}" class="nav-item nav-link ">Recommendation</a>
                     --}}
                       
                    

                     <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-none d-lg-inline text-gray-600 small">{{ Auth()->user()->name ?? '' }}</span>
                            <img class="img-profile rounded-circle" height="20px" src="{{ asset('admin_assets/img/undraw_profile.svg') }}">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userDropdown">
                           
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('/user/logout') }}">Logout</a>
                        </div>
                    </div>
                
                
                    @else
                    <div>
                    <a href="{{url('/login')}}" class="nav-item nav-link">Login</a>
                    </div>
                    @endif
                      
                    
                    </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>


</body>    
