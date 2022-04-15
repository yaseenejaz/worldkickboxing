<ul class="nav nav-tabs">
    <li class="nav-item {{ Request::url() == route('user', $slug) ? 'navActive' : null }}">
        <a class="nav-link" href="{{ route('user', auth()->user()->slug) }}">Tournament</a>
    </li>
    <li class="nav-item {{ Request::url() == route('user.tournament.ranking', $slug) ? 'navActive' : null }}">
        <a class="nav-link" href="{{ route('user.tournament.ranking', auth()->user()->slug) }}">Ranking</a>
    </li>
</ul>
