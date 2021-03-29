@extends('cms.app')
@section('title', 'Add Event | AWN Admin')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-plus icon-gradient bg-amy-crisp"></i>
            </div>
            <div>Add Event
                <div class="page-title-subheading">Fill the following form to add a event</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{route('admin.event.index')}}" type="button" class="btn-shadow btn btn-info"
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
        <h5 class="card-title">Event Form</h5>
        <form id="signupForm" method="post" action="{{route('admin.event.store')}}" enctype="multipart/form-data"
            novalidate="novalidate">
            @csrf
            <div class="position-relative row form-group">
                <label for="title_en" class="col-sm-2 col-form-label">English Title</label>
                <div class="col-sm-10">
                    <input name="title_en" id="title_en" placeholder="Civil Voice for Peace"
                        type="text" class="form-control" value="{{old('title_en')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_en')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="description_en" class="col-sm-2 col-form-label">English Description</label>
                <div class="col-sm-10">
                    <textarea name="description_en" id="description_en" placeholder="Description Goes Here" type="text" class="form-control tiny" required>{{old('description_en')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('description_en')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="excerpt_en" class="col-sm-2 col-form-label">English Excerpt</label>
                <div class="col-sm-10">
                    <textarea name="excerpt_en" id="programs_en" placeholder="Excerpt Goes Here" type="text" class="form-control" required>{{old('excerpt_en')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('excerpt_en')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="location_en" class="col-sm-2 col-form-label">English Location</label>
                <div class="col-sm-10">
                    <input name="location_en" id="location_en" placeholder="Location Goes Here, e.g. US Embassy" type="text" class="form-control" value="{{old('location_en')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('location_en')}}</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="position-relative row form-group">
                <label for="title_ps" class="col-sm-2 col-form-label">Pashto Title</label>
                <div class="col-sm-10">
                    <input name="title_ps" id="title_ps" placeholder="روز زن" type="text" class="form-control" value="{{old('title_ps')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_ps')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="description_ps" class="col-sm-2 col-form-label">Pashto Description</label>
                <div class="col-sm-10">
                    <textarea name="description_ps" id="description_ps" placeholder="Description Goes Here" type="text" class="form-control tiny" required>{{old('description_ps')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('description_ps')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="excerpt_ps" class="col-sm-2 col-form-label">Pashto Excerpt</label>
                <div class="col-sm-10">
                    <textarea name="excerpt_ps" id="excerpt_ps" placeholder="Excerpt Goes Here" type="text" class="form-control" required>{{old('excerpt_ps')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('excerpt_ps')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="location_ps" class="col-sm-2 col-form-label">Pashto Location</label>
                <div class="col-sm-10">
                    <input name="location_ps" id="location_ps" placeholder="موقیعت" type="text" class="form-control" value="{{old('location_ps')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('location_ps')}}</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="position-relative row form-group">
                <label for="title_fa" class="col-sm-2 col-form-label">Dari Title</label>
                <div class="col-sm-10">
                    <input name="title_fa" id="title_fa" placeholder="روز زن"
                        type="text" class="form-control" value="{{old('title_fa')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_fa')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="description_fa" class="col-sm-2 col-form-label">Dari Description</label>
                <div class="col-sm-10">
                    <textarea name="description_fa" id="description_fa" placeholder="description goes here" type="text" class="form-control tiny" required>{{old('description_fa')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('description_fa')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="excerpt_fa" class="col-sm-2 col-form-label">Dari Excerpt</label>
                <div class="col-sm-10">
                    <textarea name="excerpt_fa" id="excerpt_fa" placeholder="Excerpt Goes Here" type="text" class="form-control" required>{{old('excerpt_fa')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('excerpt_fa')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="location_fa" class="col-sm-2 col-form-label">Dari Location</label>
                <div class="col-sm-10">
                    <input name="location_fa" id="location_fa" placeholder="موقیعت" type="text" class="form-control" value="{{old('location_fa')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('location_fa')}}</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="position-relative row form-group">
                <label for="date" class="col-sm-2 col-form-label">Date</label>
                <div class="col-sm-10">
                    <input name="date" id="date" placeholder="د افغانستان د بیاودانولو او اجتماعی خدمتونو" type="date" class="form-control" value="{{old('date')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('date')}}</span>
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
