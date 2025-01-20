<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">Noval Ali Group</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="active">Home</a></li>
                <li><a href="{{ url('/tracking') }}">Tracking</a></li>
                <li><a href="{{ url('/shipping-simulation') }}">Simulasi Biaya</a></li>
                <li><a class="btn-getstarted ms-1 px-3" href="{{ url('/order') }}">
                        Pesan Sekarang</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>


    </div>
</header>
