            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/dashboard') }}">
                            <i class="mdi mdi-home menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="mdi mdi-book menu-icon"></i>
                            <span class="menu-title">Buku</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('kategori.index') }}">Kategori Buku</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('buku.index') }}">Daftar Buku</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="pages/ui-features/typography.html">Pinjaman Buku</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>