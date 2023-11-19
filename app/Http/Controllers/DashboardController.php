<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Kerjasama;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        //kategori luar-dalam negeri
        $kategoriKerjasama = Kerjasama::select('kategori')
            ->selectRaw('COUNT(*) as total_kategori')
            ->groupBy('kategori')
            ->get();
        $data_kategori = []; // Initialize the array
        foreach ($kategoriKerjasama as $kategoriGroup) {
            $data_kategori[$kategoriGroup->kategori]['total'] = $kategoriGroup->total_kategori;
        }
        //kerjasama data perbulan
        $year = Carbon::now()->year; // Get the current year
        $dataMonthlyLN = Kerjasama::select(DB::raw('MONTH(tanggal) as month'), DB::raw('COUNT(*) as count'))
            ->where('kategori','LN')
            ->groupBy('month')
            ->orderBy('month')
            ->get();
        $data_monthly_LN = [];
        foreach ($dataMonthlyLN as $month) {
            $data_monthly_LN[$month->month] = $month->count;
        }
        for($i=1;$i<=12;$i++){
            $allmonth_LN[$i] =  isset($data_monthly_LN[$i])?$data_monthly_LN[$i]:0;
        }
        $implode_arr_allmonth_LN = implode(',',$allmonth_LN);
        $dataMonthlyDN = Kerjasama::select(DB::raw('MONTH(tanggal) as month'), DB::raw('COUNT(*) as count'))
            ->where('kategori','DN')
            ->groupBy('month')
            ->orderBy('month')
            ->get();
        $data_monthly_DN = [];
        foreach ($dataMonthlyDN as $month) {
            $data_monthly_DN[$month->month] = $month->count;
        }
        for($i=1;$i<=12;$i++){
            $allmonth_DN[$i] =  isset($data_monthly_DN[$i])?$data_monthly_DN[$i]:0;
        }
        $implode_arr_allmonth_DN = implode(',',$allmonth_DN);

        $mitraList = Kerjasama::select('instansi')
            ->groupBy('instansi')
            ->orderByRaw('COUNT(*) ASC')
            ->limit(15)
            ->pluck('instansi'); // Get the list of unique mitra values
        $dataGroupedByMitra = [];
        foreach ($mitraList as $instansi) {
            $nestedGroup = Kerjasama::select('status')
                ->selectRaw('COUNT(*) as total')
                ->where('instansi', $instansi) // Filter by mitra
                ->groupBy('status')
                ->orderBy('total', 'desc')
                ->get()
                ->toArray();
            $dataGroupedByMitra[$instansi] = $nestedGroup;
        }
        $quotedValues = array_map(function($value) {
            return "'" . $value . "'";
        }, array_keys($dataGroupedByMitra));
        $label_mitra = implode(', ', $quotedValues);
        foreach ($dataGroupedByMitra as $key => $value) {
            $newArray[$key] = [];
            foreach ($value as $item) {
                $newArray[$key][$item['status']] = $item['total'];
            }
        }
        $k=0;
        $arr_baru = [];
        foreach ($newArray as $key => $value) {
            $arr_baru[$k] = isset($value['br'])?$value['br']:0;
            $k++;
        }
        $kerjasama_data_baru = implode(', ', $arr_baru);
        $kl=0;
        $arr_lama = [];
        foreach ($newArray as $key => $value) {
            $arr_lama[$kl] = isset($value['lj'])?$value['lj']:0;
            $kl++;
        }
        $kerjasama_data_lama = implode(', ', $arr_lama);

        return view('pages.dashboard', compact('kerjasama_data_baru','kerjasama_data_lama','data_kategori','implode_arr_allmonth_LN','implode_arr_allmonth_DN','label_mitra'));
    }
}
