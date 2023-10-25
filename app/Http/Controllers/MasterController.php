<?php

namespace App\Http\Controllers;

use App\Models\DataMaster;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    //
    public function index()
    {
        $master = DataMaster::all();
        return view('pages.data-master', compact('master'));
    }
}
