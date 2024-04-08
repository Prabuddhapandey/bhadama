
@extends('layout.app')

@section('main')

<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Rating</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form  method="post" action="{{route('rating.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $userId }}">
                            <input type="hidden" name="car_id" value="{{ $cars->car_id }}">
                            
                            <div class="form-group">
                                <label for="name">Car Model</label>
                                <input type="text" class="form-control p-4" value="{{ $cars->listCar->model }}" readonly required="required">
                            </div>
        
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control p-4" value="{{ $cars->email }}" readonly required="required">
                            </div>
                            <div class="form-group">
                                <label for="description">Location</label>
                                <input type="text" class="form-control p-4" value="{{ $cars->listCar->location }}" readonly required="required">
                            </div>
                            <div class="form-group">
                                <label for="description">Rating</label>
                                <select type="text" class="form-control px-4 mb-3" name="rating" style="height: 50px;" required="required">
                                    <option value="" disabled selected>Rating</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                           
                          
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection