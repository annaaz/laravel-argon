<div class="container position-sticky z-index-sticky top-0" style="background-color: red !important;">
    <div class="row">
        <div class="col-12">
            <!-- Navbar -->
            <nav
                class=" navbar-expand-lg blur  top-0 z-index-3 position-absolute mt-4 py-2 start-0 end-0 mx-4">
                <div style="display: flex; flex-direction: row;justify-content:center;align-items:center;width: 100%; background-color: #990000;height: 60px;  ">
                    <div>
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 active font-weight-bold" style="color: white !important;" aria-current="page"
                                   href="{{ route('beranda') }}">
                                    BERANDA
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 active font-weight-bold" style="color: white !important;" aria-current="page"
                                   href="{{ route('profile') }}">
                                    PROFIL
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2 font-weight-bold" style="color: white !important;" href="{{ route('prosedur') }}">
                                    PROSEDUR
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div style="background-color: white; border-radius: 50%; padding: 6px"><img src="./img/unhan-sm.png" class="navbar-brand-img h-100" width="100" alt="main_logo"></div>
                    <div><ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 font-weight-bold"  style="color: white !important;" aria-current="page"
                                   href="{{ route('informasi-kerjasama') }}">
                                    KERJASAMA
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2 font-weight-bold" style="color: white !important;"  href="{{ route('informasi-statistik') }}">
                                    STATISTIK
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2 font-weight-bold" style="color: white !important;"  href="{{ route('login') }}">
                                    LOGIN
                                </a>
                            </li>
                        </ul></div>

                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div>
