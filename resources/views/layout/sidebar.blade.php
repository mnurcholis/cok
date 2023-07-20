<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ active_class(['admin']) }}" href="{{ url('/admin') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{ active_class(['admin/produk/*']) }}" data-bs-target="#components-produk"
                data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Produk</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-produk" class="nav-content collapse  {{ show_class(['admin/produk/*']) }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('admin/produk/kategori') }}"
                        class="{{ is_active_route(['admin/produk/kategori']) }}">
                        <i class="bi bi-circle"></i><span>Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/produk/produk') }}"
                        class="{{ is_active_route(['admin/produk/produk']) }}{{ is_active_route(['admin/produk/create']) }}">
                        <i class="bi bi-circle"></i><span>Produk</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link {{ active_class(['admin/paketcctv']) }}" href="{{ url('admin/paketcctv') }}">
                <i class="bi bi-gear"></i>
                <span>Paket CCTV</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ active_class(['admin/galeri']) }}" href="{{ url('admin/galeri') }}">
                <i class="bi bi-gear"></i>
                <span>Galeri</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ active_class(['admin/page']) }}" href="{{ url('admin/page') }}">
                <i class="bi bi-gear"></i>
                <span>Settings Page</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ active_class(['admin/setting/menu']) }}" href="{{ url('admin/setting/menu') }}">
                <i class="bi bi-gear"></i>
                <span>Settings Menu</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ active_class(['admin/settings']) }}" href="{{ url('admin/settings') }}">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
        </li><!-- End Profile Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
