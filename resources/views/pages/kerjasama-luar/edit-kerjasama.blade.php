@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Edit Data Kerjasama Luar Negri'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            @if(session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-8">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="card">
                            <form action="{{ route('kerjasama-luar-negri.edit', ['id' => $kerjasamaModel->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @csrf
                                <div class="card-header pb-0">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 font-bold">Edit Data Kerjasama Luar Negri </p>
                                        <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-uppercase text-sm">Detail Info Kerjasama Luar Negri </p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label"><span style="color: red">*Instansi</span></label>
                                                <input class="form-control" required type="text" name="instansi" required value="{{$kerjasamaModel->instansi}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label"><span style="color: red">*Nama Kerjasama</span></label>
                                                <textarea class="form-control" required rows="4" cols="50" required name="nama_kerjasama" >{{$kerjasamaModel->nama_kerjasama}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label"><span style="color: red">*Nomor Kerjasama Pihak Pertama</span></label>
                                                <input class="form-control" required type="text" name="no_kerjasama_pihak_pertama" required  value="{{$kerjasamaModel->no_kerjasama_pihak_pertama}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nomor Kerjasama Pihak Kedua</label>
                                                <input class="form-control" required type="text" name="no_kerjasama_pihak_kedua" value="{{$kerjasamaModel->no_kerjasama_pihak_pertama}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Mitra</label>
                                                <input class="form-control" type="text" name="mitra" value="{{$kerjasamaModel->mitra}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Bidang Kerjasama</label>
                                                <select class="form-control" name="bidang_kerjasama">
                                                    @foreach($bidang_kerjasama as $k=>$item)
                                                        <option
                                                            {{$kerjasamaModel->bidang_kerjasama ==$k ? 'selected':''}}
                                                            value="{{$k}}">{{$item}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">Detail Information</p>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Kategori</label>
                                                <select class="form-control" name="kategori">
                                                    <option value="LN">Luar Negeri</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Jenis</label>
                                                <select class="form-control" name="jenis">
                                                    @foreach($jenis_kerjasama as $k=>$item)
                                                        <option
                                                            {{$kerjasamaModel->jenis ==$k ? 'selected':''}}
                                                            value="{{$k}}">{{$item}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label"><span style="color: red">*Tempat<span</label>
                                                <input class="form-control" type="text" name="tempat" required value="{{$kerjasamaModel->tempat}}" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label"><span style="color: red">*Tanggal Kerjasama</span></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="date" name="tanggal" value="{{$kerjasamaModel->tanggal}}" id="example-date-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Status</label>
                                                <select class="form-control" name="status">
                                                    @foreach($status as $k=>$item)
                                                        <option
                                                            {{$kerjasamaModel->status ==$k ? 'selected':''}}
                                                            value="{{$k}}">{{$item}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label"><span style="color: red">*Tahun TTD</span></label>
                                                <select class="form-control" name="tahun_ttd">
                                                    @php
                                                        $currentYear = date('Y');
                                                    @endphp

                                                    @for ($year = $currentYear; $year >= $currentYear - 30; $year--)
                                                        <option
                                                            {{$kerjasamaModel->tahun_ttd==$year?'selected':''}}
                                                            value="{{ $year }}">{{ $year }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label"><span style="color: red">*Tahun Berakhir</span></label>
                                                <select class="form-control" name="tahun_berakhir">
                                                    @php
                                                        $currentYear = date('Y');
                                                    @endphp

                                                    @for ($year = $currentYear; $year >= $currentYear - 30; $year--)
                                                        <option
                                                            {{$kerjasamaModel->tahun_berakhir==$year?'selected':''}}
                                                            value="{{ $year }}">{{ $year }}</option>
                                                    @endfor
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">PRESS RELEASE</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Link</label>
                                                <input class="form-control" type="link" name="link" value="{{$kerjasamaModel->link}}">

                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">DOKUMEN / FILE</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">*pdf</label>
                                                <br />
                                                File Uploaded : <a href="{{ asset('storage/'.$kerjasamaModel->file) }}" style="font-weight: bold" target="_blank">
                                                    <i class="ni ni-folder-17 text-dark text-sm opacity-10"></i>
                                                    File url </a>
                                                <input class="form-control"  name="file" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card card-body px-0 pt-0 pb-2">
                        <img src="/img/mou.png" alt="Image placeholder">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        @include('layouts.footers.auth.footer')
    </div>
@endsection

