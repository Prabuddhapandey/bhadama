
@extends('layout.app')
@section('main')
<body>
    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">About</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">About</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    
  
        <!--About Three Start-->
                <section class="about-three">
                    <div class="container mr-2">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <div class="about-three__left">
                                    <div class="about-three__img-box">
                                        <div class="about-three__img">
                                            <img  alt="">
                                        </div>
                                        
                                        <div class="about-three__img-3">
                                            <img src="{{asset('asset/img/about.png')}}" width="300px" height="250px" alt="">
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                 <h1 class="section-title__tagline">About us</h1>
                                <div class="about-three__right">
                                   
                                    <div class="section-title text-left">
                                        
                                        <div class="section-title__title-box">
                                            <h2 class="section-title__title">{{$abouts->about_us ?? ''}}</h2>
                                          
                                        </div>
                                    </div>
                                    <div class="about-three__tab-box">
                                        <div class="tabs-one__inner tabs-box">
                                            <ul class="tab-buttons clearfix list-unstyled">
                                                <li data-tab="#ourmission" class="tab-btn active-btn"><span>About Us</span>
                                                </li>
                                                
                                            </ul>
                                            <div class="tabs-content">
                                                <!--tab-->
                                                <div class="tab active-tab" id="ourmission">
                                                    <div class="tabs-one__tab-content-inner">
                                                        <p class="tabs-one__text">this is me prabuddha </p>
                                                    </div>
                                                </div>
                                                <!--tab-->
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="about-three__btn-box">
                                        <a href="{{url('/about')}}" class="about-three__btn thm-btn"><span
                                                class="fas fa-long-arrow-alt-right"></span>learn more</a>
                                    </div>
                                </div>

                                
                            </div>
                        
                


                            <div class="col-xl-5 col-lg-6">
                                <div class="about-three__left">
                                    <div class="about-three__img-box">
                                        <div class="about-three__img">
                                            <img  alt="">
                                        </div>
                                        
                                        <div class="about-three__img-3 ">
                                            <img src="{{asset('asset/img/about/shubham.jpeg')}}"  width="300px" height="250px" alt="">
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="about-three__right">
                                   
                                    <div class="section-title text-left">
                                        
                                        <div class="section-title__title-box">
                                            <h2 class="section-title__title">{{$abouts->about_us ?? ''}}</h2>
                                          
                                        </div>
                                    </div>
                                    <div class="about-three__tab-box">
                                        <div class="tabs-one__inner tabs-box">
                                            <ul class="tab-buttons clearfix list-unstyled">
                                                <li data-tab="#ourmission" class="tab-btn active-btn"><h4>Shubham Thapa</h4><br>
                                                   <span>Frontend Developer|Documentation</span>
                                                </li>
                                                
                                            </ul>
                                            <div class="tabs-content">
                                                <!--tab-->
                                                <div class="tab active-tab" id="ourmission">
                                                    <div class="tabs-one__tab-content-inner">
                                                        <p class="tabs-one__text">Involved translating design mockups into code, optimizing performance, and troubleshooting issues that arise during development. Also collaborated with backend developers to integrate frontend components with server-side logic.</p>
                                                    </div>
                                                </div>
                                                <!--tab-->
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="about-three__btn-box">
                                        <a href="{{url('/about')}}" class="about-three__btn thm-btn"><span
                                                class="fas fa-long-arrow-alt-right"></span>learn more</a>
                                    </div>
                                


                                    <div class="col-xl-5 col-lg-6">
                                        <div class="about-three__left">
                                            <div class="about-three__img-box">
                                                <div class="about-three__img">
                                                    <img  alt="">
                                                </div>
                                                
                                                <div class="about-three__img-3">
                                                    <img src="{{asset('asset/img/about.png')}}" width="300px" height="250px" alt="">
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-6">
                                        
                                         <h1 class="section-title__tagline">About us</h1>
                                        <div class="about-three__right">
                                           
                                            <div class="section-title text-left">
                                                
                                                <div class="section-title__title-box">
                                                    <h2 class="section-title__title">{{$abouts->about_us ?? ''}}</h2>
                                                  
                                                </div>
                                            </div>
                                            <div class="about-three__tab-box">
                                                <div class="tabs-one__inner tabs-box">
                                                    <ul class="tab-buttons clearfix list-unstyled">
                                                        <li data-tab="#ourmission" class="tab-btn active-btn"><span>About Us</span>
                                                        </li>
                                                        
                                                    </ul>
                                                    <div class="tabs-content">
                                                        <!--tab-->
                                                        <div class="tab active-tab" id="ourmission">
                                                            <div class="tabs-one__tab-content-inner">
                                                                <p class="tabs-one__text">this is me prabuddha </p>
                                                            </div>
                                                        </div>
                                                        <!--tab-->
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--About Three End-->


             

    {{-- <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0">
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                        <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="img/banner-left.png" alt="">
                        <div class="text-right">
                            <h3 class="text-uppercase text-light mb-3">Want to be driver?</h3>
                            <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                            <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                        <div class="text-left">
                            <h3 class="text-uppercase text-light mb-3">Looking for a car?</h3>
                            <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                            <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                        </div>
                        <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="img/banner-right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->  --}}


</body>
@endsection
  