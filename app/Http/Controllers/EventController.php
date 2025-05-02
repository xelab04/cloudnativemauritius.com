<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $events = Event::orderBy('start_date', 'desc')->get();

        return view('index', compact('events'));
    }

    public function all()
    {
        $events = Event::all();

        $formattedData = $events->map(function ($item) {
            return [
                'community' => 'cloudnativemu',
                'id' => $item->id,
                'title' => $item->title,
                'url' => $item->cncf_url,
                'type' => 'meetup',
                'location' => $item->location,
                'abstract' => $item->note,
                'date' => $item->start_date->format('Y-m-d'),
            ];
        });

        return response()->json($formattedData);
    }
}
