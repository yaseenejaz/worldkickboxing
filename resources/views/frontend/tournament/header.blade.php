<section class="in-nav">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <ul>
                    <li><a href="{{ route('index') }}">home</a></li>
                    @if(auth()->check())
                        @if(auth()->user()->slug == $tournament->tournamentUser->slug)
                            <li><a href="{{route('tournament.registration',$tournament->slug)}}">registration</a></li>
                     <li><a href="{{route('event.newcompetitor',$tournament->slug)}}">competitors</a></li> 
                            <li><a href="{{route('event.categories',$tournament->slug)}}">categories</a></li>
                            <li><a href="{{route('tournament.draw',$tournament->slug)}}">draws</a></li>
                            <li><a href="{{route('tournament.schedule',$tournament->slug)}}">schedule</a></li>
                            <li><a href="#">live</a></li>
                            <li><a href="#">results</a></li>
                        @endif
                    @endif
                </ul>
            </div>
            @if(auth()->check())
                @if(auth()->user()->slug == $tournament->tournamentUser->slug)
                    <div class="col-xl-4">
                        <div class="set-btn">
                            <a href="{{ route('general',$tournament->slug) }}">
                                <img src="{{ asset('frontend/images/wheel.png') }}">
                                <span>SETTINGS</span>
                            </a>
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </div>
</section>
