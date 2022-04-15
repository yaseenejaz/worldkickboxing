@extends('frontend.app')
@section('title')
    <title>Division | {{ $slug }}</title>
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
                            <div class="tab-pane fade active in" id="division" role="tabpanel" aria-labelledby="division-tab">
                                <div class="search-list">
                                    <a href="{{ route('event.division.edit', ['slug' => $slug, 'slug2' => $event->slug]) }}" class="siing">
                                        <!-- <i class="fa fa-check"></i> -->
                                        <span>Edit Divisions</span>
                                    </a>
                                </div>
                                <div class="drw-mt">
                                    <table class="pp-edt">
                                        <div id="clip">
                                            <tr>
                                                <td rowspan="3">
                                                    <a href="#" class="txt">0-12 years</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="txt">10–6.gup</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="txt">Male | Female</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a href="#" class="txt">5–1.gup</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="txt">Male | Female</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="txt">1.dan+</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="txt">Male | Female</a>
                                                </td>
                                            </tr>
                                        </div>
                                    </table>

                                    <div class="seperate">
                                        <span></span>
                                    </div>
                                    <table class="ajbb">
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 5–1.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 5–1.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 1.dan+"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 1.dan+"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 13-17 years M 10–6.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 5–1.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 5–1.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 1.dan+"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 1.dan+"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 13-17 years M 10–6.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 5–1.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 5–1.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 1.dan+"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 1.dan+"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 13-17 years M 10–6.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 5–1.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 5–1.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 1.dan+"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 1.dan+"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 13-17 years M 10–6.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 5–1.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 5–1.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 1.dan+"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 1.dan+"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 13-17 years M 10–6.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 5–1.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 5–1.gup"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 1.dan+"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 1.dan+"></td>
                                        </tr>
                                        <tr>
                                            <td><input class="km" type="text" name="num" placeholder="-"></td>
                                            <td><input class="zy" type="text" name="name" placeholder="Patterns 13-17 years M 10–6.gup"></td>
                                        </tr>
                                    </table>
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
