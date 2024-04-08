

@extends('layout.app')


@section('main')


<!-- Search Start -->
<form action="{{ route('search') }}" method="post">
    @csrf
  <div class="container-fluid bg-white pt-3 px-lg-5">
  <div class="row mx-n2">
    <div class="col-xl-2 col-lg-4 col-md-6 px-2">
        <input type="text" name="location" class="form-control px-4 mb-3" style="height: 50px;" placeholder="Pickup Location">
    </div>
    <div class="col-xl-2 col-lg-4 col-md-6 px-2">
        <input type="text" class="form-control px-4 mb-3"  @readonly(true) style="height: 50px;" placeholder="Drop Location">
    </div>
    <div class="col-xl-2 col-lg-4 col-md-6 px-2">
        <div class="date mb-3" id="date" data-target-input="nearest">
            <input type="text" class="form-control p-4 datetimepicker-input"  @readonly(true) placeholder="Pickup Date" />
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-6 px-2">
        <div class="time mb-3" id="time" data-target-input="nearest">
            <input type="text" class="form-control p-4 "  @readonly(true) placeholder="Pickup Time" />
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-6 px-2">
        <select type="text" class="form-control px-4 mb-3" name="model" style="height: 50px;" placeholder="Select A Car" required="required">
            <option value="" disabled selected>Select a car</option>
            @foreach($cars as $item)
            <option value="{{$item->model}}">{{$item->model}}</option>
           
            @endforeach
        </select>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-6 px-2">
        <button class="btn btn-primary btn-block mb-3"   type="submit" style="height: 50px;">Search</button>
    </div>
</div>
</div>
</form>
<!-- Search End -->



 
<!-- End sidebar widget content -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('asset/img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Rent A Car</h4>
                            <h1 class="display-1 text-white mb-md-4">Best Rental Cars In Your Location</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserve Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('asset/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Rent A Car</h4>
                            <h1 class="display-1 text-white mb-md-4">Quality Cars with Unlimited Miles</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">01</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span class="text-primary">BHADA-GO!</span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4" src="{{asset('asset/img/about.png')}}" alt="">
                    <p>Justo et eos et ut takimata sed sadipscing dolore lorem, et elitr labore labore voluptua no rebum sed, stet voluptua amet sed elitr ea dolor dolores no clita. Dolores diam magna clita ea eos amet, amet rebum voluptua vero vero sed clita accusam takimata. Nonumy labore ipsum sea voluptua sea eos sit justo, no ipsum sanctus sanctus no et no ipsum amet, tempor labore est labore no. Eos diam eirmod lorem ut eirmod, ipsum diam sadipscing stet dolores elitr elitr eirmod dolore. Magna elitr accusam takimata labore, et at erat eirmod consetetur tempor eirmod invidunt est, ipsum nonumy at et.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-headset text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">24/7 Car Rental Support</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-car text-secondary"></i>
                        </div>
                        <h4 class="text-light text-uppercase m-0">Car Reservation Anytime</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">Lots Of Pickup Locations</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    @include('Frontend.components.serviceSection')

    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-banner py-5 px-4 text-center">
                <div class="py-5">
                    <h1 class="display-1 text-uppercase text-primary mb-4">50% OFF</h1>
                    <h1 class="text-uppercase text-light mb-4">Special Offer For New Members</h1>
                    <p class="mb-4">Only for Sunday from 1st Jan to 30th Jan 2045</p>
                    <a class="btn btn-primary mt-2 py-3 px-5" href="">Register Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    @include('Frontend.components.FindYourCar')


   
    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="{{('img/vendor-1.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{('img/vendor-2.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('asset/img/vendor-3.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('asset/img/vendor-4.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('asset/img/vendor-5.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('asset/img/vendor-6.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('asset/img/vendor-7.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('asset/img/vendor-8.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


@endsection