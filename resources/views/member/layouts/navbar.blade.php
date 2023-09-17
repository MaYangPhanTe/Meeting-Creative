<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand text-center" href="{{ url('/') }}"><img src="{{ asset('/image/logo.svg') }}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item me-5">
                    <a class="nav-link {{ '/' == request()->path() ? 'active' : '' }}"
                        href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link {{ 'about' == request()->path() ? 'active' : '' }}"
                        href="{{ url('/about') }}">About us</a>
                </li>
                <li class="nav-item me-5 dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                        aria-expanded="false">Our Service</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ 'web-design' == request()->path() ? 'active' : '' }}"
                                href="{{ url('/web-design') }}">Web Design</a></li>
                        <li><a class="dropdown-item {{ 'design-graphic' == request()->path() ? 'active' : '' }}"
                                href="{{ url('/design-graphic') }}">Design Graphic</a></li>
                        <li><a class="dropdown-item {{ 'digital-marketing' == request()->path() ? 'active' : '' }}"
                                href="{{ url('/digital-marketing') }}">Digital Marketing</a></li>
                        <li><a class="dropdown-item {{ 'network' == request()->path() ? 'active' : '' }}"
                                href="{{ url('/network') }}">Network</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-5">
                    <a class="nav-link {{ 'ourwork' == request()->path() ? 'active' : '' }}"
                        href="{{ url('/ourwork') }}">Our Work</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link {{ 'ourteam' == request()->path() ? 'active' : '' }}"
                        href="{{ url('/ourteam') }}">Our Team</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link {{ '#' == request()->path() ? 'active' : '' }}"
                        href="{{ url('#') }}">Cotact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
