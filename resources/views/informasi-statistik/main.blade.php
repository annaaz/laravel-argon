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
{{--        <div style="width: 80vw; display: flex;justify-content: center;flex-direction:column;align-items: center">--}}
{{--        <h4 style="font-weight: bold">INFORMASI KERJASAMA</h4>--}}
{{--            <div style="width: 70vw;margin-top: 10px">--}}
{{--                <p style="font-size: 15px;text-align: center">--}}
{{--                    SISMA merupakan sistem informasi kerjasama, yang berfungsi sebagai pusat informasi, komunikasi,--}}
{{--                    dan proses pengusulan yang berkaitan dengan kerjasama baik itu kerjasama luar negeri maupun dalam negeri </p>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
{{--    <div style="display: flex; justify-content: center;padding: 30px;gap:20px">--}}
{{--        <a class="nav-link me-2 font-weight-bold" style="color: white !important;" href="{{ route('informasi-statistik') }}">--}}
{{--            <div class="boxes" style="background-color:#8a8a97; color:white !important;width: 280px;min-height: 300px;display: flex; justify-content: center; flex-direction: column;align-items: center;text-align: center;padding: 10px;cursor: pointer">--}}
{{--                <h5 style="color: white !important;">Statistic</h5>--}}
{{--                <div style="margin: 10px; background-color: white;padding: 10px;">--}}
{{--                    <img src="{{ asset('img/stats.jpg') }}" width="180" alt="Example Image">--}}
{{--                </div>--}}
{{--                <h6 style="color: white !important;">Tampilan data statistik</h6><p>Di sini Anda dapat melihat daftar statistik dalam diagram batang/grafik</p>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--        <a class="nav-link me-2 font-weight-bold" style="color: white !important;" href="{{ route('informasi-kerjasama') }}">--}}
{{--            <div class="boxes" style="background-color:#990000; color:white !important;;width: 280px;min-height: 300px;display: flex; justify-content: center; flex-direction: column;align-items: center;text-align: center;padding: 10px;cursor: pointer">--}}
{{--                <h5 style="color: white !important;">Kerjasama Dalam Negri</h5>--}}
{{--                <div style="margin: 10px; background-color: white;padding: 10px;">--}}
{{--                    <img src="{{ asset('img/kerjasama-dalam-negri.jpg') }}" width="180" alt="Example Image">--}}
{{--                </div>--}}
{{--                <h6 style="color: white !important;">List data kerjasama dalam negri</h6><p>Di sini Anda dapat melihat daftar data dalam list tabel </p>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--        <a class="nav-link me-2 font-weight-bold" style="color: white !important;" href="{{ route('informasi-kerjasama-luar') }}">--}}
{{--            <div class="boxes" style="background-color:#990000; color:white !important;;width: 280px;min-height: 300px;display: flex; justify-content: center; flex-direction: column;align-items: center;text-align: center;padding: 10px;cursor: pointer">--}}
{{--                <h5 style="color: white !important;">Kerjasama Luar Negri</h5>--}}
{{--                <div style="margin: 10px; background-color: white;padding: 10px;">--}}
{{--                    <img src="{{ asset('img/kerjasama-luar-negri.jpg') }}" width="180" alt="Example Image">--}}
{{--                </div>--}}
{{--                <h6 style="color: white !important;">List data kerjasama luar negri</h6><p>Di sini Anda dapat melihat daftar data dalam list tabel </p>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--    </div>--}}
    <div style="padding: 10px; display: flex;flex-direction: column;align-items: center; min-width: 80vw;">
        <div class="container-fluid py-1" style="max-width: 80vw">
            <div style="text-align: center">
                <h4 style="font-weight: bold">INFORMASI KERJASAMA DALAM NEGRI</h4>
            </div>
            <hr class="horizontal dark">
            <div class="row">
                <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                    <div class="card mb-2 text-center p-2">
                        <p class="text-sm font-weight-bolder">
                              DATA KERJASAMA LUAR-DALAM NEGERI
                        </p>
                    </div>
                    <div class="row">
                        @foreach($data_kategori as $kategori => $categoryData)
                            <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                                        {{ $kategori=='LN' ? 'LUAR' : 'DALAM' }} NEGERI </p>
                                                    <h3 class="font-weight-bolder">
                                                        {{$categoryData['total']}}
                                                    </h3>
                                                    <p class="mb-0">
                                                        <span class="text-success text-sm font-weight-bolder">+10</span>
                                                        Bulan Agustus
                                                    </p>
                                                </div>
                                                <br />
                                            </div>
                                            <div class="col-4 text-end">
                                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
                <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <canvas id="chart-line-top" class="chart-canvas" height="120"></canvas>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-lg-12 mb-lg-0 mb-4">
                    <div class="card z-index-2 h-100">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h6 class="text-capitalize">KERJASAMA UNHAN DENGAN LEMBAGA DALAM-LUAR NEGRI</h6>
                            <p class="text-sm mb-0">
                                <i class="fa fa-arrow-up text-success"></i>
                                <span class="font-weight-bold">4% more</span> in 2021
                            </p>
                        </div>
                        <div class="card-body p-3">
                            <div class="chart">
                                <canvas id="chart-line" class="chart-canvas" height="120"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                {{--            <div class="col-lg-5">--}}
                {{--                <div class="card">--}}
                {{--                    <div class="card-header pb-0 p-3">--}}
                {{--                        <h6 class="mb-0">KERJASAMA BERDASARKAN BIDANG FOKUS</h6>--}}
                {{--                    </div>--}}
                {{--                    <div class="card-body p-3">--}}
                {{--                        <ul class="list-group">--}}
                {{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">--}}
                {{--                                        <i class="ni ni-mobile-button text-white opacity-10"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="d-flex flex-column">--}}
                {{--                                        <h6 class="mb-1 text-dark text-sm">Energi</h6>--}}
                {{--                                        <span class="text-xs">250 in stock, <span class="font-weight-bold">346+--}}
                {{--                                                sold</span></span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="d-flex">--}}
                {{--                                    <button--}}
                {{--                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i--}}
                {{--                                            class="ni ni-bold-right" aria-hidden="true"></i></button>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">--}}
                {{--                                        <i class="ni ni-tag text-white opacity-10"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="d-flex flex-column">--}}
                {{--                                        <h6 class="mb-1 text-dark text-sm">Pangan dan Pertanian</h6>--}}
                {{--                                        <span class="text-xs">123 closed, <span class="font-weight-bold">15--}}
                {{--                                                open</span></span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="d-flex">--}}
                {{--                                    <button--}}
                {{--                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i--}}
                {{--                                            class="ni ni-bold-right" aria-hidden="true"></i></button>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">--}}
                {{--                                        <i class="ni ni-box-2 text-white opacity-10"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="d-flex flex-column">--}}
                {{--                                        <h6 class="mb-1 text-dark text-sm">Pendidikan</h6>--}}
                {{--                                        <span class="text-xs">1 is active, <span class="font-weight-bold">40--}}
                {{--                                                closed</span></span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="d-flex">--}}
                {{--                                    <button--}}
                {{--                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i--}}
                {{--                                            class="ni ni-bold-right" aria-hidden="true"></i></button>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">--}}
                {{--                                        <i class="ni ni-satisfied text-white opacity-10"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="d-flex flex-column">--}}
                {{--                                        <h6 class="mb-1 text-dark text-sm">Teknologi Informasi</h6>--}}
                {{--                                        <span class="text-xs font-weight-bold">+ 430</span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="d-flex">--}}
                {{--                                    <button--}}
                {{--                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i--}}
                {{--                                            class="ni ni-bold-right" aria-hidden="true"></i></button>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">--}}
                {{--                                        <i class="ni ni-satisfied text-white opacity-10"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="d-flex flex-column">--}}
                {{--                                        <h6 class="mb-1 text-dark text-sm">Kesehatan dan Obat </h6>--}}
                {{--                                        <span class="text-xs font-weight-bold">+ 430</span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="d-flex">--}}
                {{--                                    <button--}}
                {{--                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i--}}
                {{--                                            class="ni ni-bold-right" aria-hidden="true"></i></button>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">--}}
                {{--                                        <i class="ni ni-satisfied text-white opacity-10"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="d-flex flex-column">--}}
                {{--                                        <h6 class="mb-1 text-dark text-sm">Teknologi Kesehatan dan Obat </h6>--}}
                {{--                                        <span class="text-xs font-weight-bold">+ 430</span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="d-flex">--}}
                {{--                                    <button--}}
                {{--                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i--}}
                {{--                                            class="ni ni-bold-right" aria-hidden="true"></i></button>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">--}}
                {{--                                        <i class="ni ni-satisfied text-white opacity-10"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="d-flex flex-column">--}}
                {{--                                        <h6 class="mb-1 text-dark text-sm">Teknologi Material Maju </h6>--}}
                {{--                                        <span class="text-xs font-weight-bold">+ 430</span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="d-flex">--}}
                {{--                                    <button--}}
                {{--                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i--}}
                {{--                                            class="ni ni-bold-right" aria-hidden="true"></i></button>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">--}}
                {{--                                        <i class="ni ni-satisfied text-white opacity-10"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="d-flex flex-column">--}}
                {{--                                        <h6 class="mb-1 text-dark text-sm">Teknologi Pertahanan </h6>--}}
                {{--                                        <span class="text-xs font-weight-bold">+ 430</span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="d-flex">--}}
                {{--                                    <button--}}
                {{--                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i--}}
                {{--                                            class="ni ni-bold-right" aria-hidden="true"></i></button>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">--}}
                {{--                                        <i class="ni ni-satisfied text-white opacity-10"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="d-flex flex-column">--}}
                {{--                                        <h6 class="mb-1 text-dark text-sm">Teknologi Transportasi </h6>--}}
                {{--                                        <span class="text-xs font-weight-bold">+ 430</span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="d-flex">--}}
                {{--                                    <button--}}
                {{--                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i--}}
                {{--                                            class="ni ni-bold-right" aria-hidden="true"></i></button>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="card mt-3">--}}
                {{--                    <div class="card-header pb-0 p-3">--}}
                {{--                        <h6 class="mb-0">Categories</h6>--}}
                {{--                    </div>--}}
                {{--                    <div class="card-body p-3">--}}
                {{--                        <ul class="list-group">--}}
                {{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">--}}
                {{--                                        <i class="ni ni-mobile-button text-white opacity-10"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="d-flex flex-column">--}}
                {{--                                        <h6 class="mb-1 text-dark text-sm">Devices</h6>--}}
                {{--                                        <span class="text-xs">250 in stock, <span class="font-weight-bold">346+--}}
                {{--                                                sold</span></span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="d-flex">--}}
                {{--                                    <button--}}
                {{--                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i--}}
                {{--                                            class="ni ni-bold-right" aria-hidden="true"></i></button>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">--}}
                {{--                                        <i class="ni ni-tag text-white opacity-10"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="d-flex flex-column">--}}
                {{--                                        <h6 class="mb-1 text-dark text-sm">Tickets</h6>--}}
                {{--                                        <span class="text-xs">123 closed, <span class="font-weight-bold">15--}}
                {{--                                                open</span></span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="d-flex">--}}
                {{--                                    <button--}}
                {{--                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i--}}
                {{--                                            class="ni ni-bold-right" aria-hidden="true"></i></button>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">--}}
                {{--                                        <i class="ni ni-box-2 text-white opacity-10"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="d-flex flex-column">--}}
                {{--                                        <h6 class="mb-1 text-dark text-sm">Error logs</h6>--}}
                {{--                                        <span class="text-xs">1 is active, <span class="font-weight-bold">40--}}
                {{--                                                closed</span></span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="d-flex">--}}
                {{--                                    <button--}}
                {{--                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i--}}
                {{--                                            class="ni ni-bold-right" aria-hidden="true"></i></button>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">--}}
                {{--                                        <i class="ni ni-satisfied text-white opacity-10"></i>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="d-flex flex-column">--}}
                {{--                                        <h6 class="mb-1 text-dark text-sm">Happy users</h6>--}}
                {{--                                        <span class="text-xs font-weight-bold">+ 430</span>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="d-flex">--}}
                {{--                                    <button--}}
                {{--                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i--}}
                {{--                                            class="ni ni-bold-right" aria-hidden="true"></i></button>--}}
                {{--                                </div>--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>
            {{--        <div class="row mt-4">--}}
            {{--            <div class="col-lg-12 mb-lg-0 mb-4">--}}
            {{--                <div class="card ">--}}
            {{--                    <div class="card-header pb-0 p-3">--}}
            {{--                        <div class="d-flex justify-content-between">--}}
            {{--                            <h6 class="mb-2">Sales by Country</h6>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="table-responsive">--}}
            {{--                        <table class="table align-items-center ">--}}
            {{--                            <tbody>--}}
            {{--                                <tr>--}}
            {{--                                    <td class="w-30">--}}
            {{--                                        <div class="d-flex px-2 py-1 align-items-center">--}}
            {{--                                            <div>--}}
            {{--                                                <img src="./img/icons/flags/US.png" alt="Country flag">--}}
            {{--                                            </div>--}}
            {{--                                            <div class="ms-4">--}}
            {{--                                                <p class="text-xs font-weight-bold mb-0">Country:</p>--}}
            {{--                                                <h6 class="text-sm mb-0">United States</h6>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td>--}}
            {{--                                        <div class="text-center">--}}
            {{--                                            <p class="text-xs font-weight-bold mb-0">Sales:</p>--}}
            {{--                                            <h6 class="text-sm mb-0">2500</h6>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td>--}}
            {{--                                        <div class="text-center">--}}
            {{--                                            <p class="text-xs font-weight-bold mb-0">Value:</p>--}}
            {{--                                            <h6 class="text-sm mb-0">$230,900</h6>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td class="align-middle text-sm">--}}
            {{--                                        <div class="col text-center">--}}
            {{--                                            <p class="text-xs font-weight-bold mb-0">Bounce:</p>--}}
            {{--                                            <h6 class="text-sm mb-0">29.9%</h6>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                </tr>--}}
            {{--                                <tr>--}}
            {{--                                    <td class="w-30">--}}
            {{--                                        <div class="d-flex px-2 py-1 align-items-center">--}}
            {{--                                            <div>--}}
            {{--                                                <img src="./img/icons/flags/DE.png" alt="Country flag">--}}
            {{--                                            </div>--}}
            {{--                                            <div class="ms-4">--}}
            {{--                                                <p class="text-xs font-weight-bold mb-0">Country:</p>--}}
            {{--                                                <h6 class="text-sm mb-0">Germany</h6>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td>--}}
            {{--                                        <div class="text-center">--}}
            {{--                                            <p class="text-xs font-weight-bold mb-0">Sales:</p>--}}
            {{--                                            <h6 class="text-sm mb-0">3.900</h6>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td>--}}
            {{--                                        <div class="text-center">--}}
            {{--                                            <p class="text-xs font-weight-bold mb-0">Value:</p>--}}
            {{--                                            <h6 class="text-sm mb-0">$440,000</h6>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td class="align-middle text-sm">--}}
            {{--                                        <div class="col text-center">--}}
            {{--                                            <p class="text-xs font-weight-bold mb-0">Bounce:</p>--}}
            {{--                                            <h6 class="text-sm mb-0">40.22%</h6>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                </tr>--}}
            {{--                                <tr>--}}
            {{--                                    <td class="w-30">--}}
            {{--                                        <div class="d-flex px-2 py-1 align-items-center">--}}
            {{--                                            <div>--}}
            {{--                                                <img src="./img/icons/flags/GB.png" alt="Country flag">--}}
            {{--                                            </div>--}}
            {{--                                            <div class="ms-4">--}}
            {{--                                                <p class="text-xs font-weight-bold mb-0">Country:</p>--}}
            {{--                                                <h6 class="text-sm mb-0">Great Britain</h6>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td>--}}
            {{--                                        <div class="text-center">--}}
            {{--                                            <p class="text-xs font-weight-bold mb-0">Sales:</p>--}}
            {{--                                            <h6 class="text-sm mb-0">1.400</h6>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td>--}}
            {{--                                        <div class="text-center">--}}
            {{--                                            <p class="text-xs font-weight-bold mb-0">Value:</p>--}}
            {{--                                            <h6 class="text-sm mb-0">$190,700</h6>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td class="align-middle text-sm">--}}
            {{--                                        <div class="col text-center">--}}
            {{--                                            <p class="text-xs font-weight-bold mb-0">Bounce:</p>--}}
            {{--                                            <h6 class="text-sm mb-0">23.44%</h6>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                </tr>--}}
            {{--                                <tr>--}}
            {{--                                    <td class="w-30">--}}
            {{--                                        <div class="d-flex px-2 py-1 align-items-center">--}}
            {{--                                            <div>--}}
            {{--                                                <img src="./img/icons/flags/BR.png" alt="Country flag">--}}
            {{--                                            </div>--}}
            {{--                                            <div class="ms-4">--}}
            {{--                                                <p class="text-xs font-weight-bold mb-0">Country:</p>--}}
            {{--                                                <h6 class="text-sm mb-0">Brasil</h6>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td>--}}
            {{--                                        <div class="text-center">--}}
            {{--                                            <p class="text-xs font-weight-bold mb-0">Sales:</p>--}}
            {{--                                            <h6 class="text-sm mb-0">562</h6>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td>--}}
            {{--                                        <div class="text-center">--}}
            {{--                                            <p class="text-xs font-weight-bold mb-0">Value:</p>--}}
            {{--                                            <h6 class="text-sm mb-0">$143,960</h6>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                    <td class="align-middle text-sm">--}}
            {{--                                        <div class="col text-center">--}}
            {{--                                            <p class="text-xs font-weight-bold mb-0">Bounce:</p>--}}
            {{--                                            <h6 class="text-sm mb-0">32.14%</h6>--}}
            {{--                                        </div>--}}
            {{--                                    </td>--}}
            {{--                                </tr>--}}
            {{--                            </tbody>--}}
            {{--                        </table>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--        </div>--}}
            @include('layouts.footers.auth.footer')
        </div>
    </div>

    @include('layouts.footers.guest.footer')
@endsection

@push('js')
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
        const labelstop = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        const datatop = {
            labels: labelstop,
            datasets: [
                {
                    label: 'Kerjasama Dalam Negri',
                    data: [{{$implode_arr_allmonth_DN}}],
                    borderColor:'red',
                    backgroundColor:'red',
                },
                {
                    label: 'Kerjasama Luar Negri',
                    data: [{{$implode_arr_allmonth_LN}}],
                    borderColor: '#3080d0',
                    backgroundColor: '#3080d0',
                }
            ]
        };
        const ctxtop = document.getElementById('chart-line-top');
        new Chart(ctxtop, {
            type: 'line',
            data: datatop,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: false,
                        text: 'Chart.js Line Chart'
                    }
                }
            },
        });
    </script>
    <script>
        const labels = [{!! $label_mitra !!}]
        const data = {
            labels: labels,
            datasets: [
                {
                    label: 'Kerjasama Baru',
                    data: [{{$kerjasama_data_baru}}],
                    borderColor:'#d13030',
                    backgroundColor:'#d13030',
                },
                {
                    label: 'Kerjasama Lanjutan',
                    data: [{{$kerjasama_data_lama}}],
                    borderColor: '#3080d0',
                    backgroundColor: '#3080d0',
                }
            ]
        };
        const ctx = document.getElementById('chart-line');
        new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                indexAxis: 'y',
                // Elements options apply to all of the options unless overridden in a dataset
                // In this case, we are setting the border of each horizontal bar to be 2px wide
                elements: {
                    bar: {
                        borderWidth: 2,
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right',
                    },
                    title: {
                        display: true,
                        text: 'Kerjasama UNHAN Dengan Lembaga Lain'
                    }
                }
            },
        });
    </script>

@endpush
