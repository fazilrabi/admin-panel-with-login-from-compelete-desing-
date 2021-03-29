@extends('cms.app')
@section('title', 'Add Partner | DMOYA Admin')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-plus icon-gradient bg-amy-crisp"></i>
            </div>
            <div>Add Partner
                <div class="page-title-subheading">Fill the following form to add a partner</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{route('admin.associate.partner.index')}}" type="button" class="btn-shadow btn btn-info"
                    style="font-weight: bold;">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-arrow-left fa-w-20"></i>
                    </span>
                    Go Back
                </a>
            </div>
        </div>
    </div>
</div>
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Partner Form</h5>
        <form id="signupForm" method="post" action="{{route('admin.associate.partner.store')}}" enctype="multipart/form-data"
            novalidate="novalidate">
            @csrf
            <div class="position-relative row form-group">
                <label for="title_en" class="col-sm-2 col-form-label">English Title</label>
                <div class="col-sm-10">
                    <input name="title_en" id="title_en" placeholder="Canada Embassy"
                        type="text" class="form-control" value="{{old('title_en')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_en')}}</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="position-relative row form-group">
                <label for="title_ps" class="col-sm-2 col-form-label">Pashto Title</label>
                <div class="col-sm-10">
                    <input name="title_ps" id="title_ps" placeholder="سفارت کانادا" type="text" class="form-control" value="{{old('title_ps')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_ps')}}</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="position-relative row form-group">
                <label for="title_fa" class="col-sm-2 col-form-label">Dari Title</label>
                <div class="col-sm-10">
                    <input name="title_fa" id="title_fa" placeholder="سفارت کانادا"
                        type="text" class="form-control" value="{{old('title_fa')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_fa')}}</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="position-relative row form-group">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input name="image" id="image" type="file" class="form-control-file form-control" required>
                    <span class="text-danger text-italic">{{$errors->first('image')}}</span>
                    <small class="form-text text-muted">The width and height of the image must be taken into account.
                    </small>
                </div>
            </div>
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2 pl-0">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
