@extends('front.app')
@section('title', 'Blog | DMOYA')
@section('content')
<!-- Hero Start -->
<section class="bg-half-170 bg-light d-table w-100" style="background: url('<?php echo url('')?>/front/images/bg.jpg') center center;">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container af-rtl af-tr">
        <div class="row mt-5 text-center align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-left af-rtl af-tr">
                    <div class="page-next-level">
                        <h4 class="title">{{$about->{'title_' . $lang} }}</h4>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0 af-none">
                <div class="page-next-level text-sm-right">
                    <ul class="page-next pl-0 mb-0">
                        <li class="list-inline-item"><a href="index.html"
                                class="text-uppercase font-weight-bold text-dark">Home</a></li>
                            <span class="text-uppercase text-primary font-weight-bold">Aboutus</span>
                        </li>
                        <li class="list-inline-item">
                            <span class="text-uppercase text-primary font-weight-bold">{{$about->{'title_' . $lang} }}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->

<!-- Start -->
<section class="section">
    <!-- Start About -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="position-relative">
                  <img src="{{asset('storage/images/about/' . $about->image)}}" class="img-fluid shadow rounded" alt="">
                </div>
            </div>
            <!--end col-->

            <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="section-title ml-md-4">
                    <h4 class="title mb-4">{{$about->{'title_' . $lang} }}</h4>
                    {!! $about->{'description_' . $lang} !!}
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- End About -->
</section>
<!--end section-->

@endsection
