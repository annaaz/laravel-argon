<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\DataMaster;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Kerjasama;
use Validator;


class InformasiKerjasamaLuarController extends Controller
{
    private $bidang_kerjasama;
    private $jenis_kerjasama;

    public function __construct()
    {
        $this->bidang_kerjasama = DataMaster::where('name', 'bidang_kerjasama')->get();
        $this->jenis_kerjasama = DataMaster::where('name','jenis')->get();
        $this->status = DataMaster::where('name', 'status')->get();
    }
    public function reformat_arr($arr)
    {
        $arr_new = [];
        foreach ($arr as $item){
            $arr_new[$item->kode] = $item->value;
        }
        return $arr_new;
    }

    public function create(Request $request)
    {
        $query = Kerjasama::query();
        $query->where('kategori', '=', 'LN');
        // Always left join the 'bidang_fokus' table
        if ($request->filled('instansi')) {
            $query->where('instansi', 'like', '%' . $request->input('instansi') . '%');
        }
        if ($request->filled('bidang_fokus')) {
            $query->where('bidang_kerjasama', 'like', '%' . $request->input('bidang_fokus') . '%');
        }
        $data = $query->paginate(5);
        $bidang_kerjasama = $this->bidang_kerjasama;
        $jenis_kerjasama = $this->jenis_kerjasama;
        $status = $this->status;
        $list_bidang_kerjasama = $this->reformat_arr($bidang_kerjasama);
        $list_jenis_kerjasama = $this->reformat_arr($jenis_kerjasama);
        $list_status = $this->reformat_arr($status);
        return view('informasi-kerjasama-luar-origin.main', compact('data','bidang_kerjasama','jenis_kerjasama','status','list_bidang_kerjasama','list_jenis_kerjasama','list_status'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:2',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'terms' => 'required'
        ]);
        $user = User::create($attributes);
        auth()->login($user);

        return redirect('/dashboard');
    }
}
