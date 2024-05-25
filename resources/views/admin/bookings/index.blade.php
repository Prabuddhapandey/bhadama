@extends('admin.layouts.app')
@section('destination_table')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">Project Table</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
                        </div>
                        <div class="card-body">
                            
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                            
                              @else
                                <div class="alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                        
        
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            {{-- <th>Last Name</th> --}}
                                            <th>Email</th>
                                            <th>Phone</th>
                                            {{-- <th>Location</th> --}}
                                            <th>Pick Up Location</th>
                                            <th>Destination</th>
                                            {{-- <th>Date</th> --}}
                                            <th>Time</th>
                                            {{-- <th>Image</th> --}}
                                            {{-- <th>Edit</th>
                                             <th>Delete</th> --}}
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            {{-- <th>Last Name</th> --}}
                                            <th>Email</th>
                                            <th>Phone</th>
                                            {{-- <th>Location</th> --}}
                                            <th>Pick Up Location</th>
                                            <th>Destination</th>
                                            <th>Date</th>

                                            <th>Time</th>
                                            {{-- <th>Image</th> --}}
                                            {{-- <th>Edit</th>
                                             <th>Delete</th> --}}
                                        </tr>
                                    </tfoot>
                                    @foreach($profileData as $item)
                                    <tr>
                                        <td>{{$item->fname}}</td>
                                        {{-- <td>{{$item->lname}}</td> --}}
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->phone}}</td>
                                        {{-- <td>{{$item->location}}</td> --}}
                                        <td>{{$item->pickup}}</td>
                                        <td>{{$item->destination}}</td>
                                        {{-- <td>{{$item->date}}</td> --}}
                                        <td>{{$item->time}}</td>
                                        {{-- <td>
                                            <img src="{{asset('uploads/listcars/'.$item->image)}}" width="70px" height="70px">
                                        </td> --}}

{{--                                       
                                        <td><a href="{{ URL::to('AdminCar/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                                        <td>
                                            <form action="{{ route('AdminCar.destroy', $item->id  )}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button></form>
                                        </td> --}}

                                    </tr>
                                    @endforeach

                                    <tbody>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
@endsection