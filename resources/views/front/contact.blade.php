@extends('front.app')
@section('title', 'Donors | DMOYA')
@section('content')
<!-- Start  -->
<section class="section">
    <div class="container mt-100 mt-60">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">{{__('messages.get_in_touch')}}</h4>
                    @if(session('message') == 'sent')
                    <h4 class="text-success">
                      {{__('messages.contact_sent')}}
                    </h4>
                    @endif
                    <p class="text-muted para-desc mx-auto mb-0">{{__('messages.contact_message')}}</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row justify-content-center">
            <div class="col-md-8 mt-4 pt-2">
                <div class="custom-form">
                    <div id="message"></div>
                    <form method="post" action="{{route('contact.submit')}}" name="contact-form" id="contact-form">
                        @csrf
                        <div class="row af-tr af-rtl">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('messages.name')}}<span class="text-danger">*</span> :</label>
                                    <input required name="name" id="name" type="text" class="form-control"
                                        placeholder="First Name :" value="{{old('name')}}">
                                    <span class="text-danger" style="font-size: 14px;">{{$errors->first('name')}}</span>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('messages.mail')}}<span class="text-danger">*</span> :</label>
                                    <input required name="email" id="email" type="email" class="form-control"
                                        placeholder="Your email :"  value="{{old('email')}}">
                                    <span class="text-danger" style="font-size: 14px;">{{$errors->first('email')}}</span>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>{{__('messages.subject')}}</label>
                                    <input required name="subject" id="subject" class="form-control"
                                        placeholder="Your subject :"  value="{{old('subject')}}">
                                    <span class="text-danger" style="font-size: 14px;">{{$errors->first('subject')}}</span>

                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>{{__('messages.message')}}</label>
                                    <textarea name="message" id="message" rows="4" class="form-control"
                                        placeholder="Your Message :">{{old('message')}}</textarea>
                                    <span class="text-danger" style="font-size: 14px;">{{$errors->first('message')}}</span>

                                </div>
                            </div>
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-sm-12">
                                <input required type="submit" id="submit" name="send" class="submitBnt btn btn-primary"
                                    value="{{__('messages.send')}}">
                                <div id="simple-msg"></div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                    <!--end form-->
                </div>
                <!--end custom-form-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
@endsection
