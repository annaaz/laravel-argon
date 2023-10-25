@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'List Data Kerjasama Dalam Negri'])

    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="card mb-2" >
                <div class="card-header text-xs">
                    <h6>Filter</h6>
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
                                <option value="">All</option>
                                @for ($i = date('Y'); $i >= (date('Y') - 30); $i--)
                                    <option value="{{ $i }}" {{ isset($_GET['tahun_ttd']) && $_GET['tahun_ttd'] == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="col-md-1 pt-1">Tahun Berakhir</div>
                        <div class="col-md-2">
                            <select name="tahun_berakhir" class="form-control text-xs">
                                <option value="">All</option>
                                @for ($i = date('Y'); $i >= (date('Y') - 10); $i--)
                                    <option value="{{ $i }}" {{ isset($_GET['tahun_berakhir']) && $_GET['tahun_berakhir'] == $i ? 'selected' : '' }}>{{ $i }}</option>
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

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-3">
                                <table style="width:100%;border-collapse: collapse; border: none" cellspacing="5" cellpadding="5" style="width: 100%" class="align-items-center mb-0">
                                    <thead style="background-color:#f0f0f0;color:#666;border-bottom: 1px solid lightgrey;height: 80px">
                                    <tr>
                                        <th rowspan="2" class="text-uppercase  text-xxs text-center text-black">
                                            No</th>
                                        <th rowspan="2" class="text-uppercase text-xxs font-weight-bolder">
                                            Instansi</th>
                                        <th rowspan="2" class="text-uppercase text-xxs font-weight-bolder ps-2">
                                            Nomor Kerjasama</th>
                                        <th rowspan="2"
                                            class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Nama Kerjasama</th>
                                        <th rowspan="2"
                                            class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Mitra</th>
                                        <th rowspan="2"
                                            class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Bidang Fokus</th>
                                        <th class="text-uppercase text-xxs font-weight-bolder">
                                            Jenis Kerjasama</th>
                                        <th class="text-uppercase text-xxs font-weight-bolder">
                                            Tempat</th>
                                        <th class="text-uppercase text-xxs font-weight-bolder">
                                            Tahun TTD</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder">
                                            </th>
                                        <th rowspan="2"
                                            class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Action</th>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-xxs font-weight-bolder ">
                                            Status</th>
                                        <th class="text-uppercase text-xxs font-weight-bolder ">
                                            Tanggal</th>
                                        <th class="text-uppercase text-xxs font-weight-bolder ">
                                            Tahun Berakhir</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder ">
                                            File Dokumen</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-xs">
                                    @foreach($data as $key => $value)
                                        <tr style="border-bottom: 1px solid lightgrey">
                                            <td>{{$key+1}}</td>
                                            <td style="font-weight: 530">
                                                {{$value->instansi}}
                                            </td>
                                            <td>
                                               Pihak I : {{$value->no_kerjasama_pihak_pertama}}
                                                <br />
                                                Pihak II : {{$value->no_kerjasama_pihak_kedua}}
                                            </td>
                                            <td style="font-weight: 530">
                                                {{$value->nama_kerjasama}}
                                            </td>
                                            <td>
                                                {{$value->mitra}}
                                            </td>
                                            <td>
                                                {{$list_bidang_kerjasama[$value->bidang_kerjasama]}}
                                            </td>
                                            <td>
                                                {{$list_jenis_kerjasama[$value->jenis]}}
                                                <br />
                                                {{$list_status[$value->status]}}
                                            </td>
                                            <td>
                                                {{$value->tempat}}
                                                <hr class="horizontal dark">
                                                {{ \Carbon\Carbon::parse($value->tanggal)->format('d F Y') }}

                                            </td>
                                            <td>
                                                {{$value->tahun_ttd}}
                                                <hr class="horizontal dark">
                                                {{$value->tahun_berakhir}}

                                            </td>
                                            <td>
                                                @php
                                                    $filePath = $value->file; // Replace with the actual file path
                                                @endphp
                                                @if ($filePath && Storage::disk('public')->exists($filePath))
                                                    <a href="{{ asset('storage/'.$value->file) }}" style="font-weight: bold" target="_blank">
                                                        <i class="ni ni-folder-17 text-dark text-sm opacity-10"></i>
                                                        File</a>
                                                @else
                                                    <small>[ Tidak ada Dokumen ] </small>
                                                @endif
                                            </td>
                                            <td>
                                                <a style="color: red;font-weight: bold" href=" {{ route('kerjasama.delete', ['id' => $value->id]) }}" data-confirm-delete="true">Delete</a>
                                                <a style="color: darkgreen;font-weight: bold"href=" {{ route('kerjasama.editview', ['id' => Crypt::encrypt($value->id)]) }}">Edit</a>
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
    </div>

    <div class="container-fluid py-4">
        @include('layouts.footers.auth.footer')
    </div>
@endsection

<script>
    function resetSelects() {
        var selectElements = document.querySelectorAll('select'); // Get all <select> elements
        for (var i = 0; i < selectElements.length; i++) {
            selectElements[i].selectedIndex = 0; // Set the selected index to the first option (default value)
        }
    }
</script>

