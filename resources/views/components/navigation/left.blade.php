<ul class="navbar-nav me-auto">
    @auth
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
    </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('about_me.index') }}">{{ __('About Me') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('outdoor.index') }}">{{ __('Outdoor') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('indoor.index') }}">{{ __('Indoor') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contact.index') }}">{{ __('Contacts') }}</a>
        </li>
    @endauth
</ul>


