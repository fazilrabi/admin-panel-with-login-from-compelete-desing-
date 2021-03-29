<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
  public function __construct(){
      $this->middleware('auth:admin');
    }

    public function index()
    {
      $blogs = Blog::orderBy('title_en')->get();
      return view('cms.blog.index', compact('blogs'));
    }

    public function create()
    {
      return view('cms.blog.create');
    }

    public function store(BlogRequest $request)
    {
      $blog_data = $request->validated();
      $image_path = $request->file('image')->store('public/images/blog');
      $image = basename($image_path);
      $blog_data['image'] = $image;
      Blog::create($blog_data);
      return redirect(route('admin.blog.index'));
    }

    public function edit(Blog $blog)
    {
      return view('cms.blog.edit', compact('blog'));
    }

    public function update(BlogRequest $request, Blog $blog)
    {
      $blog_data = $request->validated();
      if ($request->hasFile('image')){
        $pre_image = $blog->image;
        Storage::delete('public/images/blog/' . $pre_image);
        $image_path = $request->file('image')->store('public/images/blog');
        $image = basename($image_path);
        $blog_data['image'] = $image;
      }
      $blog->update($blog_data);
      return redirect(route('admin.blog.index'));
    }

    public function destroy(Blog $blog)
    {
      $pre_image = $blog->image;
      Storage::delete('public/images/blog/' . $pre_image);
      $blog->delete();
      return back();
    }
}
