@extends('cms.app')
@section('title', 'Add Advisor | DMOYA Admin')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-plus icon-gradient bg-amy-crisp"></i>
            </div>
            <div>Add Advisor
                <div class="page-title-subheading">Fill the following form to add a advisor</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{route('admin.about.advisor.index')}}" type="button" class="btn-shadow btn btn-info"
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
        <h5 class="card-title">Advisor Form</h5>
        <form id="signupForm" method="post" action="{{route('admin.about.advisor.store')}}" enctype="multipart/form-data"
            novalidate="novalidate">
            @csrf
            <div class="position-relative row form-group">
                <label for="name_en" class="col-sm-2 col-form-label">English Name</label>
                <div class="col-sm-10">
                    <input name="name_en" id="title_en" placeholder="Civil Voice for Peace"
                        type="text" class="form-control" value="{{old('name_en')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('name_en')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="title_en" class="col-sm-2 col-form-label">English Title</label>
                <div class="col-sm-10">
                    <input name="title_en" id="title_en" placeholder="Civil Voice for Peace"
                        type="text" class="form-control" value="{{old('title_en')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_en')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="bio_en" class="col-sm-2 col-form-label">English Bio</label>
                <div class="col-sm-10">
                    <textarea name="bio_en" id="bio_en" placeholder="Bio Goes Here" type="text" class="form-control" required>{{old('bio_en')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('bio_en')}}</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="position-relative row form-group">
                <label for="name_ps" class="col-sm-2 col-form-label">Pashto Name</label>
                <div class="col-sm-10">
                    <input name="name_ps" id="title_ps" placeholder="Civil Voice for Peace"
                        type="text" class="form-control" value="{{old('name_ps')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('name_ps')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="title_ps" class="col-sm-2 col-form-label">Pashto Title</label>
                <div class="col-sm-10">
                    <input name="title_ps" id="title_ps" placeholder="Civil Voice for Peace"
                        type="text" class="form-control" value="{{old('title_ps')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_ps')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="bio_ps" class="col-sm-2 col-form-label">Pashto Bio</label>
                <div class="col-sm-10">
                    <textarea name="bio_ps" id="bio_ps" placeholder="Bio Goes Here" type="text" class="form-control" required>{{old('bio_ps')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('bio_ps')}}</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="position-relative row form-group">
                <label for="name_fa" class="col-sm-2 col-form-label">Dari Name</label>
                <div class="col-sm-10">
                    <input name="name_fa" id="title_fa" placeholder="Civil Voice for Peace"
                        type="text" class="form-control" value="{{old('name_fa')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('name_fa')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="title_fa" class="col-sm-2 col-form-label">Dari Title</label>
                <div class="col-sm-10">
                    <input name="title_fa" id="title_fa" placeholder="Civil Voice for Peace"
                        type="text" class="form-control" value="{{old('title_fa')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_fa')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="bio_fa" class="col-sm-2 col-form-label">Dari Bio</label>
                <div class="col-sm-10">
                    <textarea name="bio_fa" id="bio_fa" placeholder="Bio Goes Here" type="text" class="form-control" required>{{old('bio_fa')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('bio_fa')}}</span>
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
