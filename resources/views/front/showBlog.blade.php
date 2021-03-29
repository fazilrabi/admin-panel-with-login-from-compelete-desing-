@extends('front.app')
@section('title', 'Blog | DMOYA')
@section('content')
<!-- Hero Start -->
<section class="bg-half-170 pb-0 d-table w-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{asset('storage/images/blog/' . $blog->image)}}" class="img-fluid rounded" alt="">
            </div>
            <!--end col-->

            <div class="col-lg-6 mt-4 pt-2">
                <div class="title-heading">
                    <h2><a href="javascript:void(0)" class="text-dark">{{$blog->{'title_' . $lang} }}</a></h2>
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
                      {!! $blog->{'description_' . $lang} !!}
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
