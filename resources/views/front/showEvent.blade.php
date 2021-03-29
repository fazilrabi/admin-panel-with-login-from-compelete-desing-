@extends('front.app')
@section('title', 'Event | DMOYA')
@section('content')
<!-- Hero Start -->
<section class="bg-half-170 pb-0 d-table w-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{asset('storage/images/event/' . $event->image)}}" class="img-fluid rounded" alt="">
            </div>
            <!--end col-->

            <div class="col-lg-6 mt-4 pt-2">
                <div class="title-heading">
                    <h2><a href="javascript:void(0)" class="text-dark">{{$event->{'title_' . $lang} }}</a></h2>
                    <h4>{{$event->date}}</h4>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Hero End -->

<!-- Start  -->
<section class="section-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="border rounded position-relative overflow-hidden">
                    <div class="p-4">
                        {!! $event->{'description_' . $lang} !!}
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
@endsection
