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
    <div style="display: flex;align-items: center;justify-content:center;margin-top:130px;gap:10px;">
        <div>
            <picture>
            <img src="{{ asset('img/mainRight.webp') }}" width="650" height="370" alt="Example Image" loading="lazy">
            </picture>
        </div>
        <div>
            <picture>
                <div style="width: 650px; height: 370px; overflow: hidden" >
                    <img src="{{ asset('img/main-unhan.webp') }}" width="650" height="420" alt="Example Image" loading="lazy">
                </div>
            </picture>
        </div>
    </div>
    <div style="display: flex;align-items: center;justify-content:center;margin-top:40px;gap:10px;padding: 20px">
        <div style="width: 80vw; display: flex;justify-content: center;flex-direction:column;align-items: center">
        <h4 style="font-weight: bold">SISMA</h4>
            <div style="width: 70vw;margin-top: 10px">
                <p style="font-size: 15px;text-align: center">
                    SISMA merupakan sistem informasi kerjasama, yang berfungsi sebagai pusat informasi, komunikasi,
                    dan proses pengusulan yang berkaitan dengan kerjasama baik itu kerjasama luar negeri maupun dalam negeri </p>
            </div>
        </div>
    </div>
    <div style="display: flex; justify-content: center;padding: 30px;gap:20px">
        <a class="nav-link me-2 font-weight-bold" style="color: white !important;" href="{{ route('informasi-statistik') }}">
        <div class="boxes" style="background-color:#990000; color:white !important;;width: 280px;min-height: 300px;display: flex; justify-content: center; flex-direction: column;align-items: center;text-align: center;padding: 10px;">
            <h5 style="color: white !important;">Statistic</h5>
            <div style="margin: 10px; background-color: white;padding: 10px;">
            <img src="{{ asset('img/stats.jpg') }}" width="180" alt="Example Image">
            </div>
            <h6 style="color: white !important;">Tampilan data statistik</h6><p>Di sini Anda dapat melihat daftar statistik dalam diagram batang/grafik</p>
        </div>
        </a>
        <a class="nav-link me-2 font-weight-bold" style="color: white !important;" href="{{ route('informasi-kerjasama') }}">
        <div class="boxes" style="background-color:#990000; color:white !important;;width: 280px;min-height: 300px;display: flex; justify-content: center; flex-direction: column;align-items: center;text-align: center;padding: 10px;">
            <h5 style="color: white !important;">Kerjasama Dalam Negri</h5>
            <div style="margin: 10px; background-color: white;padding: 10px;">
                <img src="{{ asset('img/kerjasama-dalam-negri.jpg') }}" width="180" alt="Example Image">
            </div>
            <h6 style="color: white !important;">List data kerjasama dalam negri</h6><p>Di sini Anda dapat melihat daftar data dalam list tabel </p>
        </div>
        </a>
        <a class="nav-link me-2 font-weight-bold" style="color: white !important;" href="{{ route('informasi-kerjasama-luar') }}">
        <div class="boxes"  style="background-color:#990000; color:white !important;;width: 280px;min-height: 300px;display: flex; justify-content: center; flex-direction: column;align-items: center;text-align: center;padding: 10px;">
            <h5 style="color: white !important;">Kerjasama Luar Negri</h5>
            <div style="margin: 10px; background-color: white;padding: 10px;">
                <img src="{{ asset('img/kerjasama-luar-negri.jpg') }}" width="180" alt="Example Image">
            </div>
            <h6 style="color: white !important;">List data kerjasama luar negri</h6><p>Di sini Anda dapat melihat daftar data dalam list tabel </p>
        </div>
        </a>

    </div>
    @include('layouts.footers.guest.footer')
@endsection
