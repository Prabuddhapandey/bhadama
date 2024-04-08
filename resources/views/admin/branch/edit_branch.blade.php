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
                    <div class="card-header">Edit Banner</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action={{url('admin/updatebranch/'.$profileData->id)}} enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Branch Banner Title</label>
                                <input type="string" name="branch_title" value="{{$profileData->branch_title}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Branch Banner Paragraph</label>
                                <input type="string" name="branch_paragraph" value="{{$profileData->branch_paragraph}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="branch_image" class="form-control" >
                                <img src="{{asset('uploads/branch/'.$profileData->branch_image)}}" width="70px" height="70px">
                            </div>
                            <div class="form-group">
                                <label for="">Branch Location</label>
                                <input type="string" name="location" value="{{$profileData->location}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Branch Email</label>
                                <input type="string" name="email" value="{{$profileData->email}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="string" name="phone" value="{{$profileData->phone}}" class="form-control" required>
                            </div>
                          

                            <div class="form-group">
                                <label for="">Map</label>
                                <input type="string" name="map" value="{{$profileData->map}}" class="form-control" required>
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