

@extends('layout.app')


@section('main')


<!-- Search Start -->
<form action="{{ route('search') }}" method="get">
    @csrf
  <div class="container-fluid bg-white pt-3 px-lg-5">
  <div class="row mx-n2" @style('padding-left:60em;')>
    <div class="col-xl-6 col-lg-4 col-md-6 px-2">
        <input type="text" name="location" class="form-control px-4 mb-3" style="height: 50px;" placeholder="Pickup Location">
    </div>
    {{-- <div class="col-xl-4 col-lg-4 col-md-6 px-2">
        <select type="text" class="form-control px-4 mb-3" name="model" style="height: 50px;" placeholder="Select A Car" required="required">
            <option value="" disabled selected>Select a car</option>
            @foreach($cars as $item)
            <option value="{{$item->model}}">{{$item->model}}</option>
           
            @endforeach
        </select>
    </div> --}}
    <div class="col-xl-6 col-lg-4 col-md-6 px-2">
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
            <h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span class="text-primary">Car Rental!</span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4" src="{{asset('asset/img/about.png')}}" alt="">
                    <p>we provide top-notch car rental services designed to meet all your transportation needs with ease and convenience. Whether you’re planning a vacation, a business trip, or just need a temporary vehicle, we have the perfect car for you.</p>
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

<div >
    @include('Frontend.components.FindYourCar')
    <div class="row">
        <div  id="pagination-links" >
            <a href="{{route('find.cars')}}" style ="text-decoration: underline; color: blue">See more</a>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        var url = '{{route('cars.ajax')}}' // Get the pagination link URL
        fetchPage(url);
    });

    function fetchPage(url) {
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json', // Expecting a JSON response
            success: function(response) {
                console.log('AJAX success:', response); // Log the response for debugging
                if (response.html && response.pagination) {
                    $('#car-container').html(response.html);
                    $('#pagination-links').html(response.pagination);
                } else {
                    console.error('Unexpected response format:', response);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX error:', xhr.status, status, error); // Log the error details
            }
        });
    }
});
</script>
</div>

@endsection