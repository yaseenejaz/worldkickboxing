@extends('frontend.app')
@section('title')
    <title>License</title>
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
                            <h2>Settings: License</h2>
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
                                        <h2>Privacy Policy</h2>
                                        <div class="txx">
                                            <label>Privacy Policy</label>
                                            <div class="half">
                                                <textarea class="editable-inline">(click to edit)</textarea>
                                                <p>Describe how you use personal data that is collected into Kihapp, and
                                                    who can access it.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <h2>Data Retention</h2>
                                        <div class="txx">
                                            <label>Automatically erase<br>personal data:</label>
                                            <div class="half">
                                                <div class="cmp-arr">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                                <p>When this is enabled, all personal data that is not required to
                                                    display results is automatically erased after the given time. The
                                                    erasure happens at the end of each month.</p>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="{{ asset('frontend/js/bootstrap-editable.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
@endsection
