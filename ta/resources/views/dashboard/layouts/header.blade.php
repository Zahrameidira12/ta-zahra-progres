<header class="navbar navbar-warning sticky-top p-0 shadow" style="background-color: #ff5e00;">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">
        <div class="Gambar">
            <img src="{{ asset('pnp (1).png') }}" alt="" />
        </div>
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            @if(auth()->check())
                <span style="color: white;">
                    Selamat datang {{ auth()->user()->name }}
                </span>
            @endif
        </div>
    </div>




    {{-- <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            @if (auth()->user()->issuperadmin)
                @csrf
                <button type="submit" class="nav-link px-3 bg-warning border-0">
                    <span style="color: white;">
                        Selamat datang {{ auth()->user()->name }}
                    </span>
                </button>
            @elseif(auth()->user()->isadmin)
                <form action="{{ route('profil.index') }}" method="get">
                    @csrf
                    <button type="submit" class="nav-link px-3 bg-warning border-0">
                        <span style="color: white;">
                            Selamat datang Admin {{ auth()->user()->name }}
                            <img class="rounded-circle"
                                src="{{ auth()->user()->gambar ? asset('user-images/' . auth()->user()->gambar) : asset('images/bbb/default_profil.WEBP') }}"
                                alt="gambar" width="30" height="30">
                        </span>
                    </button>
                </form>
            @else
                <form action="{{ route('profil.index') }}" method="get">
                    @csrf
                    <button type="submit" class="nav-link px-3 bg-warning border-0">
                        <span style="color: white;">
                            Selamat datang Penjual {{ auth()->user()->name }}
                            <img class="rounded-circle"
                                src="{{ auth()->user()->gambar ? asset('user-images/' . auth()->user()->gambar) : asset('images/bbb/default_profil.WEBP') }}"
                                alt="gambar" width="30" height="30">
                        </span>
                    </button>
                </form>
            @endif
        </div>
    </div> --}}
</header>
