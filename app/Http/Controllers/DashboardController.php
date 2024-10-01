<?php

namespace App\Http\Controllers;

use App\Imports\ExcelImport;
use App\Models\ManagemenTugas;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // lra
        $get_data_tugas_lra = ManagemenTugas::where('nama_tugas', 'like', '%LAPORAN REALISASI ANGGARAN%')->first();
        // dd($get_data_tugas->nama_tugas);
        $get_data_excel_lra = Excel::toArray(new ExcelImport, storage_path('app/public/disk/tugas/' . $get_data_tugas_lra->nama_file));
        $get_table_header = $get_data_excel_lra[0][0];
        unset($get_data_excel_lra[0][0]);
        $get_table_body_lra = array_values($get_data_excel_lra[0]);

        // perbendaharaan
        $get_data_tugas_perben = ManagemenTugas::where('nama_tugas', 'like', '%perbendaharaan%')->first();
        $get_data_excel_perben = Excel::toArray(new ExcelImport, storage_path('app/public/disk/tugas/' . $get_data_tugas_perben->nama_file));
        $get_table_header_perben = $get_data_excel_perben[0][0];
        unset($get_data_excel_perben[0][0]);
        $get_table_body_perben = array_values($get_data_excel_perben[0]);
        // dd($get_table_body_perben);

        // ipkd
        $get_data_tugas_ipkd = ManagemenTugas::where('nama_tugas', 'like', '%Indeks Pengelolaan Keuangan Daerah%')->first();
        $get_data_excel_ipkd = Excel::toArray(new ExcelImport, storage_path('app/public/disk/tugas/' . $get_data_tugas_ipkd->nama_file));
        $get_table_header_ipkd = $get_data_excel_ipkd[0][0];
        unset($get_data_excel_ipkd[0][0]);
        $get_table_body_ipkd = array_values($get_data_excel_ipkd[0]);

        foreach ($get_table_body_ipkd as $keys => $values) {
            $label_ipkd[] = (string)$values[0];
        }

        foreach ($get_table_body_ipkd as $k => $v) {
            foreach ($get_table_header_ipkd as $ke => $val) {
                $res[$val][] = $v[$ke];
            }
        }

        foreach ($res as $keys => $value) {
            # code...
            $ipkd_fix[] = [
                'label' => $keys,
                'borderColor' => "#6a9a33",
                'backgroundColor' => "rgba(" . rand(0, 250) . ", 175, " . rand(0, 255) . ",0.7)",
                'data' => $value,
                'borderWidth' => 2,
            ];
        }
        $ipkd_collect = collect($ipkd_fix)->toJson();

        // apbd
        $get_data_tugas_apbd = ManagemenTugas::where('nama_tugas', 'like', '%Anggaran Pendapatan dan Belanja Daerah%')->first();
        $get_data_excel_apbd = Excel::toArray(new ExcelImport, storage_path('app/public/disk/tugas/' . $get_data_tugas_apbd->nama_file));
        $get_table_header_apbd = $get_data_excel_apbd[0][0];
        unset($get_data_excel_apbd[0][0]);
        $get_table_body_apbd = array_values($get_data_excel_apbd[0]);


        foreach ($get_table_body_apbd as $keys => $values) {
            $label_apbd[] = (string)$values[0];
        }

        foreach ($get_table_body_apbd as $k => $v) {
            foreach ($get_table_header_apbd as $ke => $val) {
                $res_apbd[$val][] = $v[$ke];
            }
        }

        foreach ($res_apbd as $keys => $value) {
            # code...
            $apbd_fix[] = [
                'label' => $keys,
                'data' => $value,
            ];
        }

        // dd($apbd_fix, $get_table_header_apbd, $get_table_body_apbd);

        return view('interface_admin.index', [
            'lra' => $get_table_body_lra,
            'perben' => $get_table_body_perben,
            'body_ipkd' => $get_table_body_ipkd,
            'label_ipkd' => implode('","', $label_ipkd),
            'body_ipkd' => $ipkd_collect,
            'apbd_fix' => $apbd_fix
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
