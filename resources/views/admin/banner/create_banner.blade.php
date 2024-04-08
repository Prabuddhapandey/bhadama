@extends('admin.layouts.app')
@section('destination')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Banner</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a >Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Banner</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Banner</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action={{url('admin/storebanner/')}} enctype="multipart/form-data">
                            @csrf
                            

                            <div class="form-group">
                                <label for="">Banner Header One</label>
                                <input type="string" name="headerone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="banner_image_one" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Banner Header Two</label>
                                <input type="string" name="headertwo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="banner_image_two" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Banner Header three</label>
                                <input type="string" name="headerthree" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="banner_image_three" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Facebook</label>
                                <input type="string" name="fb" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Insta</label>
                                <input type="string" name="insta" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Twitter</label>
                                <input type="string" name="twitter" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Youtube</label>
                                <input type="string" name="youtube" class="form-control" >
                            </div>



                            <div class="form-group">
                                <label for="">Youtube Link</label>
                                <input type="string" name="link" class="form-control" >
                            </div>
                           

                            
                          
                            <button type="submit" class="btn btn-primary">Create Banner</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection