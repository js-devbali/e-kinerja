<aside class="main-sidebar sidebar-dark-primary elevation-4">

    {{-- Brand Logo Start --}}
    <a href="" class="brand-link text-decoration-none">
        <img class="brand-image-xl elevation-3 shadow-none ms-2" src="{{ asset('logo-dark.png')}}" alt="jasa-raharja-cab-bali">
        <span class="brand-text fw-bold fs-6 ms-2">E-Kinerja</span>
    </a>
    {{-- Brand Logo End --}}
    
    <!-- Sidebar Menu Start -->
    <div class="sidebar"> 
        <nav class="mt-3 mb-5 pb-5">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item" id="authentication">
                    <a href="#" class="nav-link" id="authentication-link">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            Pegawai
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ms-2">
                        <li class="nav-item">
                            <a href="{{ route('Profile') }}" id="profile" class="nav-link">
                                <i class="nav-icon fas fa-id-badge"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" id="registration" class="nav-link">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>Register</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Login') }}" id="login" class="nav-link">
                                <i class="nav-icon fas fa-sign-in-alt"></i>
                                <p>Login</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form action="" method="POST" class="nav-link p-0 m-0">
                                @csrf
                                <button class="nav-link text-danger text-start btn-block">
                                    <i class="nav-icon fas fa-power-off"></i>
                                    <p>Logout</p>
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                <div class="dropdown-divider bg-light"></div>
                <li class="nav-item" id="dashboard">
                    <a href="{{ route('Dashboard') }}" id="dashboard-link" class="nav-link">
                        <i class="nav-icon fas fa-house-user"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('Kinerja Pegawai') }}" id="kinerja-pegawai" class="nav-link">
                        <i class="fas fa-clipboard nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('Kinerja Tahunan') }}" id="kinerja-tahunan" class="nav-link">
                        <i class="fas fa-briefcase nav-icon"></i>
                        <p>Kinerja 2021</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('Aktivitas Harian') }}" id="aktivitas-harian" class="nav-link">
                        <i class="fas fa-clipboard-list nav-icon"></i>
                        <p>Aktivitas Harian</p>
                    </a>
                </li>
                {{-- <li class="nav nav-treeview">
                    <li class="nav-item" id="e-kinerja">
                        <a href="#" class="nav-link" id="e-kinerja-link">
                            <i class="nav-icon fas fa-poll"></i>
                            <p>
                                E-Kinerja
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ms-2">
                            <li class="nav-item">
                                <a href="" id="kinerja-tahunan" class="nav-link">
                                    <i class="fas fa-briefcase nav-icon"></i>
                                    <p>Kinerja 2021</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" id="kinerja-pegawai" class="nav-link">
                                    <i class="fas fa-clipboard nav-icon"></i>
                                    <p>Kinerja Pegawai</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" id="aktivitas-harian" class="nav-link">
                                    <i class="fas fa-clipboard-list nav-icon"></i>
                                    <p>Aktivitas Harian</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </li> --}}
                <div class="dropdown-divider bg-light"></div>
                <li class="nav-item">
                    <a data-bs-toggle="modal" style="cursor: pointer" data-bs-target="#about" class="nav-link">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>About</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    {{-- Sidebar Menu End --}}
    
</aside>
    