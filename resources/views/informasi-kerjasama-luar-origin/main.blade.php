@extends('layouts.app')

@section('content')
    @include('layouts.navbars.guest.navbar')
    <style>
        .boxes:hover {
            box-shadow: 1px 5px 12px 2px rgba(232,120,120,0.75);
            -webkit-box-shadow: 1px 5px 12px 2px rgba(232,120,120,0.75);
            -moz-box-shadow: 1px 5px 12px 2px rgba(232,120,120,0.75);
        }
    </style>
    <div style="display: flex;align-items: center;justify-content:center;margin-top:140px;gap:10px;padding: 20px">
        <div style="width: 80vw; display: flex;justify-content: center;flex-direction:column;align-items: center">
        <h4 style="font-weight: bold">INFORMASI KERJASAMA</h4>
            <div style="width: 70vw;margin-top: 10px">
                <p style="font-size: 15px;text-align: center">
                    SISMAHAN merupakan sistem informasi kerjasama, yang berfungsi sebagai pusat informasi, komunikasi,
                    dan proses pengusulan yang berkaitan dengan kerjasama baik itu kerjasama luar negeri maupun dalam negeri  </p>
            </div>
        </div>
    </div>

    <div style="display: flex; justify-content: center;padding: 30px;gap:20px">
        <a class="nav-link me-2 font-weight-bold" style="color: white !important;" href="{{ route('informasi-statistik') }}">
            <div class="boxes" style="background-color:#990000; color:white !important;width: 280px;min-height: 300px;display: flex; justify-content: center; flex-direction: column;align-items: center;text-align: center;padding: 10px;cursor: pointer">
                <h5 style="color: white !important;">Statistic</h5>
                <div style="margin: 10px; background-color: white;padding: 10px;">
                    <img src="{{ asset('img/stats.jpg') }}" width="180" alt="Example Image">
                </div>
                <h6 style="color: white !important;">Tampilan data statistik</h6><p>Di sini Anda dapat melihat daftar statistik dalam diagram batang/grafik</p>
            </div>
        </a>
        <a class="nav-link me-2 font-weight-bold" style="color: white !important;" href="{{ route('informasi-kerjasama') }}">
            <div class="boxes" style="background-color:#990000; color:white !important;;width: 280px;min-height: 300px;display: flex; justify-content: center; flex-direction: column;align-items: center;text-align: center;padding: 10px;cursor: pointer">
                <h5 style="color: white !important;">Kerjasama Dalam Negri</h5>
                <div style="margin: 10px; background-color: white;padding: 10px;">
                    <img src="{{ asset('img/kerjasama-dalam-negri.jpg') }}" width="180" alt="Example Image">
                </div>
                <h6 style="color: white !important;">List data kerjasama dalam negri</h6><p>Di sini Anda dapat melihat daftar data dalam list tabel </p>
            </div>
        </a>
        <a class="nav-link me-2 font-weight-bold" style="color: white !important;" href="{{ route('informasi-kerjasama-luar') }}">
            <div class="boxes" style="background-color:#8a8a97; color:white !important;;width: 280px;min-height: 300px;display: flex; justify-content: center; flex-direction: column;align-items: center;text-align: center;padding: 10px;cursor: pointer">
                <h5 style="color: white !important;">Kerjasama Luar Negri</h5>
                <div style="margin: 10px; background-color: white;padding: 10px;">
                    <img src="{{ asset('img/kerjasama-luar-negri.jpg') }}" width="180" alt="Example Image">
                </div>
                <h6 style="color: white !important;">List data kerjasama luar negri</h6><p>Di sini Anda dapat melihat daftar data dalam list tabel </p>
            </div>
        </a>
    </div>
    <div style="padding: 10px; display: flex;flex-direction: column;align-items: center; min-width: 80vw;">
            <div class="card-header text-xs" style="min-width: 78vw">
                    <div style="text-align: center">
                        <h4 style="font-weight: bold">INFORMASI KERJASAMA LUAR  NEGRI</h4>
                    </div>
                <hr class="horizontal dark">
                <form method="GET" action="{{route('kerjasama')}}">
                    <div class="row mb-1">
                        <div class="col-md-1 pt-2">Instansi</div>
                        <div class="col-md-3">
                            <input type="text" class="form-control text-xs" name="instansi" value="{{ isset($_GET['instansi']) ? $_GET['instansi'] : '' }}" >
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-1 pt-2">Jenis</div>
                        <div class="col-md-4">
                            <select name="jenis" class="form-control text-xs">
                                <option value="">All</option>
                                @foreach($jenis_kerjasama as $item)
                                    <option value="{{ $item->kode }}" {{ isset($_GET['jenis']) && $_GET['jenis'] == $item->kode ? 'selected' : '' }}>{{ $item->value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-1 pt-1">Bidang Fokus</div>
                        <div class="col-md-5">
                            <select name="bidang_fokus" class="form-control text-xs">
                                <option value="">All</option>
                                @foreach($bidang_kerjasama as $item)
                                    <option value="{{ $item->kode }}" {{ isset($_GET['bidang_fokus']) && $_GET['bidang_fokus'] == $item->kode ? 'selected' : '' }}>
                                        {{ $item->value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-1 pt-2">Status</div>
                        <div class="col-md-2">
                            <select name="status" class="form-control text-xs">
                                <option value="">All</option>
                                @foreach($status as $item)
                                    <option value="{{ $item->kode }}" {{ isset($_GET['status']) && $_GET['status'] == $item->kode ? 'selected' : '' }}>{{ $item->value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-1 pt-2">Tahun TTD</div>
                        <div class="col-md-2">
                            <select name="tahun_ttd" class="form-control text-xs">
                                @for ($i = date('Y'); $i >= (date('Y') - 10); $i--)
                                    <option value="{{ $i }}" {{ isset($_GET['tahun_ttd']) && $_GET['tahun_ttd'] == $item->kode ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-md-1 pt-1">Tahun Berakhir</div>
                        <div class="col-md-2">
                            <select name="tahun_berakhir" class="form-control text-xs">
                                @for ($i = date('Y'); $i >= (date('Y') - 10); $i--)
                                    <option value="{{ $i }}" {{ isset($_GET['tahun_berakhir']) && $_GET['tahun_berakhir'] == $item->kode ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <div class="row mt-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <button type="submit">Filter</button>
                            <button onclick="resetSelects()" type="button">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
    <div style="padding: 10px; display: flex;flex-direction: column;align-items: center; min-width: 90vw;">
        <div class="row" style=" max-width: 90vw" >
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-3">
                        <table style=";border-collapse: collapse; border: none" cellspacing="5" cellpadding="5" style="width: 100%" class="align-items-center mb-0">
                            <thead style="background-color:#f2f2f2;border-bottom: 1px solid lightgrey">
                            <tr>
                                <th rowspan="2" class="text-uppercase  text-secondary text-xxs text-center">
                                    No</th>
                                <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder">
                                    Instansi</th>
                                <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">
                                    Nomor Kerjasama</th>
                                <th rowspan="2"
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                    Nama Kerjasama</th>
                                <th rowspan="2"
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                    Mitra</th>
                                <th rowspan="2"
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                    Bidang Fokus</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder">
                                    Kategori</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder">
                                    Tempat</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder">
                                    Berlaku</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                    Tanggal Berlaku</th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder ">
                                    Jenis</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder ">
                                    Tanggal</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder ">
                                    Status</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">
                                    Press Release</th>
                            </tr>
                            </thead>
                            <tbody class="text-xs">
                            @foreach($data as $key => $value)
                                <tr style="border-bottom: 1px solid lightgrey">
                                    <td>{{$key+1}}</td>
                                    <td>
                                        {{$value->instansi}}
                                    </td>
                                    <td>
                                        {{$value->no_kerjasama}}
                                    </td>
                                    <td>
                                        {{$value->nama_kerjasama}}
                                    </td>
                                    <td>
                                        {{$value->mitra}}
                                    </td>
                                    <td>
                                        {{$list_bidang_kerjasama[$value->bidang_kerjasama]}}
                                    </td>
                                    <td>
                                        {{$value->kategori}}
                                        <hr class="horizontal dark">
                                        {{$list_jenis_kerjasama[$value->jenis]}}
                                    </td>
                                    <td>
                                        {{$value->tempat}}
                                        <hr class="horizontal dark">
                                        {{ \Carbon\Carbon::parse($value->tanggal)->format('d F Y') }}
                                    </td>
                                    <td>
                                        {{$list_status[$value->status]}}
                                        <hr class="horizontal dark">
                                        {{ \Carbon\Carbon::parse($value->berlaku)->format('d F Y') }}
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{$value->link}}" target="_blank">Link</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br />

                    </div>
                </div>
                <div class="card-header pb-0">
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
    </div>

    @include('layouts.footers.guest.footer')
@endsection

