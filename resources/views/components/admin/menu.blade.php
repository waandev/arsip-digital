<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="{{ request()->is('admin') || request()->is('admin') ? 'active' : '' }}">
                <a href="{{ route('admin.index') }}">
                    <i
                        class="{{ request()->is('admin') || request()->is('admin') ? 'bx bxs-dashboard bx-flashing' : 'bx bxs-dashboard' }}"></i><span
                        class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>

            <li class="{{ request()->is('admin/category') || request()->is('admin/category/*') ? 'active' : '' }}">
                <a href="{{ route('admin.category.index') }}">
                    <i
                        class="{{ request()->is('admin/category') || request()->is('admin/category/*') ? 'bx bx-category-alt bx-flashing' : 'bx bx-category-alt' }}"></i><span
                        class="menu-title" data-i18n="Category">Data Kategori</span>
                </a>
            </li>

            <li class="{{ request()->is('officer') || request()->is('officer/*') ? 'active' : '' }}">
                <a href="#">
                    <i
                        class="{{ request()->is('officer') || request()->is('officer/*') ? 'bx bx-user-check bx-flashing' : 'bx bx-user-check' }}"></i><span
                        class="menu-title" data-i18n="Officer">Data Petugas</span>
                </a>
            </li>

            <li class="{{ request()->is('user') || request()->is('user/*') ? 'active' : '' }}">
                <a href="#">
                    <i
                        class="{{ request()->is('user') || request()->is('dashboard/*') ? 'bx bx-user bx-flashing' : 'bx bx-user' }}"></i><span
                        class="menu-title" data-i18n="User">Data User</span>
                </a>
            </li>

            <li class="{{ request()->is('archive') || request()->is('archive/*') ? 'active' : '' }}">
                <a href="#">
                    <i
                        class="{{ request()->is('archive') || request()->is('archive/*') ? 'bx bx-archive bx-flashing' : 'bx bx-archive' }}"></i><span
                        class="menu-title" data-i18n="Archive">Data Arsip</span>
                </a>
            </li>

            <li class="{{ request()->is('history') || request()->is('history/*') ? 'active' : '' }}">
                <a href="#">
                    <i
                        class="{{ request()->is('history') || request()->is('history/*') ? 'bx bx-history bx-flashing' : 'bx bx-history' }}"></i><span
                        class="menu-title" data-i18n="History">Riwayat Unduh</span>
                </a>
            </li>

        </ul>
    </div>
</div>

<!-- END: Main Menu-->
