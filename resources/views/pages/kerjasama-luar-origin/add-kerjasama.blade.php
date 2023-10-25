@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="alert alert-light" role="alert">
                This feature is available in <strong>Argon Dashboard 2 Pro Laravel</strong>. Check it
                <strong>
                    <a href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">
                        here
                    </a>
                </strong>
            </div>
            @if(session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-8">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="card">
                            <form role="form" method="POST" action={{ route('kerjasama.add') }} enctype="multipart/form-data">
                                @csrf
                                <div class="card-header pb-0">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 font-bold">Add Data Kerjasama </p>
                                        <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-uppercase text-sm">Detail Info Kerjasama </p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Instansi</label>
                                                <input class="form-control" required type="text" name="instansi">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama Kerjasama</label>
                                                <textarea class="form-control" required rows="4" cols="50" name="nama_kerjasama" ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nomor Kerjasama</label>
                                                <input class="form-control" required type="text" name="no_kerjasama">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Bidang Kerjasama</label>
                                                <select class="form-control" name="bidang_kerjasama">
                                                    <option value="eg">Energi</option>
                                                    <option value="pp">Pangan dan Pertanian</option>
                                                    <option value="pd">Pendidikan</option>
                                                    <option value="ti">Teknologi Informasi dan Komunikasi</option>
                                                    <option value="tk">Teknologi Kesehatann dan Obat</option>
                                                    <option value="tm">Teknologi Material Maju</option>
                                                    <option value="tp">Teknologi Pertahanan dan Keamananan</option>
                                                    <option value="tt">Teknologi Transportasi</option>
                                                    <option value="ll">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Mitra</label>
                                                <input class="form-control" type="text" name="mitra">
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
                                                    <option selected value="LN">Luar Negeri</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Jenis</label>
                                                <select class="form-control" name="jenis">
                                                    <option value="pk">Payung Kerjasama</option>
                                                    <option value="pp">Perjanjian Pelaksana</option>
                                                    <option value="sj">Seluruh Jenis</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tempat</label>
                                                <input class="form-control" type="text" name="tempat" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal</label>
                                                <div class="form-group">
                                                    <input class="form-control" type="date" name="tanggal" value="2018-11-23" id="example-date-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Berlaku</label>
                                                <div class="form-group">
                                                    <input class="form-control" type="date" name="berlaku" value="2018-11-23" id="example-date-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="br">Baru</option>
                                                    <option value="lj">Lanjutan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal Berakhir</label>
                                                <div class="form-group">
                                                    <input class="form-control" type="date" name="tanggal_berakhir" value="2018-11-23" id="example-date-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">PRESS RELEASE</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Link</label>
                                                <input class="form-control" type="link" name="link">

                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">DOKUMEN / FILE</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">*pdf</label>
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

