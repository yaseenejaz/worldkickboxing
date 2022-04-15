@extends('frontend.app')
@section('title')
    <title>New Event</title>
@endsection
@section('link')
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
 <section class="untitled">
        <h2>{{ $tournamentUser->name }}</h2>
        <?php
            $date = explode("-",$tournamentUser->date);
            $month = DateTime::createFromFormat('!m', $date[1]);
            $month = $month->format('F');
            $today = date(" " . $date[2] . ", " . $date[0]);
        ?>
        <span>{{ $month . $today }}</span>
    </section>

    @include('frontend.setting.navbar')

    <section>
        <div class="compe">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        @if($tournamentUser->tournamentUser->email == '')
                            <p>Complete your profile so you'll be able log in later. <a
                                    href="{{ route('account.setting', $tournamentUser->tournamentUser->slug) }}">Profile</a>
                            </p>
                        @endif
                        <div class="ev-set">
                            <h2>New Event</h2>
                            <form method="post" action="{{ route('create.new.tournament.event') }}">
                                @csrf
                                <input type="hidden" name="slug" value="{{ $slug }}">
                                <div class="n-ev">
                                    <div class="lst">
                                        <label>Discipline</label>
                                        <div class="sel-down">
                                            <select name="descipline">
                                                @foreach($martialArt as $martialArts)
                                                    <optgroup label="{{ $martialArts->name }}">
                                                        @foreach($martialArts->descipline aS $desciplines)
                                                            <option
                                                                value="{{ $desciplines->id }}">{{ $desciplines->name }}</option>
                                                        @endforeach
                                                    </optgroup>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="lst">
                                        <label>Name</label>
                                        <input type="text" name="name">
                                    </div>
                                    <div class="lst">
                                        <label>Format</label>
                                        <div class="c-box">
                                            @foreach(\App\Descipline::desciplineFormat as $desciplineFormat)
                                                <div class="rdio-btn">
                                                    <input {{ $desciplineFormat['checked'] }} type="radio" name="formation"
                                                           value="{{ $desciplineFormat['id'] }}">
                                                    <div class="radio"></div>
                                                    <span>
											<h4>{{ $desciplineFormat['label'] }}</h4>
											<p>{{ $desciplineFormat['text'] }}</p>
										</span>
                                                </div>
                                            @endforeach

                                            <div class="rdio-btn">
                                                <input type="checkbox" name="">
                                                <div class="radio"></div>
                                                <span>
											<h4>Use bronze matches (where possible)</h4>
										</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lst">
                                        <div class="ajw">
                                            <a class="adv" href="#">
                                                Advanced<i class="fa fa-caret-right"></i>
                                            </a>
                                            <div class="adv-div">
                                                <div class="sec">
                                                    <label>Position</label>
                                                    <div class="or-sel">
                                                        <select name="position">
                                                            @for($i = 1; $i <= count($tournamentEventPosition) + 1; $i++)
                                                                @if(count($tournamentEventPosition) + 1 == $i)
                                                                    <option selected value="{{ $i }}">{{ $i }}</option>
                                                                @else
                                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                                @endif
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="sec">
                                                    <label>Initial Divisions</label>
                                                    <div class="c-box">
                                                        <div class="rdio-btn">
                                                            <input type="radio" name="division" checked>
                                                            <div class="radio"></div>
                                                            <span>
														<h4>Default</h4>
													</span>
                                                        </div>
                                                        <div class="rdio-btn">
                                                            <input type="radio" name="division">
                                                            <div class="radio"></div>
                                                            <span>
														<h4>Blank</h4>
													</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button style="border: none" type="submit" class="crt">Create</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>

        jQuery(document).ready(function () {
            jQuery('.icon-menu').on('click', function () {

                jQuery('.nav-kick').slideToggle('fast');
            });

            jQuery('.adv').on('click', function (e) {
                e.preventDefault();
                jQuery('.adv-div').toggleClass('active');
            });

        });

    </script>
@endsection
