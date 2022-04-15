<ul class="nav nav-tabs">
    <li class="nav-item {{ Request::url() == route('user', $slug) || Request::url() == route('user.tournament.ranking', $slug) ? 'navActive' : null }}">
        <a class="nav-link" href="{{ route('user', auth()->user()->slug) }}"><i class="fa fa-user"></i>Your Profile</a>
    </li>
    <li class="nav-item {{ Request::url() == route('billing', $slug) ? 'navActive' : null }}">
        <a class="nav-link" href="{{ route('billing', auth()->user()->slug) }}"><i class="fa fa-usd"></i>Billing</a>
    </li>
    <li class="nav-item {{ Request::url() == route('account.setting', $slug) ? 'navActive' : null }}">
        <a class="nav-link" href="{{ route('account.setting', auth()->user()->slug) }}"><i class="fa fa-cog"></i>Account Settings</a>
    </li>
    <li class="nav-item {{ Request::url() == route('stripe', $slug) ? 'navActive' : null }}">
        <a class="nav-link" href="{{ route('stripe', auth()->user()->slug) }}"><i class="fa fa-cc-stripe"></i>Stripe Setup</a>
    </li>
    <li class="nav-item {{ Request::url() == route('paypal', $slug) ? 'navActive' : null }}">
        <a class="nav-link" href="{{ route('paypal', auth()->user()->slug) }}"><i class="fa fa-paypal"></i>Paypal Setup</a>
    </li>
</ul>
