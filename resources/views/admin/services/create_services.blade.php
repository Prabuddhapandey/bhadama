@extends('admin.layouts.app')
@section('destination')
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
                    <div class="card-header">Create Services</div>

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

                        <form method="post" action={{url('admin/storeservice/')}} enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Services Title</label>
                                <input type="text" name="service_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Service Description</label>
                                <input type="text" name="description" class="form-control" required>
                            </div>
                           

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="service_image" class="form-control" required>
                            </div>



                            <button type="submit" class="btn btn-primary">Create Service</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection