<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?= site_url('dashboard'); ?>"><i class="menu-icon ti-home"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-star"></i>Master Data</a>
                        <ul class="sub-menu children dropdown-menu"><li><i class="menu-icon ti-truck"></i><a href="<?= site_url('barang'); ?>">Barang</a></li>
                            <li><i class="menu-icon ti-user"></i><a href="<?= site_url('pegawai'); ?>">Pegawai</a></li>
                            <li><i class="menu-icon ti-face-smile"></i><a href="<?= site_url('pelanggan'); ?>">Pelanggan</a></li>

                            <li><i class="menu-icon ti-stats-up"></i><a href="<?= site_url('penjualan'); ?>">Penjualan</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-printer"></i>Cetak Semua Data</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-truck"></i><a href="tables-basic.html">Barang</a></li>
                            <li><i class="menu-icon ti-user"></i><a href="tables-data.html">Pegawai</a></li>
                            <li><i class="menu-icon ti-face-smile"></i><a href="tables-data.html">Pelanggan</a></li>
                            <li><i class="menu-cion ti-stats-up"></i><a href="tables-data.html">Penjualan</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-layout-tab-window"></i>Kelola Website</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon ti-pencil"></i><a href="<?= site_url('post'); ?>">Posts</a></li>
                            <li><i class="menu-icon ti-settings"></i><a href="<?= site_url('post/settings'); ?>">Settings</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-settings"></i>Pengaturan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-info"></i>About</a>
					</li>
					<li>
                        <a href="widgets.html"> <i class="menu-icon ti-power-off"></i>Logout</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>