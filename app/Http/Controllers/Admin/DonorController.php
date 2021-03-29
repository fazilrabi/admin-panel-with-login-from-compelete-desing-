<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DonorRequest;
use App\Models\Donor;
use Illuminate\Support\Facades\Storage;

class DonorController extends Controller
{
  public function __construct(){
      $this->middleware('auth:admin');
    }

    public function index()
    {
      $donors = Donor::orderBy('title_en')->get();
      return view('cms.associate.donor.index', compact('donors'));
    }

    public function create()
    {
      return view('cms.associate.donor.create');
    }

    public function store(DonorRequest $request)
    {
      $donor_data = $request->validated();
      $image_path = $request->file('image')->store('public/images/donor');
      $image = basename($image_path);
      $donor_data['image'] = $image;
      Donor::create($donor_data);
      return redirect(route('admin.associate.donor.index'));
    }

    public function edit(Donor $donor)
    {
      return view('cms.associate.donor.edit', compact('donor'));
    }

    public function update(DonorRequest $request, Donor $donor)
    {
      $donor_data = $request->validated();
      if ($request->hasFile('image')){
        $pre_image = $donor->image;
        Storage::delete('public/images/donor/' . $pre_image);
        $image_path = $request->file('image')->store('public/images/donor');
        $image = basename($image_path);
        $donor_data['image'] = $image;
      }
      $donor->update($donor_data);
      return redirect(route('admin.associate.donor.index'));
    }

    public function destroy(Donor $donor)
    {
      $pre_image = $donor->image;
      Storage::delete('public/images/donor/' . $pre_image);
      $donor->delete();
      return back();
    }
}
