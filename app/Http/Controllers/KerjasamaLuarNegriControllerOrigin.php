<?php

namespace App\Http\Controllers;

use App\Models\Kerjasama;
use App\Models\DataMaster;
use Illuminate\Http\Request;
use Validator;

class KerjasamaLuarNegriControllerOrigin extends Controller
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

    public function index(Request $request)
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

        return view('pages.kerjasama.list-kerjasama',compact('data','bidang_kerjasama','jenis_kerjasama','status','list_bidang_kerjasama','list_jenis_kerjasama','list_status'));
    }

    public function addview()
    {
        return view('pages.kerjasama-luar-origin.add-kerjasama');
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'instansi' => 'required|string',
            'nama_kerjasama' => 'required|string',
            'no_kerjasama' => 'required|string',
            'bidang_kerjasama' => 'required|string',
            'mitra' => 'nullable|string',
            'kategori' => 'required|string',
            'jenis' => 'required|string',
            'tempat' => 'required|string',
            'tanggal' => 'required|date',
            'berlaku' => 'required|date',
            'status' => 'required|string',
            'tanggal_berakhir' => 'required|date',
            'link' => 'nullable|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            // Validation failed, return with error messages
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please correct the errors in the form.');
        }

        // Validation passed, you can proceed with other actions
        // Handle file upload if needed
        if ($request->hasFile('file')) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = '/storage/' . $request->file('file')->storeAs('uploads', $fileName, 'public');
        } else {
            $filePath = null; // Set file path to null if no file was uploaded
        }

        // Create a new Kerjasama model and fill it with form data
        $kerjasamaModel = new Kerjasama();
        $kerjasamaModel->file = $filePath;
        $kerjasamaModel->instansi = $request->input('instansi');
        $kerjasamaModel->nama_kerjasama = $request->input('nama_kerjasama');
        $kerjasamaModel->no_kerjasama = $request->input('no_kerjasama');
        $kerjasamaModel->bidang_kerjasama = $request->input('bidang_kerjasama');
        $kerjasamaModel->mitra = $request->input('mitra');
        $kerjasamaModel->kategori = $request->input('kategori');
        $kerjasamaModel->jenis = $request->input('jenis');
        $kerjasamaModel->tempat = $request->input('tempat');
        $kerjasamaModel->tanggal = $request->input('tanggal');
        $kerjasamaModel->berlaku = $request->input('berlaku');
        $kerjasamaModel->status = $request->input('status');
        $kerjasamaModel->tanggal_berakhir = $request->input('tanggal_berakhir');
        $kerjasamaModel->link = $request->input('link');

        $kerjasamaModel->save();

        // Redirect to the list view upon successful data insertion
        return redirect()->route('kerjasama')
            ->with('success', 'Kerjasama data has been saved.')
            ->with('file', isset($fileName) ? $fileName : null);
    }

}
