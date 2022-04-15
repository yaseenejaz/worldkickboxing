<div class="col-xl-4">
    <nav class="nav-sidebar">
        <ul class="nav tabs">




            <li class="{{ (request()->is('general')) ? 'sideNavActive' : '' }}"><a href="{{ route('general',$tournament->slug) }}">General</a>
              </li>
            <li class="{{ (request()->is('registration_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('registration.setting',$tournament->slug) }}">Registration</a></li>
            <li class="{{ (request()->is('venue_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('venue.setting',$tournament->slug) }}">Venue</a></li>
            <li class="{{ (request()->is('image_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('image.setting',$tournament->slug) }}">Images</a></li>
            <li class="{{ (request()->is('draw_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('draw.setting',$tournament->slug) }}">Draws</a></li>
            <li class="{{ (request()->is('entry_fees_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('entry.setting',$tournament->slug) }}">Entry Fees</a></li>
            <li class="{{ (request()->is('payment_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('payment.setting',$tournament->slug) }}">Payments</a></li>
            <li class="{{ (request()->is('document_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('document.setting',$tournament->slug) }}">Documents</a></li>
            <li class="{{ (request()->is('email_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('email.setting',$tournament->slug) }}">Emails</a></li>
            <li class="{{ (request()->is('permission_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('permission.setting',$tournament->slug) }}">Permissions</a></li>
            <li class="{{ (request()->is('result_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('result.setting',$tournament->slug) }}">Results</a></li>
            <li class="{{ (request()->is('certificate_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('certificate.setting',$tournament->slug) }}">Certificates</a></li>
            <li class="{{ (request()->is('weigh_in_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('weigh.setting',$tournament->slug) }}">Weigh-in</a></li>
            <li class="{{ (request()->is('license_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('license.setting',$tournament->slug) }}">Licenses</a></li>
            <li class="{{ (request()->is('physical_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('physical.setting',$tournament->slug) }}">Physical</a></li>
            <li class="{{ (request()->is('data_setting')) ? 'sideNavActive' : '' }}"><a href="{{ route('data.setting',$tournament->slug) }}">Data</a></li>
        </ul>
    </nav>
</div>
