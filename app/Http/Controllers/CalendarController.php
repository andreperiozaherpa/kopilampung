<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DateTimeZone;
use Spatie\GoogleCalendar\Event;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $events = Event::get();
        // dd($events);

        if (count($events) >= 1) {
            foreach ($events as $value) {
                if ($value->googleEvent->conferenceData) {
                    $color = '#FFEB00';
                    $categori = 'online';
                    $meeting = $value->googleEvent->hangoutLink;
                } else {
                    $color = '#00CCDD';
                    $categori = 'offline';
                    $meeting = '';
                }

                if ($value->googleEvent->start->date == null) {
                    $start = $value->googleEvent->start->dateTime;
                    $end = $value->googleEvent->end->dateTime;
                } else {
                    $start = $value->googleEvent->start->date;
                    $end = $value->googleEvent->end->date;
                }

                $data[] = [
                    "id" => $value->googleEvent->id,
                    "title" => $value->googleEvent->summary,
                    "start" => $start,
                    "end" => $end,
                    "color" => $color,
                    "category" => $categori,
                    "meeting" => $meeting
                ];
            }

            // dd($data);
            file_put_contents(public_path("/assets/json/google-events.json"), json_encode($data));
        } else {
            $data = [];
            file_put_contents(public_path("/assets/json/google-events.json"), json_encode($data));
        }
        return view('interface_admin.calendar');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $eventId = $request->id;
        $event = Event::find($eventId);

        return response()->json([
            'id' => $event
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $title = $request->title;
        $start = Carbon::parse($request->start);
        $end =  Carbon::parse($request->end);
        $id = $request->id;
        $category = $request->category;
        $color = $request->color;

        $event = new Event;
        $event->name = $title;
        $event->description = $title;
        $event->startDateTime = $start;
        $event->endDateTime = $end;
        // $event->addAttendee(['email' => 'lisazulfa13@gmail.com']);
        if ($category == 'online') {
            $event->addMeetLink();
        }
        $event->save();

        return response()->json([
            "data" => [
                "title" => $title,
                "start" => $start,
                "end" => $end,
                "id" => $id,
                "category" => $category,
                "color" => $color,
            ]
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //

        $title = $request->title;
        $start = Carbon::parse($request->start);
        $end =  Carbon::parse($request->end);
        $id = $request->id;
        $category = $request->category;
        $color = $request->color;

        // dd($category);
        $event = Event::find($id);
        $event->name = $title;
        $event->description = $title;
        $event->startDateTime = $start;
        $event->endDateTime = $end;
        // $event->addAttendee(['email' => 'lisazulfa13@gmail.com']);
        if ($category == 'online') {
            $event->addMeetLink();
        }
        $event->save();

        return response()->json([
            "data" => [
                "title" => $title,
                "start" => $start,
                "end" => $end,
                "id" => $id,
                "category" => $category,
                "color" => $color,
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $eventId = $request->eventId;
        // dd($eventId);
        $event = Event::find($eventId);
        $event->delete();
        // dd('a');
        $get_file = file_get_contents(public_path("/assets/json/google-events.json"));
        $collect_file = collect(json_decode($get_file));
        // $collect_file->firstWhere('id', $eventId);
        $collect_save = $collect_file->filter(function ($item) use ($eventId) {
            $data = $item->id != $eventId;
            return $data;
        });
        $collect_save_reindex = $collect_save->values()->toArray();

        // dd($collect_save_reindex);
        file_put_contents(public_path("/assets/json/google-events.json"), json_encode($collect_save_reindex));

        return response()->json([
            'eventId' => $eventId
        ]);
    }
}
