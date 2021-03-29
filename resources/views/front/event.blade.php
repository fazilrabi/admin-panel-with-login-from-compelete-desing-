@extends('front.app')
@section('title', 'Event | DMOYA')
@section('content')
<!-- Hero Start -->
<section class="bg-half-170 bg-light d-table w-100" style="background: url('<?php echo asset('front/images/bg.jpg')?>') center center;">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container af-rtl af-tr">
        <div class="row mt-5 text-center align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-left af-rtl af-tr">
                    <div class="page-next-level">
                        <h4 class="title">{{__('messages.latest_event')}}</h4>
                        <p class="text-muted mb-0">{{__('messages.event_text')}}</p>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0 af-none">
                <div class="page-next-level text-sm-right">
                    <ul class="page-next pl-0 mb-0">
                        <li class="list-inline-item"><a href="index.html"
                                class="text-uppercase font-weight-bold text-dark">Home</a></li>
                        <li class="list-inline-item"><a href="javascipt:void(0)"
                                class="text-uppercase font-weight-bold text-dark">Pages</a></li>
                        <li class="list-inline-item"><a href="javascipt:void(0)"
                                class="text-uppercase font-weight-bold text-dark">Event</a></li>
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

<!-- Start Event -->
<section class="section">
    <div class="container">
        <div class="row">
          @foreach($events as $event)
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="blog-post rounded border">
                    <div class="blog-img d-block overflow-hidden position-relative">
                        <img src="{{asset('storage/images/event/' . $event->image)}}" class="img-fluid rounded-top" alt="">
                        <div class="overlay rounded-top bg-dark"></div>
                        <div class="post-meta">
                            <a href="{{route('event.show', $event)}}" class="text-light read-more">Read More <i
                                    class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="content p-3">
                    <small class="text-muted p float-right">{{$event->date}}</small>
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

        <div class="row text-center">
            <div class="col-12">
              <div class="pagination justify-content-center">
                {{$events->links("pagination::bootstrap-4")}}
              </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End Event -->
@endsection