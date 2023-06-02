<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @Auth
            <li class="nav-item">

                <div class="d-flex align-items-center sidebar-profile">
                    <div class="sidebar-profile-image">
                        <img src="{{ asset('image/' . Auth::user()->profile->profil_picture) }}" alt="profile-image">
                        <span class="sidebar-status-indicator"></span>
                    </div>
                    <div class="sidebar-profile-name">
                        <p class="sidebar-name">
                            {{ Auth::user()->name }}
                        </p>
                    </div>
                </div>


                <p class="sidebar-menu-title">Menu</p>
            </li>
        @endauth
        <li class="nav-item">
            <a class="nav-link" href="/">
                <i class="typcn typcn-device-desktop menu-icon"></i>
                <span class="menu-title">Dashboard </span>
            </a>
        </li>
        @Auth
            {{-- Categories Mulai --}}
            <li class="nav-item">
                <a class="nav-link" href="/categories">
                    <i class="typcn typcn-document-text menu-icon"></i>
                    <span class="menu-title">Categories</span>
                </a>
            </li>
            {{-- Categories akhir --}}
            {{-- Product Mulai --}}
            <li class="nav-item">
                <a class="nav-link" href="/product">
                    <i class="typcn typcn-document-text menu-icon"></i>
                    <span class="menu-title">Product</span>
                </a>
            </li>
            {{-- Product akhir --}}
            <li class="nav-item">
                <a class="nav-link" href="/transaction">
                    <i class="typcn typcn-document-text menu-icon"></i>
                    <span class="menu-title">Transaksi</span>
                </a>
            </li>
        @endauth
    </ul>
</nav>
