<aside
    id="layout-menu"
    class="layout-menu menu-vertical menu"
>

    <div class="app-brand demo ">
        <a
            href="{{ route('admin.dashboard') }}"
            class="app-brand-link"
        >
            <span class="app-brand-text demo menu-text fw-bold ms-2">
                <img
                    src="{{ asset('admin/img/logo.png') }}"
                    width="100"
                >
            </span>
        </a>

        <a
            href="javascript:void(0);"
            class="layout-menu-toggle menu-link text-large ms-auto"
        >
            <i class="icon-base bx bx-chevron-left"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item @if (request()->is('admin')) active open @endif">
            <a
                href="{{ route('admin.dashboard') }}"
                class="menu-link"
            >
                <i class="menu-icon icon-base bx bx-home-smile"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <!-- Data Master -->
        <li class="menu-header small">
            <span class="menu-header-text">Admin</span>
        </li>

        <li class="menu-item @if (request()->is('admin/jurusan*')) active open @endif">
            <a
                href="javascript:void(0);"
                class="menu-link menu-toggle"
            >
                <i class="menu-icon icon-base bx bx-layout"></i>
                <div>Data Master</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item @if (request()->is('admin/jurusan*')) active @endif">
                    <a
                        href="{{ route('admin.jurusan.index') }}"
                        class="menu-link"
                    >
                        <div>Jurusan</div>
                    </a>
                </li>
                <li class="menu-item @if (request()->is('admin/drug-category*')) active @endif">
                    <a
                        href="#"
                        class="menu-link"
                    >
                        <div>Mata Pelajaran</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item @if (request()->is('admin/finance')) active open @endif">
            <a
                href="#"
                class="menu-link"
            >
                <i class="menu-icon icon-base bx bxs-receipt"></i>
                <div>Data Berita</div>
            </a>
        </li>
        <li class="menu-item @if (request()->is('admin/finance')) active open @endif">
            <a
                href="#"
                class="menu-link"
            >
                <i class="menu-icon icon-base bx bxs-user-detail"></i>
                <div>Data Guru</div>
            </a>
        </li>
    </ul>


</aside>
