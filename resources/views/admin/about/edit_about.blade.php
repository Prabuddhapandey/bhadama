@extends('admin.layouts.app')
@section('rating')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create About</div>

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
                    
                        <form method="post" action={{url('/admin/update/about/'.$profileData->id)}} enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">

                            <label for="">About Us</label>
                            <input type="text" name="about_us" value="{{$profileData->about_us}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="string" name="description" value="{{$profileData->description}}" class="form-control" required>
                            </div>
                          

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="image_one" class="form-control" >
                                <img src="{{asset('uploads/abouts/'.$profileData->image_one)}}" width="70px" height="70px">
                            </div>
                              

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="image_two" class="form-control" >
                                <img src="{{asset('uploads/abouts/'.$profileData->image_two)}}" width="70px" height="70px">
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