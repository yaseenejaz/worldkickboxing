@extends('frontend.app')
@section('title')
    <title>Settings | {{ $slug }}</title>
@endsection
@section('link')
    <style>
        .navActive {
            transition: all 0.5s ease;
            background: #df4428;
            border-radius: 5px;
            color: #fff !important;
        }

        .navActive a {
            color: #fff !important;
        }
    </style>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet"
          id="bootstrap-css">
@endsection
@section('content')
    <section class="untitled">
        <h2>{{ $tournament->name }}</h2>
        <?php
        $date = explode("-", $tournament->date);
        $month = DateTime::createFromFormat('!m', $date[1]);
        $month = $month->format('F');
        $today = date(" " . $date[2] . ", " . $date[0]);
        ?>
        <span>{{ $month . $today }}</span>
    </section>
    @include('frontend.tournament.header')
    <section class="ver-tab">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2>{{ $event->name }}</h2>
                    <div class="pow-in">
                        @include('frontend.event.navHeader')

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active in" id="setting" role="tabpanel"
                                 aria-labelledby="setting-tab">
                                <div class="ev-set pat-ev-set">
                                    <h2>Setting</h2>
                                    <div class="n-ev">
                                        <div class="lst">
                                            <label>Discipline</label>
                                            <div class="sel-down">
                                                <select name="descipline">
                                                    @foreach($descipline as $desciplines)
                                                        @if($event->descipline_id == $desciplines->id)
                                                            <option value="{{ $desciplines->id }}" selected>{{ $desciplines->name }}</option>
                                                        @else
                                                            <option value="{{ $desciplines->id }}">{{ $desciplines->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="lst">
                                            <label>Format</label>
                                            <div class="c-box">
                                                @foreach(\App\Descipline::desciplineFormat as $desciplineFormat)
                                                    <div class="rdio-btn">
                                                        <input {{ $desciplineFormat['checked'] }} type="radio"
                                                               name="formation"
                                                               value="{{ $desciplineFormat['id'] }}">
                                                        <div class="radio"></div>
                                                        <span>
											<h4>{{ $desciplineFormat['label'] }}</h4>
											<p>{{ $desciplineFormat['text'] }}</p>
										</span>
                                                    </div>
                                                @endforeach
                                                <div class="rdio-btn">
                                                    <input type="checkbox" name="check">
                                                    <div class="radio"></div>
                                                    <span>
												<h4>Use 3rd place matches</h4>
											</span>
                                                </div>
                                                <div class="rdio-btn">
                                                    <input type="checkbox" name="check">
                                                    <div class="radio"></div>
                                                    <span>
												<h4>Prevent online registrations</h4>
											</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lst">
                                            <label>*Name</label>
                                            <input type="text" name="name" placeholder="Pattern" value="{{ $event->name }}">
                                        </div>
                                        <div class="lst">
                                            <label>Identifier</label>
                                            <input type="text" name="name" placeholder="P" value="{{ $event->identifier }}">
                                        </div>
                                        <div class="lst">
                                            <label>Position</label>
                                            <div class="sel-down">
                                                <select name="position">
                                                    @for($i = 1; $i <= count($tournamentEventPosition); $i++)
                                                        @if($event->position == $i)
                                                            <option selected value="{{ $i }}">{{ $i }}</option>
                                                        @else
                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                        @endif
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="lst">
                                            <label>Cover Photo</label>
                                            <input type="file" name="file" class="fle-bx">
                                        </div>
                                        <div class="lst">
                                            <div class="ajw">
                                                <p>Scoreboard ITF Patterns (10/6/6/6/6)</p>
                                                <a href="#" class="crt">Save</a>
                                            </div>
                                        </div>
                                        <div class="lst">
                                            <div class="ajw">
                                                <h2>Remove</h2>
                                                <a href="#" class="crt">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

@endsection
@section('script')
<!--     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
@endsection
