<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bhadama</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">


    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
</head>

<body>


   
    @include('layout.header')

    @yield('main')
    @include('sweetalert::alert')

     <!-- Vendor Start -->
     <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="{{('img/vendor-1.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{('img/vendor-2.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('asset/img/vendor-3.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('asset/img/vendor-4.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('asset/img/vendor-5.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('asset/img/vendor-6.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('asset/img/vendor-7.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('asset/img/vendor-8.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    @include('layout.footer')




   

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('asset/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('asset/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>