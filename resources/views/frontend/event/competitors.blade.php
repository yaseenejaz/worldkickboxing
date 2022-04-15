@extends('frontend.app')
@section('title')
    <title>Competitors | {{ $slug }}</title>
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
        $date = explode("-",$tournament->date);
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
                            <div class="tab-pane fade active in" id="competitors" role="tabpanel" aria-labelledby="competitors-tab">
                                <div class="search-list">
                                    <input type="text" name="Search..." placeholder="Search...">
                                </div>
                                <div class="pow-com">
                                    <div class="pow-box">
                                        <p>No Competitor Yet</p>
                                        <div class="btns">
                                            
                                            <a href="{{route('event.newcompetitor',$tournament->slug)}}"><i class="fa fa-plus"></i>New Competitor</a>
                                            <a href="#"><i class="fa fa-plus"></i>New School</a>
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
 <!--    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
@endsection
