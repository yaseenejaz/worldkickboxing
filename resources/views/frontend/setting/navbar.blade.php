<section class="in-nav">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <ul>
    <li><a href="{{ route('index') }}">home</a></li>
                    <li><a href="{{route('tournament.registration')}}">registration</a></li>
                    <li><a href="{{route('event.newcompetitor')}}">competitors</a></li>
                    <li><a href="#">categories</a></li>
                    <li><a href="#">draws</a></li>
                    <li><a href="#">schedule</a></li>
                    <li><a href="#">live</a></li>
                    <li><a href="#">results</a></li>
                </ul>
            </div>
            <div class="col-xl-4">
                <div class="set-btn">
                    <a href="{{ route('general') }}">
                        <img src="{{ asset('frontend/images/wheel.png') }}">
                        <span>SETTINGS</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
