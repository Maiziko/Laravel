<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @Auth
            <li class="nav-item">

                <div class="d-flex align-items-center sidebar-profile">
                    <div class="sidebar-profile-image">
                    <?php if (Auth::user()->profile->profil_picture === null): ?>
                        <i class="typcn typcn-user-outline mr-0 text-white mr-3" style="font-size: 30px"></i>
                     <?php else: ?>
                        <img src="{{ asset('image/' .Auth::user()->profile->profil_picture) }}" alt="profile-image">
                        <span class="sidebar-status-indicator"></span>
                    <?php endif; ?>
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
                    <i class="typcn typcn-tags menu-icon"></i>
                    <span class="menu-title">Categories</span>
                </a>
            </li>
            {{-- Categories akhir --}}
            {{-- Product Mulai --}}
            <li class="nav-item">
                <a class="nav-link" href="/product">
                    <i class="typcn typcn-shopping-bag menu-icon"></i>
                    <span class="menu-title">Product</span>
                </a>
            </li>
            {{-- Product akhir --}}
            <li class="nav-item">
                <a class="nav-link" href="/transaction">
                    <i class="typcn typcn-credit-card menu-icon"></i>
                    <span class="menu-title">Transaction</span>
                </a>
            </li>
        @endauth
    </ul>
</nav>
