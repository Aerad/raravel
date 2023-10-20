<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class=" name color navbar-brand" href="#">Rara Details</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="color nav-link {{ Route::currentRouteName() == 'auth.login.index' ? 'active' : '' }}"
                        aria-current="page" href="{{ route('auth.login.index') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="color nav-link {{ Route::currentRouteName() == 'auth.register.index' ? 'active' : '' }}"
                        href="{{ route('auth.register.index') }}">Register</a>
                </li>


            </ul>
        </div>
    </div>
</nav>
