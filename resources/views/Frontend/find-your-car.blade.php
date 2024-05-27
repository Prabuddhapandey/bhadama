@extends('layout.app')
@section('main')

<!-- Search Start -->
<form action="{{ route('search') }}" method="get">
    @csrf
  <div class="container-fluid bg-white pt-3 px-lg-5">
  <div class="row mx-n2" @style('padding-left:60em;')>
    <div class="col-xl-6 col-lg-4 col-md-6 px-2">
        <input type="text" name="location" class="form-control px-4 mb-3" style="height: 50px;" placeholder="Search by  Location">
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

<hr>
<div class="container-fluid bg-white px-lg-5">
    <div class="row mx-n2" @style('padding-left:50em;')>

        <div class="col-xl-4 col-lg-4 col-md-6 px-2">
            <select type="text" class="form-control px-4 mb-3" name="type" id="type" style="height: 50px;" placeholder="Select A Car" required="required">
                <option value="">Select a Type</option>
                <option value="">Select a Type</option>
                <option value="Sedan">Sedan</option>
                <option value="SUV">SUV</option>
                <option value="Minivan">Minivan</option>
                <option value="Convertible">Convertible</option>
                <option value="Sports">Sports</option>
                <option value="Wagon">Wagon</option>
                <option value="Coupe">Coupe</option>
            </select>
        </div>
 
      <div class="col-xl-4 col-lg-4 col-md-6 px-2">
          <select type="text" class="form-control px-4 mb-3" name="model" id="model" style="height: 50px;" placeholder="Select A Car" required="required">
              <option value="">Select a model</option>
              <option value="">Select a Model</option>
              <option value="Toyota">Toyota</option>
              <option value="Honda">Honda</option>
              <option value="Ford">Ford</option>
              <option value="Chevrolet">Chevrolet</option>
              <option value="BMW">BMW</option>
              <option value="Mercedes-Benz">Mercedes-Benz</option>    
          </select>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 px-2">
          <button class="btn btn-info btn-block mb-3"   type="submit" style="height: 50px;">filter by category</button>
      </div>
  </div>
  </div>

<div class="hr"></div>
<hr>
<div class="container-fluid pt-5" >
    <div class="row">
        <div id="car-container">
            @include('Frontend.components.FindYourCar')
        </div>
    </div>
    @if($cars->isEmpty())
    <div class="row">
        <div class="col-md-12 text-center" id="pagination-links" style="padding-left:200px">
          
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-md-12 text-center" id="pagination-links" style="padding-left:200px">
            {{ $cars->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
    @endif
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        var url = $(this).attr('href'); // Get the pagination link URL
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

$(document).ready(function() {
    function fetchCars() {
        var selectedType = $('#type').val() || '';
        var selectedModel = $('#model').val() || '';

        $.ajax({
            url: '{{ route('search.cars') }}',
            type: 'GET',
            dataType: 'json',
            data: {
                type: selectedType,
                model: selectedModel
            },
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
    }

    $('#type').change(fetchCars);
    $('#model').change(fetchCars);
});
</script>

@endsection
