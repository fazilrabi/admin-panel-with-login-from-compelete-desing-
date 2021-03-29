@extends('cms.app')
@section('title', 'Edit Opportunity | DMOYA Admin')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-plus icon-gradient bg-amy-crisp"></i>
            </div>
            <div>Edit Opportunity
                <div class="page-title-subheading">Fill the following form to edit a opportunity</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{route('admin.opportunity.index')}}" type="button" class="btn-shadow btn btn-info"
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
        <h5 class="card-title">Opportunity Form</h5>
        <form id="signupForm" method="post" action="{{route('admin.opportunity.update', $opportunity)}}" enctype="multipart/form-data"
            novalidate="novalidate">
            @csrf
            @method('PATCH')
            <div class="position-relative row form-group">
                <label for="title_en" class="col-sm-2 col-form-label">English Title</label>
                <div class="col-sm-10">
                    <input name="title_en" id="title_en" placeholder="Civil Voice for Peace"
                        type="text" class="form-control" value="{{$opportunity->title_en}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_en')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="description_en" class="col-sm-2 col-form-label">English Description</label>
                <div class="col-sm-10">
                    <textarea name="description_en" id="description_en" placeholder="Description Goes Here" type="text" class="form-control tiny" required>{{$opportunity->description_en}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('description_en')}}</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="position-relative row form-group">
                <label for="title_ps" class="col-sm-2 col-form-label">Pashto Title</label>
                <div class="col-sm-10">
                    <input name="title_ps" id="title_ps" placeholder="روز زن" type="text" class="form-control" value="{{$opportunity->title_ps}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_ps')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="description_ps" class="col-sm-2 col-form-label">Pashto Description</label>
                <div class="col-sm-10">
                    <textarea name="description_ps" id="description_ps" placeholder="Description Goes Here" type="text" class="form-control tiny" required>{{$opportunity->description_ps}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('description_ps')}}</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="position-relative row form-group">
                <label for="title_fa" class="col-sm-2 col-form-label">Dari Title</label>
                <div class="col-sm-10">
                    <input name="title_fa" id="title_fa" placeholder="روز زن"
                        type="text" class="form-control" value="{{$opportunity->title_fa}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_fa')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="description_fa" class="col-sm-2 col-form-label">Dari Description</label>
                <div class="col-sm-10">
                    <textarea name="description_fa" id="description_fa" placeholder="Description Goes Here" type="text" class="form-control tiny" required>{{$opportunity->description_fa}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('description_fa')}}</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="position-relative row form-group">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-4">
                    <input name="image" id="image" type="file" class="form-control-file form-control">
                    <span class="text-danger text-italic">{{$errors->first('image')}}</span>
                    <small class="form-text text-muted">The width and height of the image must be taken into account.
                    </small>
                </div>
                <div class="col-sm-2 text-right">
                    <span class="d-inline-block mt-2 text-right">Current Image:</span>
                </div>
                <div class="col-sm-4">
                    <img src="{{asset('storage/images/opportunity/' . $opportunity->image)}}" alt="Opportunity Image" class="mw-100"
                        style="border-radius: 10px;">
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
