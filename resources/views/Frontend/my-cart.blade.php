
@extends('layout.app')

@section('main')

{{-- <div class="card-body">
  @if (session('success'))
      <div class="alert alert-success" role="alert">
          {{ session('success') }}
      </div>
  @endif

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
        <h1 class="display-1 text-primary text-center"></h1>
        <h1 class="display-4 text-uppercase text-center mb-5">My BOOKED CARS</h1>
        <!-- Car Slider -->
        <div id="carSlider" class="row">

            @foreach($cars as $item)
            <div class="col-md-4 mb-4">
                <div class="rent-item">
                 
                    <img class="img-fluid mb-3" src
@endif

<!-- Rent A Car Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">="{{ asset('asset/img/images.jpeg') }}" alt="{{ $item->model }}">
                    <div class="text">
                        <h4 class="text-uppercase mb-2">{{$item->model}}</h4>
                        <div class="d-flex mb-3">
                            <span class="cat">{{$item->date}}</span>
                            <button id="payment-button">Pay with Khalti</button>
                            <p class="price ml-auto">RS: {{$item->listCar->price ?? '10000'}}<span>/day</span></p>
                        </div>
                        <div class="d-flex">
                            <a href="{{url('edit/booking/'.$item->id)}}" class="btn btn-primary py-2 mr-2">EDIT</a>
                            <a href="{{url('/rating',[$item->id])}}" class="btn btn-secondary py-2 mr-2">Rate Car</a>
                            <td>
                                <form action="{{ route('product.destroy', $item->id  )}}" method="post" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"  class="btn btn-danger delete-product">Delete</button></form>
                            </td>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <!-- End of Car Slider -->
    </div>
</div>


<div class="card-body">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
  
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif --}}
  
  <!-- Rent A Car Start -->
  <div class="container-fluid py-5">
      <div class="container pt-5 pb-3">
  
          <div class= "container">
              <div class="py-7 mt-9">
              @if ($cars->isNotEmpty())
              <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">SN</th>
                      <th scope="col">Car</th>
                      <th scope="col">Image</th>
                      <th scope="col">Price</th>
                      <th scope="col">Date</th>
                      <th scope="col">Action</th>
                  
                    </tr>
                  </thead>

          
                  <tbody>
                    @foreach($cars as $key => $item)
                    <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td>{{$item->model}}</td>
                      <td><img src="{{ asset('asset/img/images.jpeg') }}" alt="" width="100px"></td>
                      <td>@RS: {{$item->listCar->price ?? ''}}</td>
                      <th >{{$item->date}}</th>
                      <td> <div>
                        <a href="{{route('myCart.edit',$item->id)}}" class="btn btn-icon btn-success btn-xs mr-2 edit" id="" data-toggle="tooltip" title="Edit"><i class="fa fa-pen"></i></a>
                                    
                        {{-- <form  style="display: inline-block;"  method="post">
                            @csrf
                                    {{ method_field('DELETE') }} --}}
                                   
                            <button  type="submit" value="Delete" id="delete" data-id="{{$item->id}}" class="btn btn-icon btn-danger btn-xs mr-2 delete-btn"
                              
                                title="Delete"><i class="fa fa-trash"></i></button>
                                {{-- </form> --}}
                                <div>
                            
                      </td>
                    </tr>
                  
                  </tbody>

                  <tfoot class="thead-dark">
                    <tr>
                      <th scope="col">Total Price</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col">Total: <span class="pl-2">{{$item->listCar->price}}</span></th>
                      <th scope="col"></th>
                      <th scope="col">
                        <form action= "{{route('stripe.payment',$item->id)}}" method="get" >
                        <button type="submit" class="btn-danger rounded py-1">Checkout</button>
                        </form>
                      </th>
                  
                    </tr>
                  </tfoot>

             </table>
             @endforeach
              @else
              <div>
              <i class="empty-cart-icon"></i> <p class="empty-cart-message">Your shopping cart is currently empty.</p>
              <a href="{{route('find.cars')}}">Start shopping and fill it up!</a>
              </div>
              @endif
              </div>
              </div>
      </div>
  </div>
  </div>
    
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).on('click', '.delete-btn', function(e) {
        e.preventDefault();

        let bookingId = $(this).data('id');
        var row = $('#booking-' + bookingId);

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/myCart/' + bookingId,
                    type: 'DELETE',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content') // Get the CSRF token from the meta tag
                    },
                    success: function(response) {
                        if (response.success) {
                            row.remove();
                            Swal.fire(
                                'Deleted!',
                                'Your booking has been deleted.',
                                'success'
                            ).then(() => {
                                location.reload(); // Refresh the page after deletion
                            });
                        } else {
                            Swal.fire(
                                'Error!',
                                response.error,
                                'error'
                            );
                        }
                    },
                    error: function(xhr) {
                        Swal.fire(
                            'Error!',
                            'Something went wrong!',
                            'error'
                        );
                    }
                });
            }
        });
    });
</script>

@endsection