@extends('admin.layouts.app')
@section('destination')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>About</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a >Home</a></li>
         
          <li class="breadcrumb-item active">About us Managements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create About US</div>

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

                        <form method="post" action={{url('admin/store/about')}} enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">About Us</label>
                                <input type="text" name="about_us" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">About Description</label>
                                <input type="text" name="description" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Images One</label>
                                <input type="file" name="image_one" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Images Two</label>
                                <input type="file" name="image_two" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Create About Section</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection