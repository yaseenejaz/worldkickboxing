@extends('frontend.app')
@section('title')
    <title>Result</title>
@endsection
@section('link')
    <style>
        .sideNavActive {
            transition: all 0.5s ease;
            background: #df4428;
            border-radius: 5px;
            color: #fff !important;
        }

        .sideNavActive a{
            color: #fff !important;
        }
    </style>
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link href="{{ asset('frontend/css/bootstrap-editable.css') }}" rel="stylesheet"/>
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

    <section>
        <div class="tabbb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <p>Complete your profile so you'll be able log in later.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tabbs-hed">
                            <h2>Settings: Result</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @include('frontend.setting.sidebar')

                    <div class="col-xl-8">
                        <div class="tab-content">

                            <div class="text-style">
                                <div class="tab-res">
                                    <div class="box">
                                        <h2>Medal tables</h2>
                                        <div class="txx">
                                            <div class="medal">Custom scoring is <span>Disabled.</span></div>
                                            <a href="#" class="enable">Enable</a>
                                            <span>Custom scoring allows you to award different amounts of points for different placements, as shown in the medal table on the results page.</span>
                                        </div>

                                        <table class="medaltable">
                                            <tr>
                                                <td class="left">1st place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">2nd place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">3rd place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">4th place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">5th place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">6th place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">7th place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">8th place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">9th place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">10th place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">11th place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">12th place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">13th place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">14th place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">15th place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">16th place</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
                                            </tr>
                                            <tr>
                                                <td class="left">Unopposed win</td>
                                                <td class="right"><input class="editable-inline" placeholder="-"> p</td>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="{{ asset('frontend/js/bootstrap-editable.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script>

        jQuery(document).ready(function(){
            jQuery('.icon-menu').on('click',function(){

                jQuery('.nav-kick').slideToggle('fast');
            });

            jQuery('.enable').on('click', function(e){
                e.preventDefault();
                jQuery('.medaltable').toggleClass('active');
            });
        });

    </script>
@endsection
