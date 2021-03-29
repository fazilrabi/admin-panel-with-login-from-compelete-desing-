<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdvisorRequest;
use App\Models\Advisor;
use Illuminate\Support\Facades\Storage;

class AdvisorController extends Controller
{
  public function __construct(){
      $this->middleware('auth:admin');
    }

    public function index()
    {
      $advisors = Advisor::orderBy('title_en')->get();
      return view('cms.about.advisor.index', compact('advisors'));
    }

    public function create()
    {
      return view('cms.about.advisor.create');
    }

    public function store(AdvisorRequest $request)
    {
      $advisor_data = $request->validated();
      $image_path = $request->file('image')->store('public/images/advisor');
      $image = basename($image_path);
      $advisor_data['image'] = $image;
      Advisor::create($advisor_data);
      return redirect(route('admin.about.advisor.index'));
    }

    public function edit(Advisor $advisor)
    {
      return view('cms.about.advisor.edit', compact('advisor'));
    }

    public function update(AdvisorRequest $request, Advisor $advisor)
    {
      $advisor_data = $request->validated();
      if ($request->hasFile('image')){
        $pre_image = $advisor->image;
        Storage::delete('public/images/advisor/' . $pre_image);
        $image_path = $request->file('image')->store('public/images/advisor');
        $image = basename($image_path);
        $advisor_data['image'] = $image;
      }
      $advisor->update($advisor_data);
      return redirect(route('admin.about.advisor.index'));
    }

    public function destroy(Advisor $advisor)
    {
      $pre_image = $advisor->image;
      Storage::delete('public/images/advisor/' . $pre_image);
      $advisor->delete();
      return back();
    }
}
