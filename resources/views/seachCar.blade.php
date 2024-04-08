@extends('layout.app')

@section('main')

    <!-- Search Start -->
    <form action="{{ route('search') }}" method="post">
        @csrf
      <div class="container-fluid bg-white pt-3 px-lg-5">
      <div class="row mx-n2">
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <input type="text" name="location" class="form-control px-4 mb-3" style="height: 50px;" placeholder="Pickup Location">
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <input type="text" class="form-control px-4 mb-3"  @readonly(true) style="height: 50px;" placeholder="Drop Location">
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <div class="date mb-3" id="date" data-target-input="nearest">
                <input type="text" class="form-control p-4 datetimepicker-input"  @readonly(true) placeholder="Pickup Date" />
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <div class="time mb-3" id="time" data-target-input="nearest">
                <input type="text" class="form-control p-4 "  @readonly(true) placeholder="Pickup Time" />
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <input type="text" class="form-control px-4 mb-3"  @readonly(true) style="height: 50px;" placeholder="Select A Car">
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 px-2">
            <button class="btn btn-primary btn-block mb-3" @readonly(true)  type="submit" style="height: 50px;">Search</button>
        </div>
    </div>
</div>
    </form>
<!-- Search End -->


@endsection