<body class="bg-body">
    <div class="backdrop" id="backdrop"></div>
    @include('layouts.navbar')

    <nav class="sidebar sidebar-mini sticky-top" id="sidebar">
        <div class="menu shadow pb-5" id="sidebar-scroll">
            <ul class="menu-wrapper">
                <li class="menu-item ripple">
                    <a href="https://inovindoacademy.com/admin/dashboard" data-mdb-placement="right"
                        data-mdb-toggle="tooltip" title="Beranda" data-mdb-delay='{"show":"350", "hide":"0"}'>
                        <i data-feather="home" class="fa-fw"></i>
                        <span>Beranda</span>
                    </a>
                </li>
                <li class="menu-item ripple">
                    <a href="https://inovindoacademy.com/admin/profile" data-mdb-placement="right"
                        data-mdb-toggle="tooltip" title="Profil Saya" data-mdb-delay='{"show":"350", "hide":"0"}'>
                        <i data-feather="user" class="fa-fw"></i>
                        <span>Profil Saya</span>
                    </a>
                </li>
                <div class="ps-3 text-muted menu-title">
                    <small>Main Menu</small>
                </div>
                <li class="menu-item ripple show" data-mdb-placement="right" data-mdb-toggle="tooltip"
                    title="Master Data" data-mdb-delay='{"show":"350", "hide":"0"}'>
                    <a data-mdb-toggle="collapse" href="#collapseMenu3" role="button" aria-expanded="false"
                        aria-controls="collapseMenu3">
                        <i data-feather="database" class="fa-fw"></i>
                        <span>Master Data</span>
                    </a>
                </li>

                <div class="collapse show" id="collapseMenu3">
                    <ul class="p-0 m-0">
                        <li class="menu-item ripple  ">
                            <a href="{{ route('subscribtion.index') }}" data-mdb-placement="right"
                                data-mdb-toggle="tooltip" title="Karyawan" data-mdb-delay='{"show":"350", "hide":"0"}'
                                class="sub-item">
                                <i data-feather="grid" class="fa-fw"></i>
                                <span>Subscribtion</span>
                            </a>
                        </li>

                    </ul>
                    <ul class="p-0 m-0">
                        <li class="menu-item ripple  ">
                            <a href="{{ route('detail-subscribtion.index') }}" data-mdb-placement="right"
                                data-mdb-toggle="tooltip" title="Karyawan" data-mdb-delay='{"show":"350", "hide":"0"}'
                                class="sub-item">
                                <i data-feather="grid" class="fa-fw"></i>
                                <span>Detail Subscribtion</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="ps-3 text-muted menu-title">
                    <small>Report Peserta Magang</small>
                </div>
                <li class="menu-item ripple">
                    <a href="{{ route('report-user.index') }}" data-mdb-placement="right"
                        data-mdb-toggle="tooltip" title="Report" data-mdb-delay='{"show":"350", "hide":"0"}'>
                        <i data-feather="feather" class="fa-fw"></i>
                        <span>Report User Payment</span>
                    </a>
                </li>
                <li class="menu-item ripple">
                    <a href="{{ route('report-institution.index')  }}" data-mdb-placement="right"
                        data-mdb-toggle="tooltip" title="Report" data-mdb-delay='{"show":"350", "hide":"0"}'>
                        <i data-feather="feather" class="fa-fw"></i>
                        <span>Report Institution Payment</span>
                    </a>
                </li>
                 
                <div class="ps-3 text-muted menu-title">
                    <small>Pengaturan</small>
                </div>
                <li class="menu-item ripple">
                    <a href="#" data-mdb-placement="right" data-mdb-toggle="tooltip" title="Pengaturan"
                        data-mdb-delay='{"show":"350", "hide":"0"}'>
                        <i data-feather="settings" class="fa-fw"></i>
                        <span>Pengaturan</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="ps-3 text-muted menu-title">
            <small>Kelola User Magang</small>
        </div>

       
        </div>
    </nav>
