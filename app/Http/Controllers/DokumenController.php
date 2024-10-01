<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yaza\LaravelGoogleDriveStorage\Gdrive;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('interface_admin.dokumen');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $file = $request->file('file');
        $folder = $request->folder;
        $param = $request->param;
        $nama = $request->nama_folder;
        if ($param == 'uploads') {
            # code...
            Gdrive::put($folder . '/' . $file->getClientOriginalName(), $request->file('file'));

            return response()->json([
                'folder' => $folder
            ]);
        } else {
            Gdrive::makeDir($folder . '/' . $nama);

            $data = Gdrive::all($folder, false);
            return response()->json([
                'param' => 'get_all',
                'data' => $data,
                'folder' => $folder,
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        $folder = $request->folder;
        $array = explode('/', $folder);
        if (count($array) > 1) {
            array_pop($array);
            // dd($array);
        }
        $back = implode('/', $array);
        $data = Gdrive::all($folder, false);
        return response()->json([
            'param' => 'get_all',
            'data' => $data,
            'back' => $back,
            'folder' => $folder
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
    public function destroy(Request $request)
    {
        //
        $path = $request->path;
        $folder = $request->path;

        Gdrive::delete($path);

        $array = explode('/', $folder);
        if (count($array) > 1) {
            array_pop($array);
            // dd($array);
        }
        $back = implode('/', $array);
        $data = Gdrive::all($back, false);
        return response()->json([
            'param' => 'get_all',
            'data' => $data,
            'back' => null
        ]);
    }

    public function download(Request $request)
    {
        //
        $path = $request->path;
        $data = Gdrive::get($path);
        return response($data->file, 200)
            ->header('Content-Type', $data->ext)
            ->header('Files-Names', $data->filename)
            ->header('Content-disposition', 'attachment; filename="' . $data->filename . '"');
    }
}
