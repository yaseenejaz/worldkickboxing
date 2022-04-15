@extends('frontend.app')
@section('title')
    <title>Tournaments</title>
@endsection
@section('content')

    <section class="inner-header">
        <h1>CREATE TOURNAMENT</h1>
    </section>

    <section class="tournament">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="kihap">
                        <h2>Tournaments hosted with Kihapp</h2>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="tabs">
                        <div class="switch">
                            <a href="#">Anywhere</a>
                        </div>
                        <div class="switch">
                            <a href="#">Australia</a>
                        </div>
                        <div class="switch">
                            <a href="#">Belgium</a>
                        </div>
                        <div class="switch">
                            <a href="#">Canada</a>
                        </div>
                        <div class="switch">
                            <a href="#">Finland</a>
                        </div>
                        <div class="switch">
                            <a href="#">Germany</a>
                        </div>
                    </div>
                    <div class="tabs">
                        <div class="switch">
                            <a href="#">India</a>
                        </div>
                        <div class="switch">
                            <a href="#">Ireland</a>
                        </div>
                        <div class="switch">
                            <a href="#">Latvia</a>
                        </div>
                        <div class="switch">
                            <a href="#">Netherland</a>
                        </div>
                        <div class="switch">
                            <a href="#">Poland</a>
                        </div>
                        <div class="switch">
                            <a href="#">Swedan</a>
                        </div>
                    </div>
                    <div class="tabs">
                        <div class="switch">
                            <a href="#">United Kingdom</a>
                        </div>
                        <div class="switch">
                            <a href="#">United States</a>
                        </div>
                    </div>
                    <a href="{{ route('tournament.create') }}" class="create-tournament">Create Tournament</a>
                </div>

                <div class="col-xl-12">
                     @if(auth()->check())
                       @if(!empty($tournamentt))
                    <div class="ut">
                        <h2> Your Upcoming Tournaments</h2>
                     @foreach($tournament as $tournaments)
                            <div class="matches">
                                <div class="imag">

                                </div>
                                <div class="det">
                                    <div class="txt">
                                        <a href="{{ route('show.tournament', $tournaments->slug) }}" class="lnk">{{ $tournaments->name }}</a>
                                        <span>{{ $tournaments->tournamentVenue->name ?? '' }}</span>
                                        <?php
                                            $date = explode("-",$tournaments->date);
                                            $month = DateTime::createFromFormat('!m', $date[1]);
                                            $month = $month->format('F');
                                            $today = date(" " . $date[2] . ", " . $date[0]);
                                        ?>
                                        <span>{{ $month . $today }}</span>
                                    </div>
                                    <div class="flag">
                                        <img src="{{ asset('frontend/images/india.png') }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            @endif
                            @endif
                    <div class="ut">
                        <h2>Upcoming Tournaments</h2>

                        @foreach($tournamentt as $tournaments)
                            <div class="matches">
                                <div class="imag">

                                </div>
                                <div class="det">
                                    <div class="txt">
                                        <a href="{{ route('show.tournament', $tournaments->slug) }}" class="lnk">{{ $tournaments->name }}</a>
                                        <span>{{ $tournaments->tournamentVenue->name ?? '' }}</span>
                                        <?php
                                            $date = explode("-",$tournaments->date);
                                            $month = DateTime::createFromFormat('!m', $date[1]);
                                            $month = $month->format('F');
                                            $today = date(" " . $date[2] . ", " . $date[0]);
                                        ?>
                                        <span>{{ $month . $today }}</span>
                                    </div>
                                    <div class="flag">
                                        <img src="{{ asset('frontend/images/india.png') }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="past-tour">
                            <h3>Past Tournaments</h3>

                               @if(!empty($tournamen))
                        @foreach($tournamen as $tournamens)
                            <div class="matches">
                                <div class="imag">

                                </div>
                                <div class="det">
                                    <div class="txt">
                                        <a href="{{ route('show.tournament', $tournamens->slug) }}" class="lnk">{{ $tournamens->name }}</a>
                                        <span>{{ $tournamens->tournamenVenue->name ?? '' }}</span>
                                        <?php
                                            $date = explode("-",$tournamens->date);
                                            $month = DateTime::createFromFormat('!m', $date[1]);
                                            $month = $month->format('F');
                                            $today = date(" " . $date[2] . ", " . $date[0]);
                                        ?>
                                        <span>{{ $month . $today }}</span>
                                    </div>
                                    <div class="flag">
                                        <img src="{{ asset('frontend/images/india.png') }}">
                                    </div>
                                </div>
                            </div> @endforeach
                            @else

                            <a href="#" class="lnk">There was an error fetching more tournaments. Please refresh and try again.</a>
                        </div>
                       @endif

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
