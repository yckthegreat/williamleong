<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{ asset('assets/backoffice/img/favicon.png') }}" width="100" height="60" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="{{ asset('assets/backoffice/img/favicon.png') }}" width="30" height="30" alt="CoreUI Logo">
    </a>

    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="{{ asset('assets/backoffice/img/user.png') }}" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                    <i class="fa fa-lock"></i> Logout
                </a>
                <form id="frm-logout" action="" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
    </ul>
</header>