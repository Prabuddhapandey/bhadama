@extends('layout.app')

@section('main')

<body>
    

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Car Booking</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Car Booking</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    {{-- <!-- Detail Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase mb-5">Mercedes Benz R3</h1>
            <div class="row align-items-center pb-2">
                <div class="col-lg-6 mb-4">
                    <img class="img-fluid" src="{{asset('asset/img/bg-banner.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 mb-4">
                    <h4 class="mb-2">$99.00/Day</h4>
                    <div class="d-flex mb-3">
                        <h6 class="mr-2">Rating:</h6>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(250)</small>
                        </div>
                    </div>
                    <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt</p>
                    <div class="d-flex pt-1">
                        <h6>Share on:</h6>
                        <div class="d-inline-flex">
                            <a class="px-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="px-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="px-2" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="px-2" href=""><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-n3 mt-lg-0 pb-4">
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"></i>
                    <span>Model: 2015</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-cogs text-primary mr-2"></i>
                    <span>Automatic</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-road text-primary mr-2"></i>
                    <span>20km/liter</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-eye text-primary mr-2"></i>
                    <span>GPS Navigation</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"></i>
                    <span>Model: 2015</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-cogs text-primary mr-2"></i>
                    <span>Automatic</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-road text-primary mr-2"></i>
                    <span>20km/liter</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-eye text-primary mr-2"></i>
                    <span>GPS Navigation</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"></i>
                    <span>Model: 2015</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-cogs text-primary mr-2"></i>
                    <span>Automatic</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-road text-primary mr-2"></i>
                    <span>20km/liter</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-eye text-primary mr-2"></i>
                    <span>GPS Navigation</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End --> --}}

    
   <!-- Car Booking Start -->
<!-- Car Booking Start -->
<form class="container-fluid pb-5" method="post" action="{{ route('booking.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-info" role="alert">
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
            @endif

            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-6">Car Detail</h2>

                    <div class="mb-8">
                        <div class="row">
                            <input type="hidden" name="user_id" value="{{ session('reservation.user_id', old('user_id', $userId)) }}">
                            <input type="hidden" name="car_id" value="{{$cars->id}}">
                            <input type="hidden" name="status" value="pending">
                            <div class="col-6 form-group">
                                <label>Model</label>
                                <input type="text" class="form-control p-4" value="{{ $cars->model }}" readonly>
                            </div>
                            <div class="col-6 form-group">
                                <label>Email</label>
                                <input type="text" class="form-control p-4" value="{{ $cars->email }}" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <label>Phone No</label>
                                <input type="text" class="form-control p-4" value="{{ $cars->phone }}" readonly>
                            </div>
                            <div class="col-6 form-group">
                                <label>Price</label>
                                <input type="text" class="form-control p-4" value="{{ $cars->price }}/day" readonly>
                            </div>
                        </div>
                    </div>

                    <h2 class="mb-4">Personal Detail</h2>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" name="fname" class="form-control p-4" placeholder="First Name" value="{{ session('reservation.fname', old('fname')) }}" required>
                                @error('fname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" name="lname" class="form-control p-4" placeholder="Last Name" value="{{ session('reservation.lname', old('lname')) }}" required>
                                @error('lname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="email" name="email" class="form-control p-4" placeholder="Your Email" value="{{ session('reservation.email', old('email')) }}" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" name="phone" class="form-control p-4" placeholder="Mobile Number" value="{{ session('reservation.phone', old('phone')) }}" required>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <h2 class="mb-4">Booking Detail</h2>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" name="pickup" class="form-control p-4" placeholder="Pickup Location" value="{{ session('reservation.pickup', old('pickup')) }}" required>
                                @error('pickup')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" name="destination" class="form-control p-4" placeholder="Destination Location" value="{{ session('reservation.destination', old('destination')) }}" required>
                                @error('destination')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" name="date" class="form-control p-4" placeholder="Pickup Date" value="{{ session('reservation.date', old('date')) }}" required>
                                @error('date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" name="time" class="form-control p-4" placeholder="Pickup Time" value="{{ session('reservation.time', old('time')) }}" required>
                                @error('time')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" name="age" class="form-control p-4" placeholder="Age" value="{{ session('reservation.age', old('age')) }}" required>
                                @error('age')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" name="citizen_id" class="form-control p-4" placeholder="Insert your citizenship ID" value="{{ session('reservation.citizen_id', old('citizen_id')) }}" required>
                                @error('citizen_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image">Upload Your Citizenship Photo</label>
                            <div class="card" style="width: 12rem; height: 10rem">
                                <img id="showImage" class="card-img-top" alt="" width="100ex" height="150ex">
                            </div>
                            <input type="file" class="form-control-file" id="image" name="citizen_image" width="100px">
                            @error('citizen_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bg-secondary p-5 mb-5">
                        <h2 class="text-primary mb-4">Payment</h2>

                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" value="Stripe" id="stripe" {{ session('reservation.payment') == 'Stripe' ? 'checked' : (old('payment') == 'Stripe' ? 'checked' : '') }}>
                                <label class="custom-control-label" for="stripe">Stripe</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" value="Direct Check" id="directcheck" {{ session('reservation.payment') == 'Direct Check' ? 'checked' : (old('payment') == 'Direct Check' ? 'checked' : '') }}>
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" value="Bank Transfer" id="banktransfer" {{ session('reservation.payment') == 'Bank Transfer' ? 'checked' : (old('payment') == 'Bank Transfer' ? 'checked' : '') }}>
                                <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                            </div>
                        </div>

                        @error('payment')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <button type="submit" class="btn btn-block btn-primary py-3">Book Now</button>
                    </div>
                    <a href="" class="btn btn-danger pl-4 ml-5">Cancel Booking</a>
                </div>
            </div>
        </div>
    </div>
</form>


</div>
    </div>
</div>
</div>
    <!-- Car Booking End -->
<script type="text/javascript">
    $(document).ready(function()
    {
      $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload=function(e){
          $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
      });
    });
  </script>
</body>


@endsection

   