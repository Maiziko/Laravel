<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="/">
            <img src="{{ asset('template/images/logo.png') }}" alt="logo" />
        </a>
        <strong class="text-danger brand-logo text-shadow-black">ADMIN</strong>
        <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button"
            data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
        </button>
    </div>

    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endguest
            <!-- <button type="button" class="btn btn-dark" href="{{ route('login') }}">Login</button> -->
            @Auth
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown"
                        id="profileDropdown">
                        <?php if (Auth::user()->profile->profil_picture === null): ?>
                        <i class="typcn typcn-user-outline mr-0 mr-3" style="font-size: 30px"></i>
                        <?php else: ?>
                        <img src="{{ asset('image/' . Auth::user()->profile->profil_picture) }}" alt="profile-image">
                        <?php endif; ?>
                        <span class="nav-profile-name"> {{ Auth::user()->name }} </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}"
                            href="/profile/{{ Auth::user()->id }}">
                            <i class="typcn typcn-cog text-primary"> @csrf Settings </i>

                        </a>
                        <!-- pembuatan div logut -->

                        <a class=" dropdown-item" href="{{ route('logout') }}">
                            <i class="typcn typcn-power text-primary"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</i>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>

                    </div>
                </li>
            @endauth
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="typcn typcn-th-menu"></span>
        </button>
    </div>
</nav>
