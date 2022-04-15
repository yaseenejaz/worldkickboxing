@extends('frontend.app')
@section('title')
    <title>Edit PDF</title>
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
  
    <section class="in-nav">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <ul>
                       <li><a href="{{ route('index') }}">home</a></li>
                    <li><a href="{{route('tournament.registration')}}">registration</a></li>
                    <li><a href="{{route('tournament.newcompetitor')}}">competitors</a></li>
                        <li><a href="#">categories</a></li>
                        <li><a href="#">draws</a></li>
                        <li><a href="#">schedule</a></li>
                        <li><a href="#">live</a></li>
                        <li><a href="#">results</a></li>
                    </ul>
                </div>
                <div class="col-xl-4">
                    <div class="set-btn">
                        <a href="#">
                            <img src="images/wheel.png">
                            <span>SETTINGS</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pdf-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <h3>Code</h3>
                    <textarea class="form-generator" value="<div class="certificate landscape">
                    <img class="background" src="https://s3-eu-west-1.amazonaws.com/kihapp-assets/cert-bg-hq.png" />

                    <div class="yellow"></div>

                    <div class="top left gray small">
                        <img src="https://s3-eu-west-1.amazonaws.com/kihapp-assets/transparent-square-logo.png"/>
                    </div>

                    <div class="top right gray small">
                        %{tournament_name}<br/>
                        %{date}
                    </div>

                    <h1 class="versal">Certificate</h1>

                    <div class="inner">
                        <p class="who">%{competitor_name}</p>

                        <p class="place">
                            has achieved

                            %{place_ordinal} place in the category

                            <br/> %{category_name}
                        </p>
                        <p class="participation">
                            has participated in the category <br/> %{category_name}
                        </p>
                        <p class="category"></p>
                    </div>

                    <div class="logos">
                        <img src="%{tournament_logo_url}"/>
                        <img src=""/>
                        <img src=""/>
                    </div>
                    <div class="signature">
                        <div class="signee block">
                            %{signature} <br/>
                            %{club}
                        </div>
                    </div>
                </div>

                <style type="text/css">
                    @font-face { font-family: versal; src: url('https://s3-eu-west-1.amazonaws.com/kihapp-assets/HoeflerText-Black.ttf') format("truetype"); }

                    @font-face { font-family: ff2; src: url('https://s3-eu-west-1.amazonaws.com/kihapp-assets/DIN+Alternate+Bold.ttf') format("truetype"); }

                    @font-face { font-family: longhand; src: url('https://s3-eu-west-1.amazonaws.com/kihapp-assets/SnellRoundhand.ttc') format("truetype"); }

                    @font-face { font-family: versal; src: url('https://s3-eu-west-1.amazonaws.com/kihapp-assets/HoeflerText-Black.ttf') format("truetype"); }
                    @font-face { font-family: thinxx; src: url('https://s3-eu-west-1.amazonaws.com/kihapp-assets/HoeflerText-Regular.ttf') format("truetype"); }

                    @font-face { font-family: ff2; src: url('https://s3-eu-west-1.amazonaws.com/kihapp-assets/DIN+Alternate+Bold.ttf') format("truetype"); }

                    @font-face { font-family: longhand; src: url('https://s3-eu-west-1.amazonaws.com/kihapp-assets/SnellRoundhand.ttc') format("truetype"); }

                    .versal{ font-family: versal; text-transform: uppercase }

                    .block { font-family: ff2; text-transform: uppercase }

                    .certificate h1 { font-size: 60px; padding: 190px 0; z-index: 3; position: relative }

                    .certificate .top { top: 15%; font-family: longhand !important; font-size: 14px; font-weight: normal }
                    .certificate .left { left: 12% }
                    .certificate .right { right: 12%; text-align: right; line-height: 18px }

                    .certificate .inner { top: -110px }

                    .top img { height: 100px; position: relative; top: -40px }

                    .certificate .who { font-family: versal; border-bottom: 1px solid #aaa; width: 50%; height: 38px; margin-left: 25%; padding-bottom: 0 }

                    .certificate .place, .certificate .participation, .certificate .category { font-family: longhand; line-height: 45px }

                    .certificate .place, .certificate .participation { font-size: 30px }

                    .certificate .signature { text-align: center; right: 13%; bottom: 13.5%; width: auto }

                    .certificate .signature .signee { padding: 10px 60px 0 60px; border-top: 1px solid #aaa }

                    img.background{ width: 100%; position: absolute; left: 0px; top: 0px; z-index: 1 }

                    .yellow{ background: #fffbeb; width: 81%; height: 81%; position: absolute; z-index: 0; left: 9.5%; top: 10.5% }

                    .logos { position: absolute; left: 12%; bottom: 13%; height: 80px }
                    .logos img { height: 100%; margin-right: 5px }

                </style>
                ">
                </textarea>
                <div class="orientation">
                    <div class="sec">
                        <label>Orientation:</label>
                        <div class="or-sel">
                            <select>
                                <option>Landscape</option>
                                <option>Portrait</option>
                            </select>
                        </div>
                    </div>
                    <div class="sec">
                        <label>Margin:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="2.5" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">mm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="orientation">
                    <a class="revert" href="#">Save Changes</a>
                    <a class="revert" href="#">Revert to Default</a>
                </div>
            </div>
            <div class="col-xl-6">
                <h3>Preview <a href="#">Open in new tab</a></h3>
                <embed src="{{ asset('frontend/images/certificate.pdf') }}"></embed>
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
