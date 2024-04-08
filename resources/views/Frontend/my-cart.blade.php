
@extends('layout.app')

@section('main')



<!-- Rent A Car Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center"></h1>
        <h1 class="display-4 text-uppercase text-center mb-5">My BOOKED CARS</h1>
        <!-- Car Slider -->
        <div id="carSlider" class="row">

            @foreach($cars as $item)
            <div class="col-md-4 mb-4">
                <div class="rent-item">
                  <button id="payment-button">Pay with Khalti</button>
                    <img class="img-fluid mb-3" src="{{ asset('asset/img/images.jpeg') }}" alt="{{ $item->model }}">
                    <div class="text">
                        <h4 class="text-uppercase mb-2">{{$item->model}}</h4>
                        <div class="d-flex mb-3">
                            <span class="cat">{{$item->date}}</span>
                            <p class="price ml-auto">RS: {{$item->price}}<span>/day</span></p>
                        </div>
                        <div class="d-flex">
                            <a href="{{url('edit/booking/'.$item->id)}}" class="btn btn-primary py-2 mr-2">EDIT</a>
                            <a href="{{url('/rating',[$item->id])}}" class="btn btn-secondary py-2 mr-2">Rate Car</a>
                            <form method="post" action="{{url('/delete/booking')}}">
                                @csrf
                                @method('DELETE')
                            {{-- <button data-url="{{url('/detail',[$item->id])}}" class="btn btn-danger py-2">Cancel</button> --}}
                            <button type="button" class="btn btn-danger py-2 delete-car" data-car-id="{{ $item->id }}">Cancel</button>
                          

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <!-- End of Car Slider -->
    </div>
</div>
<script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
  $('.delete-car').on('click', function(e) {
    e.preventDefault(); // Prevent default form submission

    var carId = $(this).data('car-id');
    var deleteUrl = '{{ url('/delete/booking') }}/' + carId; // Construct the URL with car ID

    // Confirmation Dialog (Optional, but recommended)
    if (confirm('Are you sure you want to cancel this booking?')) {
      $.ajax({
        url: deleteUrl,
        type: 'DELETE',
        data: { // Include CSRF token for security
          _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
          // Handle successful deletion on the server-side
          if (response.success) {
            // Remove the car element from the DOM
            $('.rent-item[data-car-id="' + carId + '"]').remove();
          } else {
            alert('Error: ' + response.message); // Handle potential errors
          }
        },
        error: function(error) {
          console.error('Error deleting car:', error);
          alert('An error occurred. Please try again later.');
        }
      });
    }
  });
});
</script>

<script>
  var config = {
      // replace the publicKey with yours
      "publicKey": "test_public_key_7b980e140b204d59a473a7ff77d7a501",
      "productIdentity": "1234567890",
      "productName": "Dragon",
      "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
      "paymentPreference": [
          "KHALTI",
          "EBANKING",
          "MOBILE_BANKING",
          "CONNECT_IPS",
          "SCT",
          ],
      "eventHandler": {
          onSuccess (payload) {
              // hit merchant api for initiating verfication
              $.ajax({
                type : "POST",
                url : "{{route('khalti.verifyPayment')}}",
                data:{
                  'amount':1000,
                  'token':payload.token,
                  '_token':"{{csrf_token()}}"
                     },
                success:function(res){
                  console.log(res);
                         },
                   error:function(e)
                   {
                     console.log(e);
                   },
           });
                
                
              
              console.log(payload);
          },
          onError (error) {
              console.log(error);
          },
          onClose () {
              console.log('widget is closing');
          }
      }
  };

  var checkout = new KhaltiCheckout(config);
  var btn = document.getElementById("payment-button");
  btn.onclick = function () {
      // minimum transaction amount must be 10, i.e 1000 in paisa.
      checkout.show({amount: 1000});
  }
</script>
<!-- Rent A Car End -->

@endsection