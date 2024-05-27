<div class="container fluid p-6">

    <h1 class="display-4 text-dark text-center">Book Cars</h1>
    <h1 class="display-4 text-uppercase text-center mb-5">Find A Car <span class="text-primary ml-2">Suitable For You</span></h1>
    <div class="row">
       
            @foreach($cars as $item)
                <div class="col-md-4 mb-4">
                    <div class="rent-item">
                        @if(!Empty($item->image))   
                        <img  src="{{url('/uploads/listcars/'.$item->image )}}"  alt="Image" width="300px" height="200px">
                        @else
                        <img  src="{{asset('asset/img/images.jpeg')}}"  alt="Image" width="200px" height="200px">
                         @endif
                        <div class="text">
                            <h4 class="text-uppercase mb-2">{{$item->model}}</h4>
                            <div class="d-flex mb-3">
                                <p class="cat">{{$item->type}}</p>
                                <span class="ml-3">{{$item->date}}</span>
                                <p class="price ml-auto">RS: {{$item->price}}<span>/day</span></p>
                            </div>
                            <div class="d-flex">
                                <a href="{{url('/detail',[$item->id])}}" class="btn btn-primary py-2 mr-2">Book now</a>
                                {{-- <a href="{{url('/detail',[$item->id])}}" class="btn btn-secondary py-2">Details</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
        
        @endforeach
   
</div>

