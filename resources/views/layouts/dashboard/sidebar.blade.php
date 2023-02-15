<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/dashboard">BPR RIzky Barokah</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/dashboard">BPR</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active"><a class="nav-link" href="/dashboard">
                    <i class="fas fa-fire"> </i> <span>Dashboard</span></a>
            </li>
            <li class="menu-header">MASTER</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"> <i class="fas fa-money-bill">
                    </i>
                    <span>Pengajuan Kredit</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('jenis.index') }}">Jenis Pekerjaan</a></li>
                    <li><a class="nav-link" href="{{ route('jaminan.index') }}">Jenis Jaminan</a></li>
                    <li><a class="nav-link" href="{{ route('kredit.index') }}">Ajukan Kredit</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"> <i class="fas fa-clipboard"></i>
                    <span>Category</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('category.index') }}">List Category</a></li>
                    <li><a class="nav-link" href="{{ route('categories.index') }}">List News Category</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="far fa-bookmark"></i> <span>Tags</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('tag.index') }}">List Tags</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-book-open"></i> <span>Post</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('post.index') }}">
                            List Post
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('post.tampil_hapus') }}">
                            List Post Trash
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-book-open"></i> <span>News</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('new.index') }}">
                            List News
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            List News Trash
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="far fa-user"></i> <span>User</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('user.index') }}">List Users</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="far fa-envelope"></i> <span>Information</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('pengaduan.index') }}">List Information</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="far fa-file"></i> <span>Laporan</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('publikasi.index') }}">List Publikasi</a></li>
                </ul>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="/" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> HALAMAN WEB
            </a>
        </div>
    </aside>
</div>
