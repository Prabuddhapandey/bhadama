@extends('admin.layouts.app')
@section('rating')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Project</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a>Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Project</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create User/Admin</div>

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
                    @endif

                        <form method="post" action="{{ route('AdminCar.update', [$profileData->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                              <div>
                            <label for="">First Name</label>
                            <input type="text" name="fname" value="{{$profileData->fname}}" class="form-control" required>
                            </div>
                              
                            <div>
                            <label for="">Last Name</label>
                            <input type="text" name="lname" value="{{$profileData->lname}}" class="form-control" required>
                            </div>

                            <div>
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{$profileData->email}}" class="form-control" required>
                            </div>

                            <div>
                            <label for="">Phone</label>
                            <input type="text" name="phone" value="{{$profileData->phone}}" class="form-control" required>
                            </div>

                             <div>
                            <label for="">Model</label>
                            <input type="text" name="model" value="{{$profileData->model}}" class="form-control" required>
                            </div>

                            <div>
                                <label for="">Location</label>
                                <input type="text" name="location" value="{{$profileData->location}}" class="form-control" required>
                                </div>

                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="text" name="date" value="{{$profileData->date}}" class="form-control" required>
                            </div>
                                
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="text" name="date" value="{{$profileData->price}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">time</label>
                                <input type="text" name="time" value="{{$profileData->time}}" class="form-control" required>
                            </div>
                          

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="image" class="form-control" >
                                <img src="{{asset('uploads/listcars/'.$profileData->image)}}" width="70px" height="70px">
                            </div>
                              

                            
               



                          
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection