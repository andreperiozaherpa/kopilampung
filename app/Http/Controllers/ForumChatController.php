<?php

namespace App\Http\Controllers;

use App\Models\crf;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class ForumChatController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('interface_admin.forum_chat');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $forumId = $request->forumId;

        $path = storage_path('/app/chat');
        $get_data = file_get_contents($path . '/' . $forumId . '.json');
        $collect = collect(json_decode($get_data));
        $param = $request->param;
        $data = $collect->filter(function ($item) use ($forumId) {
            return false !== stristr($item->forum_id, $forumId);
        });
        return response()->json([
            'param' => $param,
            'data' => $data,
            'count' => count($collect[0]->messages)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $forumId = $request->forumId;
        $nameId = $request->nameId;
        $name = $request->name;
        $thumb = $request->thumb;
        $pesan = $request->pesan;
        $param = 'chat';
        $data = [
            "id" => $nameId,
            "name" => $name,
            "thumb" => $thumb,
            "text" => $pesan,
            "time" => now(),
            "type" => "message",
            "attachments" => []
        ];

        $path = storage_path('/app/chat');
        $get_data = file_get_contents($path . '/' . $forumId . '.json');
        $collect = collect(json_decode($get_data));

        array_push($collect[0]->messages, $data);
        file_put_contents($path . '/' . $forumId . '.json', $collect);

        $forum_file = file_get_contents($path . '/forum.json');
        $collect_forum = json_decode($forum_file);
        // dd($collect_forum);

        foreach ($collect_forum as $key => $value) {
            if ($value->forum_id == $forumId) {
                $forum_update[] = (object)[
                    "forum_id" => $value->forum_id,
                    "forum" => $value->forum,
                    "last" => now(),
                    "status" =>  $value->status,
                    "unread" => 0
                ];
            } else {
                $forum_update[] = $value;
            }
        }
        file_put_contents($path . '/forum.json', collect($forum_update));

        return response()->json([
            'count' => count($collect[0]->messages)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        $path = storage_path('app/chat');
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }

        $get_data = file_get_contents($path . '/forum.json');
        $data = collect(json_decode($get_data))->sortByDesc('last');
        $param = $request->param;
        // dd($data);
        return response()->json([
            'param' => $param,
            'data' => $data
        ]);
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
