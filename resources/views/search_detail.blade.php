@extends('layout.app')

@section('main')

<hr>

<div class="hr"></div>
      <!-- Rent A Car Start -->
      <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center"></h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Your Results</h1>
         
            
              <div id="car-container">
                <div class="row">
                @if(count($results) > 0)
                @foreach($results as $result)
                    <div class="col-md-4 mb-4">
                        <div class="rent-item">
                            <img class="img-fluid mb-3" src="{{ asset('asset/img/images.jpeg') }}" alt="{{ $result->model }}">
                            <div class="text">
                                <h4 class="text-uppercase mb-2">{{$result ->model}}</h4>
                                <div class="d-flex mb-3">
                                    <p class="price ml-auto">RS: {{$result->price}}<span>/day</span></p>
                                </div>
                                <div class="d-flex">
                                    {{-- <a href="#" class="btn btn-primary py-2 mr-2">Book now</a> --}}
                                    <a href="{{url('/detail',[$result->id])}}" class="btn btn-secondary py-2">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="text-center">
                <p class="no-results">No results found.</p>
            </div>
            @endif
              </div>
            </div>
           
               
        </div>
    </div>
    <!-- Rent A Car End -->
   </div>

     <!-- Rent A Car Start -->
     <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center"></h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Recommends For Your<br><span>Based on Your Highest Ratings</span></h1>


        @if ($recommendedCars->isEmpty())
        <p>No cars recommended at the moment.</p>
         @else

            <div class="row">
              <div id="car-container">
                @foreach ($recommendedCars as $item)
                <div class="col-md-4 mb-4">
                    <div class="rent-item">
                  
                       @if(!Empty($item->image)) 
                        <img class="img-fluid mb-3" src="{{ url('uploads/listcars/', $item->image) }}" alt="{{$item->model}}">
                        @else
                        <img class="img-fluid mb-3" src="{{ asset('asset/img/images.jpeg') }}" alt="{{ $item->model }}">
                         @endif
                        <div class="text">
                            <h4 class="text-uppercase mb-2">{{$item->model}}</h4>
                            <div class="d-flex mb-3">
                                <span class="cat">{{$item->date}}</span>
                                <p class="price ml-auto">RS: {{$item->price}}<span>/day</span></p>
                            </div>
                            <div class="d-flex">
                                <a href="{{url('/detail',[$item->id])}}" class="btn btn-primary py-2 mr-2">Book now</a>
                                <a href="{{url('/detail',[$item->id])}}" class="btn btn-secondary py-2">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
              </div>
            </div>
               @endif
        </div>
    </div>

    <!-- Rent A Car End -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
  $('#model').change(function() { // Use onchange event
    var selectedModel = $(this).val();

    $.ajax({
      url: '{{ route('search.cars') }}', // Replace with your actual route for filtering
      type: 'GET',
      dataType: 'json',
      data: { model: selectedModel }, // Send the selected model
      success: function(response) {
        console.log('AJAX success:', response);

        if (response.html) {
          $('#car-container').html(response.html);
        } else {
          console.error('Unexpected response format:', response);
        }
      },
      error: function(xhr, status, error) {
        console.error('AJAX error:', xhr.status, status, error);
      }
    });
  });
});
 
</script>



@endsection

