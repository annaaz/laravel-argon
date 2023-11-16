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
        <h3 style="font-weight: bold">PROSEDUR</h3>
    </div>
    <div style="display: flex;align-items: center;justify-content:center;margin-top:40px;gap:10px;padding: 30px;margin-bottom: 50px;">
        <div style="display: flex;justify-content: center;flex-direction:column;align-items: center">
            <img src="{{ asset('img/SOP.png') }}" width="1150" height="720" alt="Example Image" loading="lazy" >
        </div>
    </div>

    @include('layouts.footers.guest.footer')
@endsection
