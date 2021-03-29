<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OpportunityRequest;
use App\Models\Opportunity;
use Illuminate\Support\Facades\Storage;

class OpportunityController extends Controller
{
  public function __construct(){
      $this->middleware('auth:admin');
    }

    public function index()
    {
      $opportunities = Opportunity::orderBy('title_en')->get();
      return view('cms.opportunity.index', compact('opportunities'));
    }

    public function create()
    {
      return view('cms.opportunity.create');
    }

    public function store(OpportunityRequest $request)
    {
      $opportunity_data = $request->validated();
      $image_path = $request->file('image')->store('public/images/opportunity');
      $image = basename($image_path);
      $opportunity_data['image'] = $image;
      Opportunity::create($opportunity_data);
      return redirect(route('admin.opportunity.index'));
    }

    public function edit(Opportunity $opportunity)
    {
      return view('cms.opportunity.edit', compact('opportunity'));
    }

    public function update(OpportunityRequest $request, Opportunity $opportunity)
    {
      $opportunity_data = $request->validated();
      if ($request->hasFile('image')){
        $pre_image = $opportunity->image;
        Storage::delete('public/images/opportunity/' . $pre_image);
        $image_path = $request->file('image')->store('public/images/opportunity');
        $image = basename($image_path);
        $opportunity_data['image'] = $image;
      }
      $opportunity->update($opportunity_data);
      return redirect(route('admin.opportunity.index'));
    }

    public function destroy(Opportunity $opportunity)
    {
      $pre_image = $opportunity->image;
      Storage::delete('public/images/opportunity/' . $pre_image);
      $opportunity->delete();
      return back();
    }
}
