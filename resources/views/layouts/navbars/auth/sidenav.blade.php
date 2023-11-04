
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
                <a  class="navbar-brand m-0" href="/docs/bootstrap/overview/argon-dashboard/index.html" target="_blank"
{{--        <a class="navbar-brand m-0" href="{{ route('dashboard') }}"--}}
            target="_blank">
            <img src=" {{ asset('img/unhan-sm.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span style="color:rgb(153, 0, 0);font-size: 12px; font-weight: bold">[ SISMA ]</span>
            <span class="ms-1 font-weight-bold">Dashboard Panel </span>
        </a>
    </div>

    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item d-flex align-items-center">
                <div class="ps-4">
                    <i class="ni ni-tv-2"></i>
                </div>
                <a class="{{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">DASHBOARD </h6>
                </a>
            </li>
            <li class="nav-item mt-3 d-flex align-items-center">
                <div class="ps-4 ">
                    <i class="fab fa-xing-square"></i>
                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">KERJASAMA DALAM NEGRI </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'kerjasama.addview' ? 'active' : '' }}" href="{{ route('kerjasama.addview') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-folder-17 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Add Data</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'kerjasama' ? 'active' : '' }}" href="{{ route('kerjasama') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">List Data</span>
                </a>
            </li>
            <li class="nav-item mt-3 d-flex align-items-center">
                <div class="ps-4 ">
                    <i class="ni ni-ruler-pencil"></i>
                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">KERJASAMA LUAR NEGRI </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'kerjasama-luar-negri.addview' ? 'active' : '' }}" href="{{ route('kerjasama-luar-negri.addview') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-folder-17 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Add Data</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'kerjasama-luar-negri' ? 'active' : '' }}" href="{{ route('kerjasama-luar-negri') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">List Data</span>
                </a>
            </li>
            <li class="nav-item mt-3 d-flex align-items-center">
                <div class="ps-4 ">
                    <i class="ni ni-ungroup"></i>
                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">USER MANAGEMENT </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link "{{ Route::currentRouteName() == 'user' ? 'active' : '' }}" href="{{ route('user') }}"">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">List User</span>
                </a>
            </li>
            <li class="nav-item mt-3 d-flex align-items-center">
                <div class="ps-4 ">
                    <i class="ni ni-ungroup"></i>
                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">DATA MASTER </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'master' ? 'active' : '' }}" href="{{ route('master') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-button-pause text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">List Master</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
{{--        <div class="card card-plain shadow-none" id="sidenavCard">--}}
{{--            <img class="w-50 mx-auto" src="/img/illustrations/icon-documentation-warning.svg"--}}
{{--                alt="sidebar_illustration">--}}
{{--            <div class="card-body text-center p-3 w-100 pt-0">--}}
{{--                <div class="docs-info">--}}
{{--                    <h6 class="mb-0">Need help?</h6>--}}
{{--                    <p class="text-xs font-weight-bold mb-0">Please check our docs</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <a href="/docs/bootstrap/overview/argon-dashboard/index.html" target="_blank"--}}
{{--            class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>--}}
{{--        <a class="btn btn-primary btn-sm mb-0 w-100"--}}
{{--            href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank" type="button">Upgrade to PRO</a>--}}
    </div>
</aside>
