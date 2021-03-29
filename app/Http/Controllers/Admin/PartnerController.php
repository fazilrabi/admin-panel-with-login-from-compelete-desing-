<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PartnerRequest;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
  public function __construct(){
      $this->middleware('auth:admin');
    }

    public function index()
    {
      $partners = Partner::orderBy('title_en')->get();
      return view('cms.associate.partner.index', compact('partners'));
    }

    public function create()
    {
      return view('cms.associate.partner.create');
    }

    public function store(PartnerRequest $request)
    {
      $partner_data = $request->validated();
      $image_path = $request->file('image')->store('public/images/partner');
      $image = basename($image_path);
      $partner_data['image'] = $image;
      Partner::create($partner_data);
      return redirect(route('admin.associate.partner.index'));
    }

    public function edit(Partner $partner)
    {
      return view('cms.associate.partner.edit', compact('partner'));
    }

    public function update(PartnerRequest $request, Partner $partner)
    {
      $partner_data = $request->validated();
      if ($request->hasFile('image')){
        $pre_image = $partner->image;
        Storage::delete('public/images/partner/' . $pre_image);
        $image_path = $request->file('image')->store('public/images/partner');
        $image = basename($image_path);
        $partner_data['image'] = $image;
      }
      $partner->update($partner_data);
      return redirect(route('admin.associate.partner.index'));
    }

    public function destroy(Partner $partner)
    {
      $pre_image = $partner->image;
      Storage::delete('public/images/partner/' . $pre_image);
      $partner->delete();
      return back();
    }
}
