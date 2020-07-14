<nav class="navbar navbar-expand-lg navbar-dark  ">
    <div class="container">
        <a class="navbar-brand font-weight-bold font-gisaka" href="/">Gisaka</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end text-uppercase align-middle id="
            navbarNavAltMarkup">
            <ul class="navbar-nav">
                <li class="nav-item mr-3">
                    <a class="nav-link{{ request()->is('/') ? ' ' : '' }}"
                        href="/produk">Produk</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link{{ request()->is('layanan') ? ' active' : '' }}"
                        href="/promo">Promo</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link{{ request()->is('profile') ? ' active' : '' }}"
                        href="/tentang-kami">Tentang Kami</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link{{ request()->is('blog') ? ' active' : '' }}"
                        href="/blog">Blog</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link{{ request()->is('blog') ? ' active' : '' }}"
                        href="/bantuan">Bantuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request()->is('blog') ? ' active' : '' }}"
                        href="/hubungi-kami">Hubungi kami</a>
                </li>
                <li class="nav-item">
                    <span class="nav-divider">
                    </span>
                </li>
                <li class="nav-item mr-3 font-weight-normal">
                    <a class="nav-link{{ request()->is('blog') ? ' active' : '' }}"
                        href="/daftar">Daftar </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request()->is('blog') ? ' active' : '' }}"
                        href="/dashboard">Akun saya</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
