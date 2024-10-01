<?php

namespace App\Http\Controllers;

use App\Models\DaftarBidang;
use App\Models\ManagemenTugas;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class DaftarBidangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = DaftarBidang::get();
        foreach ($data as $value) {
            $data_count[] = [
                'id_bidang' => $value->id,
                'nama_bidang' => $value->nama_bidang,
                'jumlah_data_selesai' => ManagemenTugas::where('id_bidang', $value->id)
                    ->where('status', 1)
                    ->count(),
                'jumlah_data_progres' => ManagemenTugas::where('id_bidang', $value->id)
                    ->where('status', 0)
                    ->count(),
                'jumlah_data_total' => ManagemenTugas::where('id_bidang', $value->id)
                    ->count()
            ];
        }

        // dd($data_count);
        return view('interface_admin.managemen_bidang_tugas', [
            'data' => collect($data_count)
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
        $nama_bidang = $request->nama_bidang;

        $data = new DaftarBidang();
        $data->nama_bidang = $nama_bidang;
        $data->save();

        return response()->json([
            'nama_bidang' => $nama_bidang
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarBidang $daftarBidang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarBidang $daftarBidang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaftarBidang $daftarBidang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBidang $daftarBidang)
    {
        //
    }
}
