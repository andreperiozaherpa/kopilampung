<?php

namespace App\Http\Controllers;

use App\Models\ManagemenTugas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ManagemenTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $nama_bidang = $request->nama;
        $id_bidang = $request->id;

        $data = ManagemenTugas::where('id_bidang', $id_bidang)->get();

        return view('interface_admin.managemen_tugas', [
            'nama_bidang' => $nama_bidang,
            'id_bidang' => $id_bidang,
            'data' => $data
        ]);
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
        $id_bidang = $request->id_bidang;
        $id_tugas = $request->id_tugas;
        $nama_tugas = $request->nama_tugas;
        $date = Carbon::now();

        if ($request->param == 'uploads') {

            $file = $request->file;
            $path = storage_path('/app/public/disk/tugas');
            if (!Storage::exists($path)) {
                Storage::makeDirectory($path . $file, 0777, true, true);
            }
            $name = $date->format('ymd') . Str::random(5) . '.' .  $file->getClientOriginalExtension();
            $file->move($path, $name);

            if ($file) {
                $data = ManagemenTugas::where('id', $id_tugas)
                    ->where('status', 0)
                    ->update([
                        'nama_file' => $name,
                        'url_file' => '',
                        'status' => 1
                    ]);
            }

            $send = [
                'data' => 'ok'
            ];
        } else {
            $data = new ManagemenTugas();
            $data->id_user = Auth::user()->id;
            $data->id_bidang = $id_bidang;
            $data->nama_tugas = $nama_tugas;
            $data->status = 0;
            $data->save();

            $send = [
                'id' => $data->id,
                'nama_tugas' => $data->nama_tugas,
            ];
        }
        return response()->json([
            'data' => $send
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ManagemenTugas $managemenTugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ManagemenTugas $managemenTugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ManagemenTugas $managemenTugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ManagemenTugas $managemenTugas)
    {
        //
    }
}
