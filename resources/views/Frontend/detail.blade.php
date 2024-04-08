@extends('layout.app')

@section('main')

<body>

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Car Detail</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Car Detail</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    
   
    <div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <h1 class="display-4 text-uppercase mb-5">{{$cars->model}}</h1>
                    <div class="row mx-n2 mb-3">
                        <div class="col-md-8 col-6 px-2 pb-2" style="max-width: 200%;">
                            @if($cars->image)
                            <img class="img-fluid-mb-3" src="{{url('uploads/listcars/'.$cars->image)}}" width="200px" height="200px" >
                            @else
                            <img class="img-fluid mb-3" src="{{ asset('asset/img/images.jpeg') }}" width="800px" height="200px"  alt="{{ $cars->model }}">
                            @endif
                            {{-- <img class="img-fluid w-100" src="{{asset('uploads/listcars/'.($cars->image) )?? ''}}" width="200px" height="200px"  alt=""> --}}
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-2">
                        <i class="text-primary mr-2"></i>
                       <span>Email:{{$cars->email}} </span>
                    </div>
                    <div class="col-md-4 col-6 mb-2">
                        <i class="text-primary mr-2"></i>
                       <span>Phone:{{$cars->phone}} </span>
                    </div>
                    
                    <div class="row pt-2">
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
                            <span>RS &nbsp{{$cars->price}}/day</span>
                        </div>
                       
                    </div>
               </div>
            

                <div class="col-lg-4 mb-5">
                    <div class="bg-secondary p-5">
                        <h3 class="text-primary text-center mb-4">Check Availability</h3>
                         
                      <div class="form-group" >
                        <form action="{{url('/booking',[$cars->id])}}">
                            {{-- <div class="date" data-target-input="nearest">
                                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="{{$cars->date}}"
                                    data-target="#date1" data-toggle="datetimepicker" />
                            </div> --}}
                        </div>

                       
                        <div class="form-group">
                            <div class="time" id="time1" data-target-input="nearest">
                                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="{{$cars->time}}"
                                    data-target="#time1" data-toggle="datetimepicker" />
                            </div>
                        </div>
                         
                        <div class="form-group">
                            <div class="person" id="person1" data-target-input="nearest">
                                <input type="text" class="form-control p-4 person-input" placeholder="{{$cars->fname}} {{$cars->lname}}"
                                     />
                            </div>
                        </div>


                        <div class="form-group mb-0">
                            <button class="btn btn-primary btn-block" type="submit"  style="height: 50px;">Check Now</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


    {{-- <!-- Related Car Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <h2 class="mb-4">Related Cars</h2>
            <div class="owl-carousel related-carousel position-relative" style="padding: 3 30px;">
                <div class="rent-item">
                    <img class="img-fluid mb-4" src="img/car-rent-1.png" alt="">
                    <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="">$99.00/Day</a>
                </div>
                <div class="rent-item">
                    <img class="img-fluid mb-4" src="img/car-rent-2.png" alt="">
                    <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="">$99.00/Day</a>
                </div>
                <div class="rent-item">
                    <img class="img-fluid mb-4" src="img/car-rent-3.png" alt="">
                    <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="">$99.00/Day</a>
                </div>
                <div class="rent-item">
                    <img class="img-fluid mb-4" src="img/car-rent-4.png" alt="">
                    <h4 class="text-uppercase mb-4">Mercedes Benz R3</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="">$99.00/Day</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Related Car End --> --}}


</body>

@endsection