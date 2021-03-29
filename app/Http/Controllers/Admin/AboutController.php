<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutRequest;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
  public function __construct(){
      $this->middleware('auth:admin');
    }

    public function index()
    {
      $abouts = About::orderBy('title_en')->get();
      return view('cms.about.index', compact('abouts'));
    }

    public function create()
    {
      return view('cms.about.create');
    }

    public function store(AboutRequest $request)
    {
      $about_data = $request->validated();
      $image_path = $request->file('image')->store('public/images/about');
      $image = basename($image_path);
      $about_data['image'] = $image;
      About::create($about_data);
      return redirect(route('admin.about.index'));
    }

    public function edit(About $about)
    {
      return view('cms.about.edit', compact('about'));
    }

    public function update(AboutRequest $request, About $about)
    {
      $about_data = $request->validated();
      if ($request->hasFile('image')){
        $pre_image = $about->image;
        Storage::delete('public/images/about/' . $pre_image);
        $image_path = $request->file('image')->store('public/images/about');
        $image = basename($image_path);
        $about_data['image'] = $image;
      }
      $about->update($about_data);
      return redirect(route('admin.about.index'));
    }

    public function destroy(About $about)
    {
      $pre_image = $about->image;
      Storage::delete('public/images/about/' . $pre_image);
      $about->delete();
      return back();
    }


    public function contacts()
    {
      $contacts = Contact::all();
      return view('cms.contact', compact('contacts'));
    }

    public function destroyContact(Contact $contact)
    {
      $contact->delete();
      return back();
    }
}
