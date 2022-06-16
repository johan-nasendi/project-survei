<div class="container">
    <ul class="list-unstyled topnav-menu float-right mb-0">
        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link  nav-user mr-0 waves-effect waves-light"
                href="{{route('login')}}" role="button"  aria-haspopup="false" aria-expanded="false">
                <i class="fa fa-sign-in"></i><span class="pro-user-name ml-1">Login</span>
            </a>

        </li>
    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="/" class="logo logo-light text-center">
                 <span class="logo-sm">
                    <img src="{{asset('img/logo.png')}}" alt="logo" height="50">
                </span>
                <span class="logo-lg">
                    <img src="{{asset('img/logo.png')}}" alt="logo" height="50">
                </span>
        </a>
    </div>
    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

        <li>
            <!-- Mobile menu toggle (Horizontal Layout)-->
            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            <!-- End mobile menu toggle-->
        </li>

        <li class="dropdown d-none d-xl-block">
            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="/" role="button" aria-haspopup="false" aria-expanded="false">
                BERANDA
            </a>
        </li>

        <li class="dropdown dropdown-mega d-none d-xl-block">
            <a class="nav-link dropdown-toggle waves-effect waves-light"  href="#" role="button" aria-haspopup="false" aria-expanded="false">
              PROFIL
            </a>
        </li>
        <li class="dropdown dropdown-mega d-none d-xl-block">
            <a class="nav-link dropdown-toggle waves-effect waves-light"  href="#" role="button" aria-haspopup="false" aria-expanded="false">
              KONTAK
            </a>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
