
@extends('layout.app')
@section('main')
<body>
   {{-- @include('layouts.header') --}}
   <div class="stricky-header stricked-menu main-menu main-menu-three">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<div class="page-wrapper">
 
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg"   style="background-image: url(assets/images/backgrounds/page-header-bg-8.jpg);">
    {{-- url({{asset('uploads/branch/'.$banner->banner_image  )}});"> --}}
    </div>
    <div class="container">
        
        <div class="page-header__inner">
            <p>{{$banner->branch_title ?? ''}}</p>
            <h2>{{$banner->branch_paragraph ?? ''}}</</h2>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-2.html">Home</a></li>
                    <li><span>/</span></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->
{{-- 

{{-- <!--Contact One Start -->

<!--Contact One End --> --}}
 <!--Contact Page Start-->
 <section class="contact-page">
    <div class="container">
        <div class="row">
            <!--Contact Page Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="contact-page__single contact-page__single-1">
                    <h3 class="contact-page__title">Office Location</h3>
                    <p class="contact-page__text">{{$banner->location ?? ''}}</p>
                    <div class="contact-page__icon">
                        <span class="icon-tracking"></span>
                    </div>
                    <div class="contact-page__count"></div>
                </div>
            </div>
            <!--Contact Page Single End-->
            <!--Contact Page Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="contact-page__single">
                    <h3 class="contact-page__title"><a href="tel:800456789">Tel:{{$banner->phone ?? ''}}</a></h3>
                    <p class="contact-page__text">To get in touch with us, please submit
                 
                    <div class="contact-page__icon">
                        <span class="icon-call"></span>
                    </div>
                    <div class="contact-page__count"></div>
                </div>
            </div>
            <!--Contact Page Single End-->
            <!--Contact Page Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="contact-page__single contact-page__single-3">
                    <h3 class="contact-page__title"><a href="mailto:info@webmail.com">{{$banner->phone ?? ''}}</a></h3>
                    <p class="contact-page__text">To better connect with our team
                        <br> send your mail.</p>
                    <div class="contact-page__icon">
                        <span class="icon-open"></span>
                    </div>
                    <div class="contact-page__count"></div>
                </div>
            </div>
            <!--Contact Page Single End-->
        </div>
    </div>
</section>
<!--Contact Page End-->

<!--Contact One Start -->
<section class="contact-one">
    <div class="contact-one__bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="contact-one__left">
                    <div class="section-title text-left">
                        <p class="section-title__tagline">Get In Touch</p>
                        <div class="section-title__title-box">
                            <h2 class="section-title__title">Let’s talk with us</h2>
                            <p>Have project</p>
                        </div>
                    </div>
                    <div class="contact-one__form-box">
                        <form action={{route('enquiry')}}  method="post">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__icon">
                                            <span class="icon-user"></span>
                                        </div>
                                        <input type="text" placeholder="Full name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__icon">
                                            <span class="icon-open-mail"></span>
                                        </div>
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box text-message-box">
                                        <div class="contact-one__icon contact-one__icon-2">
                                            <span class="icon-pen"></span>
                                        </div>
                                        <textarea  type="text" name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="contact-one__btn-box">
                                        <button type="submit" class="thm-btn contact-one__btn"><span
                                                class="fas fa-long-arrow-alt-right"></span>more
                                            service</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="contact-one__right">
                    <div class="contact-one__logo">
                        <a href="#">Eston.</a>
                    </div>
                    <div class="contact-one__google-map">
                        <iframe
                            src={{$banner->map ?? ''}}
                            class="google-map__one" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact One End -->

</div>



</body>
@endsection
  