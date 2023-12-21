<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Toko Beras</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Toko Beras</a>
        </div>
        <ul class="sidebar-menu">

            <li class="nav-item dropdown {{ $type_menu === 'layout' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"
                    data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Master Data</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/shippings') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('admin/shippings') }}">Ongkir</a>
                    </li>
                    <li class="{{ Request::is('admin/produks') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('admin/produks') }}">Produk</a>
                    </li>
                    <li class="{{ Request::is('admin/shippings') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('admin/shippings') }}">Pelanggan</a>
                    </li>
                    <li class="{{ Request::is('admin/shippings') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('admin/shippings') }}">Pembelian</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
