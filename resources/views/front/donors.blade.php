@extends('front.app')
@section('title', 'Donors | DMOYA')
@section('content')
<section class="bg-half-260 bg-light d-table w-100"
    style="background: url('<?php echo asset('front/images/freelancer/single_work.jpg') ?>') center center;">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center">
                <div class="title-heading">
                    <h4 class="heading mt-2">Our Donors</h4>
                    <p class="text-muted para-desc mt-3 mx-auto mb-0">Our Respected Donors</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row justify-content-center mt-4">
            @foreach($donors as $donor)
            <!--end col-->
            <div class="col-lg-2 col-md-2 col-6 text-center">
                <img src="{{asset('storage/images/donor/' . $donor->image)}}" class="avatar avatar-ex-sm" alt="">
            </div>
            <!--end col-->
            @endforeach
        </div>
    </div>
    <!--end container-->

    <div class="container-fluid">
        <div class="row">
            <div class="home-shape-arrow">
                <a href="#details" class="mouse-down"><i class="mdi mdi-arrow-down arrow-icon text-dark h5"></i></a>
            </div>
        </div>
        <!--end row-->
    </div> <!-- END CONTAINER -->
</section>
@endsection
