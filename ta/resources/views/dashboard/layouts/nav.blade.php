<nav id="sidebarMenu" class="col-md-3 col-lg-2 me-0 px-3 fs-6 d-md-block bg-warning sidebar collapse"
    style="background-color: #ff5e00 !important;">
    <div class="position-sticky pt-5 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-light {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                    href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            @can('superadmin')
                <li class="nav-item">
                    <a class="nav-link text-light {{ Request::is('user*') ? 'active' : '' }}" href="/user">
                        <span data-feather="archive" class="align-text-bottom"></span>
                        Manage Admin
                    </a>
                </li>
            @endcan
            @cannot('superadmin')
                <li class="nav-item">
                    <a class="nav-link text-light {{ Request::is('profil*') ? 'active' : '' }}" href="/profil">
                        <span data-feather="archive" class="align-text-bottom"></span>
                        Your Data
                    </a>
                </li>
            @endcannot
            @can('admin')
                <li class="nav-item">
                    <a class="nav-link text-light {{ Request::is('mahasiswa*') ? 'active' : '' }}" href="/mahasiswa">
                        <span data-feather="archive" class="align-text-bottom"></span>
                        All Mahasiswa
                    </a>
                </li>
            @endcan
            @cannot('superadmin')
                @cannot('admin')
                    <li class="nav-item">
                        <a class="nav-link text-light {{ Request::is('chat*') ? 'active' : '' }}" href="/chat">
                            <span data-feather="archive" class="align-text-bottom"></span>
                            Chatbot
                        </a>
                    </li>
                @endcannot
            @endcannot


            @cannot('superadmin')
                @cannot('admin')
                    <li class="nav-item">
                        <a class="nav-link text-light {{ Request::is('offline*') ? 'active' : '' }}" href="/offline">
                            <span data-feather="archive" class="align-text-bottom"></span>
                            Konsultasi offline
                        </a>
                    </li>
                @endcannot
            @endcannot
            <div class="nav-item text-nowrap">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link text-light px-3 pt-5 bg-warning border-0"
                        style="background-color: #ff5e00 !important;">
                        Logout
                        <span data-feather="log-out"></span>
                    </button>
                </form>
            </div>
        </ul>
    </div>
</nav>
