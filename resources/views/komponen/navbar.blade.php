<nav class="navbar navbar-expand-lg navbar-dark  bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">MPP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if(Auth::check() && auth()->user()->is_admin == 1)
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pelayanan">Pelayanan</a>
                    </li>
                </ul>



                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-capitalize" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          {{ Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu" >
                            <li class="nav-item" >
                                <a style="max-width: 10px; color:black" class="nav-link text-center" href="/admin">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a style="max-width: 10px; color:black" class="nav-link text-center" href="/sesi/logout">Logout</a>
                            </li>
                        </ul>
                      </li>
                </ul>
                {{-- <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sesi/logout">Logout</a>
                    </li>
                </ul> --}}
             @elseif(Auth::check() && auth()->user()->is_admin == 0)
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pelayanan">Pelayanan</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/pengajuan">Pengajuan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-capitalize" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a style="color:black;" class="nav-link" href="/user/profil">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:black;" class="nav-link" href="/sesi/logout">Logout</a>
                            </li>
                        </ul>
                      </li>
                </ul>
             @else
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pelayanan">Pelayanan</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                </ul>
            @endif
      </div>
    </div>
</nav>
