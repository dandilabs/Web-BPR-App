<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="/"><img src="{{ asset('vendor/images/logo-2.png') }}" width="200"></a>
    <!-- Small Divice Menu-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar_supported"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </button>

    <div class="collapse navbar-collapse navbar_supported">
        <ul class="navbar-nav">
            <li><a class="nav-link" href="/">Beranda</a></li>
            <li class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">Menarik</a>
                <ul class="dropdown-menu">
                    <li><a href="/aset" class="active">Aset Menarik</a></li>
                    <li><a href="{{ route('aset.list') }}">List Aset</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="tentang-kami">Tentang Kami</a></li>
            <li><a class="nav-link" href="/hubungi">Hubungi Kami</a></li>
        </ul>
    </div>
</nav>
