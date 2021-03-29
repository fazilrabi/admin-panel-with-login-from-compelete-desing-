@extends('cms.app')
@section('title', 'Add Slider | DOMYA Admin')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-plus icon-gradient bg-amy-crisp"></i>
            </div>
            <div>Add Slider
                <div class="page-title-subheading">Fill the following form to add a slider</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{route('admin.slider.index')}}" type="button" class="btn-shadow btn btn-info"
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
        <h5 class="card-title">Slider Form</h5>
        <form id="signupForm" method="post" action="{{route('admin.slider.store')}}" enctype="multipart/form-data"
            novalidate="novalidate">
            @csrf
            <div class="position-relative row form-group">
                <label for="title_en" class="col-sm-2 col-form-label">English Title</label>
                <div class="col-sm-10">
                    <input name="title_en" id="title_en" placeholder="Latest News On Afghan Women"
                        type="text" class="form-control" value="{{old('title_en')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_en')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="subtitle_en" class="col-sm-2 col-form-label">English Subtitle</label>
                <div class="col-sm-10">
                    <input name="subtitle_en" id="subtitle_en" placeholder="From the most authentic sources with images"
                        type="text" class="form-control" value="{{old('subtitle_en')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('subtitle_en')}}</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="position-relative row form-group">
                <label for="title_ps" class="col-sm-2 col-form-label">Pashto Title</label>
                <div class="col-sm-10">
                    <input name="title_ps" id="title_ps" placeholder="د ښځو په هکله بیړنی خبرونه"
                        type="text" class="form-control" value="{{old('title_ps')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_ps')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="subtitle_en" class="col-sm-2 col-form-label">Pashto Subtitle</label>
                <div class="col-sm-10">
                    <input name="subtitle_ps" id="subtitle_ps" placeholder="د تر ټولو موثق سرچینو څخه"
                        type="text" class="form-control" value="{{old('subtitle_ps')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('subtitle_ps')}}</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="position-relative row form-group">
                <label for="title_fa" class="col-sm-2 col-form-label">Dari Title</label>
                <div class="col-sm-10">
                    <input name="title_fa" id="title_fa" placeholder="جدید ترین اخبار در باره زنان افغانستان"
                        type="text" class="form-control" value="{{old('title_fa')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('title_fa')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="subtitle_fa" class="col-sm-2 col-form-label">Dari Subtitle</label>
                <div class="col-sm-10">
                    <input name="subtitle_fa" id="subtitle_fa" placeholder="از موثق ترین منبع های ممکن"
                        type="text" class="form-control" value="{{old('subtitle_fa')}}" required maxlength="190">
                    <span class="text-danger text-italic">{{$errors->first('subtitle_fa')}}</span>
                </div>
            </div>
            <div class="divider"></div>
            <div class="position-relative row form-group">
                <label for="link" class="col-sm-2 col-form-label">Link</label>
                <div class="col-sm-10">
                    <input name="link" id="link" placeholder="http://awn-af.net/news/4"
                        type="url" class="form-control" value="{{old('link')}}">
                    <span class="text-danger text-italic">{{$errors->first('link')}}</span>
                    <small class="form-text text-muted">Link and button texts are optional, but if you want to add a link, please fill all fields, not just one.
                    </small>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="button_en" class="col-sm-2 col-form-label">Button Text English</label>
                <div class="col-sm-10">
                    <input name="button_en" id="button_en" placeholder="Visit"
                        type="text" class="form-control" value="{{old('button_en')}}">
                    <span class="text-danger text-italic">{{$errors->first('button_en')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="button_ps" class="col-sm-2 col-form-label">Button Text Pashto</label>
                <div class="col-sm-10">
                    <input name="button_ps" id="button_ps" placeholder="تلل"
                        type="text" class="form-control" value="{{old('button_ps')}}" required>
                    <span class="text-danger text-italic">{{$errors->first('button_ps')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="button_fa" class="col-sm-2 col-form-label">Button Text Dari</label>
                <div class="col-sm-10">
                    <input name="button_fa" id="button_fa" placeholder="دیدن"
                        type="text" class="form-control" value="{{old('button_fa')}}" required>
                    <span class="text-danger text-italic">{{$errors->first('button_fa')}}</span>
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
