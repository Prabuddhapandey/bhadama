<!-- Include Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

<!-- Rent A Car Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center"></h1>
        <h1 class="display-4 text-uppercase text-center mb-5">Find Your Car</h1>
        <!-- Car Slider -->
        <div id="carSlider" class="row">

            @foreach($cars as $item)
            <div class="col-md-4 mb-4">
                <div class="rent-item">
                    <img class="img-fluid mb-3" src="{{ $imageUrl ?? ''}}" alt="{{ $item->model }}">
                    <div class="text">
                        <h4 class="text-uppercase mb-2">{{$item->model}}</h4>
                        <div class="d-flex mb-3">
                            <span class="cat">{{$item->date}}</span>
                            <p class="price ml-auto">RS: {{$item->price}}<span>/day</span></p>
                        </div>
                        <div class="d-flex">
                            <a href="{{url('/detail',[$item->id])}}"  class="btn btn-primary py-2 mr-2">Book now</a>
                            <a href="{{url('/detail',[$item->id])}}" class="btn btn-secondary py-2">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <!-- End of Car Slider -->
    </div>
</div>
<!-- Rent A Car End -->

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Slick Slider JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    $(document).ready(function(){
        // Initialize Slick Slider
        $('#carSlider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>
