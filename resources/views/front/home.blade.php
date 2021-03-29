@extends('front.app')
@section('title', 'Home | DMOYA')
@section('content')
@php()
$lang = app()->getLocale();
@endphp
<!-- Hero Start -->
<section class="home-slider position-relative">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @php
            $i = 0;
            @endphp
            @foreach($sliders as $slider)
            <div class="carousel-item @if($i == 0) active @endif">
                <div class="d-flex vh-100 align-items-center w-100"
                    style="background:url('<?php echo asset('storage/images/slider/' . $slider->image); ?>') center center;">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-12 text-center">
                                <div class="title-heading mt-4">
                                    <h1 class="heading text-white font-weight-normal mb-3"><span
                                            class="font-weight-bold">{{$slider->{'title_' . $lang} }}</h1>
                                    <p class="para-desc mx-auto text-light">{{$slider->{'subtitle_' . $lang} }}</p>
                                    @if($slider->link)
                                    <a href="{{$slider->link}}"
                                        class="btn btn-primary mt-2">{{$slider->{'button_' . $lang} }}<i
                                            class="mdi mdi-chevron-right"></i></a>
                                    @endif
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div>
            </div>
            <!--end carousel item-->
            @php
            $i++
            @endphp
            @endforeach
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>
<!--end section-->
<!-- Hero End -->


<!-- Blog Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">{{__('messages.latest_blog')}}</h4>
                    <p class="text-muted para-desc mx-auto mb-0">{{__('messages.blog_text')}}</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row af-rtl af-tr">
          @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="blog-post rounded border">
                    <div class="blog-img d-block overflow-hidden position-relative">
                      <img src="{{asset('storage/images/blog/' . $blog->image)}}" class="img-fluid rounded-top" alt="">
                        <div class="overlay rounded-top bg-dark"></div>
                        <div class="post-meta">
                            <a href="{{route('blog.show', $blog)}}" class="text-light read-more">{{__('messages.read_more')}}<i
                                    class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="content p-3">
                        <h4 class="mt-2"><a href="javascript:void(0)" class="text-dark title">{{$blog->{'title_' . $lang} }}</a></h4>
                        <p class="text-muted mt-2">{{$blog->{'excerpt_' . $lang} }}</p>
                    </div>
                </div>
                <!--end blog post-->
            </div>
            <!--end col-->
          @endforeach
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Blog End -->


<!-- Blog Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">{{__('messages.latest_event')}}</h4>
                    <p class="text-muted para-desc mx-auto mb-0">{{__('messages.event_text')}}</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row af-rtl af-tr">
          @foreach($events as $event)
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="blog-post rounded border">
                    <div class="blog-img d-block overflow-hidden position-relative">
                      <img src="{{asset('storage/images/event/' . $event->image)}}" class="img-fluid rounded-top" alt="">
                        <div class="overlay rounded-top bg-dark"></div>
                        <div class="post-meta">
                            <a href="{{route('event.show', $event)}}" class="text-light read-more">{{__('messages.read_more')}}<i
                                    class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="content p-3">
                        <h4 class="mt-2"><a href="javascript:void(0)" class="text-dark title">{{$event->{'title_' . $lang} }}</a></h4>
                        <p class="text-muted mt-2">{{$event->{'excerpt_' . $lang} }}</p>
                    </div>
                </div>
                <!--end event post-->
            </div>
            <!--end col-->
          @endforeach
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Blog End -->
@endsection
