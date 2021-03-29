<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ContactRequest;
use App\Models\About;
use App\Models\Blog;
use App\Models\Donor;
use App\Models\Event;
use App\Models\Contact;
use App\Models\Opportunity;
use App\Models\Slider;

class HomeController extends Controller
{
  public function index()
  {
    $sliders = Slider::all();
    $blogs = Blog::orderBy('created_at')->get()->take(4);
    $events = Event::orderBy('created_at')->get()->take(4);
    return view('front.home', compact(['sliders', 'blogs', 'events']));
  }

  public function donors()
  {
    $donors = Donor::all();
    return view('front.donors', compact('donors'));
  }

  public function sponsors()
  {
    $sponsors = Donor::all();
    return view('front.sponsors', compact('sponsors'));
  }

  public function blog()
  {
    $blogs = Blog::orderBy('title_en')->paginate(6);
    return view('front.blog', compact('blogs'));
  }

  public function showBlog(Blog $blog)
  {
    return view('front.showBlog', compact('blog'));
  }

  public function event()
  {
    $events = Event::orderBy('created_at')->paginate(6);
    return view('front.event', compact('events'));
  }

  public function showEvent(Event $event)
  {
    return view('front.showEvent', compact('event'));
  }

  public function contact()
  {
    return view('front.contact');
  }

  public function submitContact(ContactRequest $request)
  {
    $request_data = $request->validated();
    Contact::create($request_data);
    return back()->with('message', 'sent');
  }

  public function about(About $about)
  {
    return view('front.about', compact('about'));
  }

  public function opportunity(Opportunity $opportunity)
  {
    return view('front.opportunity', compact('opportunity'));
  }

}
