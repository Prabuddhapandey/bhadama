@extends('admin.layouts.app')
@section('home')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Contact</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a >Home</a></li>
        
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Contact</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action={{url('admin/storebranch/')}} enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Contact Banner Title</label>
                                <input type="string" name="branch_title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Contact Banner Paragraph</label>
                                <input type="string" name="branch_paragraph" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Contact Banner</label>
                                <input type="file" name="branch_image" class="form-control" required>
                            </div>

                           
                            <div class="form-group">
                                <label for=""> Our Location</label>
                                <input type="string" name="location" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="string" name="email" class="form-control" required>
                            </div>
        
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="string" name="phone" class="form-control" required>
                            </div>
                           
                            <div class="form-group">
                                <label for="">Map</label>
                                <input type="string" name="map" class="form-control" required>
                            </div>
                          
                            <button type="submit" class="btn btn-primary">Create Contact</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection