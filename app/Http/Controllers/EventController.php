<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(6);
        return view('pages.events', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('pages.event-detail', compact('event'));
    }
}
