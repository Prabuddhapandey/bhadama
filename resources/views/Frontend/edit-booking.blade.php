@extends('layout.app')

@section('main')

<body>

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Edit Booking</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Edit Booking</h6>
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
    <form class="container-fluid pb-5" method="post" action="{{url('/booking/store/')}}" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">

                
                <div class="col-lg-8">
                    <h2 class="mb-6">Car Detail</h2>
                    <div class="mb-8">
                        <div class="row">
                            <input type="hidden" name="user_id" value="{{ $userId.''}}">

                            <input type="hidden" name="car_id" value="{{ $cars->id }}">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4"  value="{{$cars->fname.' '}}{{$cars->lname}}" @readonly(true) required="required">
                            </div>
                            
                                
                            
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" value="{{$cars->email}}" @readonly(true)  required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" value="{{$cars->phone}}"  @readonly(true) required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4"  value="{{$cars->price}}/day" @readonly(true)  required="required">
                            </div>
                        </div>
                    </div>
                    <h2 class="mb-4">Personal Detail</h2>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" name="fname" class="form-control p-4" value="{{$cars->fname}}"  placeholder="First Name" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" name="lname" class="form-control p-4"  value="{{$cars->lname}}"  placeholder="Last Name" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="email" name="email" class="form-control p-4" value="{{$cars->email}}" placeholder="Your Email" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" name="phone" class="form-control p-4" value="{{$cars->phone}}" placeholder="Mobile Number" required="required">
                            </div>
                        </div>
                    </div>
                    <h2 class="mb-4">Booking Detail</h2>
                    <div class="mb-5">
                        
                        <div class="row">
                            <div class="col-6 form-group">
                               
                                    <input type="text" name="pickup" class="form-control p-4"  value="{{$cars->pickup}}" placeholder="Pickup Location" />
                               
                            </div>
                            <div class="col-6 form-group">
                                <div data-target-input="nearest">
                                    <input type="text" name="destination" class="form-control p-4"  value="{{$cars->destination}}" placeholder="Destination Location"  />
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-6 form-group">
                                <div data-target-input="nearest">
                                    <input type="text" name="date" class="form-control p-4 " placeholder="Pickup Date"
                                         />
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div  >
                                    <input type="text" name="time" class="form-control p-4 " value="{{$cars->time}}"  placeholder="Pickup Time"
                                        />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <div  id="" data-target-input="nearest">
                                    <input type="text" name="age" class="form-control p-4" value="{{$cars->age}}"  placeholder="Age"
                                        />
                                </div>
                            </div>


                            
                                <div class="col-6 form-group">
                                    <div  data-target-input="nearest">
                                        <input type="text"  name="citizen_id" class="form-control p-4" value="{{$cars->citizen_id}}"  placeholder="Insert your citizenship id"
                                             />
                                    </div>
                                </div>
                            
                            
                        </div>
                        <div class="form-group">
                            <img  id="showImage"  alt="Profile" >
                            <label for="photo">Upload Yoour Citizenship Photo
                                
                            </label>
                            <input type="file" class="form-control-file" id="image" name="citizen_image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-secondary p-5 mb-5">
                        <h2 class="text-primary mb-4">Payment</h2>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="esewa">
                                <label class="custom-control-label" for="esewa">Esewa</label>
                            </div>
                        </div>
                
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="stripe">
                                <label class="custom-control-label" for="stripe">Stripe</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>
                        
                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-block btn-primary py-3">Edit Reserve</button>
                    </div>
                </div>
                
                
            </div>
        </div>
    </form>
    
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

   