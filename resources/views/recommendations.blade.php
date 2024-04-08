@extends('layout.app')

@section('main')
   


    <!-- Rent A Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center"></h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Recommends For Your<br><span>Based on Your Highest Ratings</span></h1>


        @if ($recommendedCars->isEmpty())
        <p>No cars recommended at the moment.</p>
         @else
            <div class="row">

                @foreach ($recommendedCars as $item)
                <div class="col-md-4 mb-4">
                    <div class="rent-item">
                        @if($item->image)
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
                                <a href="#" class="btn btn-primary py-2 mr-2">Book now</a>
                                <a href="{{url('/detail',[$item->id])}}" class="btn btn-secondary py-2">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
               @endif
        </div>
    </div>
    <!-- Rent A Car End -->

@endsection



  
