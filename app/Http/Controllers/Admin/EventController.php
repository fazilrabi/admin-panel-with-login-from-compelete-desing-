<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
  public function __construct(){
      $this->middleware('auth:admin');
    }

    public function index()
    {
      $events = Event::orderBy('title_en')->get();
      return view('cms.event.index', compact('events'));
    }

    public function create()
    {
      return view('cms.event.create');
    }

    public function store(EventRequest $request)
    {
      $event_data = $request->validated();
      $image_path = $request->file('image')->store('public/images/event');
      $image = basename($image_path);
      $event_data['image'] = $image;
      Event::create($event_data);
      return redirect(route('admin.event.index'));
    }

    public function edit(Event $event)
    {
      return view('cms.event.edit', compact('event'));
    }

    public function update(EventRequest $request, Event $event)
    {
      $event_data = $request->validated();
      if ($request->hasFile('image')){
        $pre_image = $event->image;
        Storage::delete('public/images/event/' . $pre_image);
        $image_path = $request->file('image')->store('public/images/event');
        $image = basename($image_path);
        $event_data['image'] = $image;
      }
      $event->update($event_data);
      return redirect(route('admin.event.index'));
    }

    public function destroy(Event $event)
    {
      $pre_image = $event->image;
      Storage::delete('public/images/event/' . $pre_image);
      $event->delete();
      return back();
    }
}
