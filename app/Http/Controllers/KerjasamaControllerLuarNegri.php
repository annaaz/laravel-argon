<?php

namespace App\Http\Controllers;

use App\Models\Kerjasama;
use App\Models\DataMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class KerjasamaControllerLuarNegri extends Controller
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
        if ($request->filled('tahun_ttd')) {
            $query->where('tahun_ttd', 'like', '%' . $request->input('tahun_ttd') . '%');
        }
        if ($request->filled('tahun_berakhir')) {
            $query->where('tahun_berakhir', 'like', '%' . $request->input('tahun_berakhir') . '%');
        }
        if ($request->filled('jenis')) {
            $query->where('jenis', 'like', '%' . $request->input('jenis') . '%');
        }
        if ($request->filled('status')) {
            $query->where('status', 'like', '%' . $request->input('status') . '%');
        }

        $data = $query->orderBy('id', 'desc')->paginate(5);
        $bidang_kerjasama = $this->bidang_kerjasama;
        $jenis_kerjasama = $this->jenis_kerjasama;
        $status = $this->status;
        $list_bidang_kerjasama = $this->reformat_arr($bidang_kerjasama);
        $list_jenis_kerjasama = $this->reformat_arr($jenis_kerjasama);
        $list_status = $this->reformat_arr($status);

        if(session('success')==='Kerjasama data has been saved.'){
            Alert::success('Data Added Succesfully ! ', 'Data Kerjasama Sukses Ditambahkan ');
        }

        if(session('success')==='Kerjasama data has been updated.'){
            Alert::info('Data Updated Succesfully ! ', 'Data Kerjasama Sukses Diubah ');
        }

        $title = 'Delete Data Kerjasama !';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('pages.kerjasama-luar.list-kerjasama',compact('data','bidang_kerjasama','jenis_kerjasama','status','list_bidang_kerjasama','list_jenis_kerjasama','list_status'));
    }
    public function addview()
    {
        $bidang_kerjasama = $this->bidang_kerjasama;
        $jenis_kerjasama = $this->jenis_kerjasama;
        $status = $this->status;

        $list_bidang_kerjasama = $this->reformat_arr($bidang_kerjasama);
        $list_jenis_kerjasama = $this->reformat_arr($jenis_kerjasama);
        $list_status = $this->reformat_arr($status);
        return view('pages.kerjasama-luar.add-kerjasama')
            ->with('bidang_kerjasama', $list_bidang_kerjasama)
            ->with('jenis_kerjasama', $list_jenis_kerjasama)
            ->with('status', $list_status);
    }

    public function add(Request $request)
    {
        // Validation passed, you can proceed with other actions
        Log::info('File upload process started.');
        // Handle file upload if needed
        if ($request->hasFile('file')) {
            try {
                $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
                $filePath = '/' . $request->file('file')->storeAs('uploads', $fileName, 'public');
                Log::info('File uploaded successfully.');
            } catch (\Exception $e) {
                Log::error('File upload failed: ' . $e->getMessage());
                $filePath = null; // Set file path to null if an error occurred
            }
        } else {
            Log::info('No file was uploaded.');
            $filePath = null; // Set file path to null if no file was uploaded
        }

        // Create a new Kerjasama model and fill it with form data
        $kerjasamaModel = new Kerjasama();
        $kerjasamaModel->file = $filePath;
        $kerjasamaModel->instansi = $request->input('instansi');
        $kerjasamaModel->nama_kerjasama = $request->input('nama_kerjasama');
        $kerjasamaModel->no_kerjasama_pihak_pertama = $request->input('no_kerjasama_pihak_pertama');
        $kerjasamaModel->no_kerjasama_pihak_kedua = $request->input('no_kerjasama_pihak_kedua');
        $kerjasamaModel->bidang_kerjasama = $request->input('bidang_kerjasama');
        $kerjasamaModel->mitra = $request->input('mitra');
        $kerjasamaModel->kategori = $request->input('kategori');
        $kerjasamaModel->jenis = $request->input('jenis');
        $kerjasamaModel->tempat = $request->input('tempat');
        $kerjasamaModel->tanggal = $request->input('tanggal');
        $kerjasamaModel->tahun_ttd = $request->input('tahun_ttd');
        $kerjasamaModel->tahun_berakhir = $request->input('tahun_berakhir');
        $kerjasamaModel->status = $request->input('status');
        $kerjasamaModel->link = $request->input('link');
        $kerjasamaModel->save();
        // Redirect to the list view upon successful data insertion
        return redirect()->route('kerjasama-luar-negri')
            ->with('success', 'Kerjasama data has been updated.')
            ->with('file', isset($fileName) ? $fileName : null);
    }
    public function delete($id){
        $kerjasamaModel = Kerjasama::find($id);
        if ($kerjasamaModel) {
            if ($kerjasamaModel->file && Storage::disk('public')->exists($kerjasamaModel->file)) {
                Storage::disk('public')->delete($kerjasamaModel->file);
                // The file has been deleted
            }
            $kerjasamaModel->delete();
            // Record with the specified ID has been deleted.
        }
        // Redirect to the list view upon successful data insertion
        return redirect()->route('kerjasama-luar-negri')
            ->with('success', 'Kerjasama data has been deleted.');
    }
    public function editview($id){
        $idx =         Crypt::decrypt($id);
        $kerjasamaModel = Kerjasama::find($idx);
        $bidang_kerjasama = $this->bidang_kerjasama;
        $jenis_kerjasama = $this->jenis_kerjasama;
        $status = $this->status;

        $list_bidang_kerjasama = $this->reformat_arr($bidang_kerjasama);
        $list_jenis_kerjasama = $this->reformat_arr($jenis_kerjasama);
        $list_status = $this->reformat_arr($status);

        return view('pages.kerjasama-luar.edit-kerjasama')
            ->with('kerjasamaModel', $kerjasamaModel)
            ->with('bidang_kerjasama', $list_bidang_kerjasama)
            ->with('jenis_kerjasama', $list_jenis_kerjasama)
            ->with('status', $list_status);
    }

    public function edit(Request $request, $id){

        // Retrieve the existing Kerjasama model by ID
        $kerjasamaModel = Kerjasama::find($id);

        if (!$kerjasamaModel) {
            // Handle the case where the record does not exist
            return redirect()->back()->with('error', 'Kerjasama record not found');
        }
        Log::info('File upload process started.');
        // Handle file upload if needed
        if ($request->hasFile('file')) {
            try {
                if ($kerjasamaModel->file!='' && Storage::disk('public')->exists($kerjasamaModel->file)) {
                    Storage::disk('public')->delete($kerjasamaModel->file);
                    // The file has been deleted
                }
                $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
                $filePath = '/' . $request->file('file')->storeAs('uploads', $fileName, 'public');
                Log::info('File uploaded successfully.');
            } catch (\Exception $e) {
                Log::error('File upload failed: ' . $e->getMessage());
                $filePath = null; // Set file path to null if an error occurred
            }
        } else {
            Log::info('No file was uploaded.');
            $filePath = null; // Set file path to null if no file was uploaded
        }
        // Update the attributes with new values
        $kerjasamaModel->instansi = $request->input('instansi');
        $kerjasamaModel->nama_kerjasama = $request->input('nama_kerjasama');
        $kerjasamaModel->no_kerjasama_pihak_pertama = $request->input('no_kerjasama_pihak_pertama');
        $kerjasamaModel->no_kerjasama_pihak_kedua = $request->input('no_kerjasama_pihak_kedua');
        $kerjasamaModel->bidang_kerjasama = $request->input('bidang_kerjasama');
        $kerjasamaModel->mitra = $request->input('mitra');
        $kerjasamaModel->kategori = $request->input('kategori');
        $kerjasamaModel->jenis = $request->input('jenis');
        $kerjasamaModel->tempat = $request->input('tempat');
        $kerjasamaModel->tanggal = $request->input('tanggal');
        $kerjasamaModel->tahun_ttd = $request->input('tahun_ttd');
        $kerjasamaModel->tahun_berakhir = $request->input('tahun_berakhir');
        $kerjasamaModel->status = $request->input('status');
        $kerjasamaModel->link = $request->input('link');
        if($filePath){
            $kerjasamaModel->file = $filePath;
        }
        // Save the updated model
        $kerjasamaModel->save();

        return redirect()->route('kerjasama-luar-negri')
            ->with('success', 'Kerjasama data has been updated.');

    }
}
