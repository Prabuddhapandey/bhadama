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

                        <form method="post" action={{url('admin/updatebanner/'.$profileData->id)}} enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                          
                            <div class="form-group">
                                <label for="">Banner header One</label>
                                <input type="string" name="headerone" value="{{$profileData->headerone}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Banner header Two</label>
                                <input type="string" name="headertwo" value="{{$profileData->headertwo}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Banner header Three</label>
                                <input type="string" name="headerthree" value="{{$profileData->headerthree}}" class="form-control" required>
                            </div>

                          

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="banner_image_one" class="form-control" >
                                <img src="{{asset('uploads/banners/'.$profileData->banner_image_one)}}" width="70px" height="70px">
                            </div>

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="banner_image_two" class="form-control" >
                                <img src="{{url('uploads/banners/'.$profileData->banner_image_two)}}" width="70px" height="70px">
                            </div>

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="banner_image_three" class="form-control" >
                                <img src="{{url('uploads/banners/'.$profileData->banner_image_three)}}" width="70px" height="70px">
                            </div>

                            <div class="form-group">
                                <label for="">link</label>
                                <input type="string" name="link" value="{{$profileData->link}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Facebook</label>
                                <input type="string" name="fb" value="{{$profileData->fb}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Insta</label>
                                <input type="string" name="insta"  value="{{$profileData->insta}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Twitter</label>
                                <input type="string" name="twitter" value="{{$profileData->twitter}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Youtube</label>
                                <input type="string" name="youtube" value="{{$profileData->youtube}}" class="form-control" >
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