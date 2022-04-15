<ul class="nav nav-tabs">
    <li class="nav-item {{ Request::url() == route('event.division',['slug' => $slug, 'slug2' => $event->slug]) || Request::url() == route('event.division.edit',['slug' => $slug, 'slug2' => $event->slug]) ? 'navActive' : null }}">
        <a class="nav-link" href="{{ route('event.division',['slug' => $slug, 'slug2' => $event->slug]) }}">Divisions</a>
    </li>
    <li class="nav-item {{ Request::url() == route('event.categories',['slug' => $slug, 'slug2' => $event->slug]) ? 'navActive' : null }}">
        <a class="nav-link" href="{{ route('event.categories',['slug' => $slug, 'slug2' => $event->slug]) }}">Categories</a>
    </li>
    <li class="nav-item {{ Request::url() == route('event.competitors',['slug' => $slug, 'slug2' => $event->slug]) ? 'navActive' : null }}">
        <a class="nav-link" href="{{ route('event.competitors',['slug' => $slug, 'slug2' => $event->slug]) }}">Competitors</a>
    </li>
    <li class="nav-item {{ Request::url() == route('event.setting',['slug' => $slug, 'slug2' => $event->slug]) ? 'navActive' : null }}">
        <a class="nav-link" href="{{ route('event.setting',['slug' => $slug, 'slug2' => $event->slug]) }}">Settings</a>
    </li>
</ul>
