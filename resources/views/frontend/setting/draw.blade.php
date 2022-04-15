@extends('frontend.app')
@section('title')
    <title>Draw</title>
@endsection
@section('link')
    <style>
        .sideNavActive {
            transition: all 0.5s ease;
            background: #df4428;
            border-radius: 5px;
            color: #fff !important;
        }

        .sideNavActive a {
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
                            <h2>Settings: Draws</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @include('frontend.setting.sidebar')

                    <div class="col-xl-8">
                        <div class="tab-content">

                            <div class="text-style">
                                <div class="tab-dra">
                                    <div class="brak">
                                        <h2>Bracketing</h2>
                                        <div class="alll">
                                            <div class="ffth">
                                                <label>Bracketing Strategy</label>
                                            </div>
                                            <div class="svnth">
                                                <div class="rad-txt">
                                                    <div class="rbxx">
                                                        <input type="radio" name="raid">
                                                        <div class="rado"></div>
                                                        <label>Geographically Balanced (default)</label>
                                                    </div>
                                                    <p>Keep competitors from the same school, city, or
                                                        country on different sides of the draw (when possible.)</p>
                                                </div>
                                                <div class="rad-txt">
                                                    <div class="rbxx">
                                                        <input type="radio" name="raid">
                                                        <div class="rado"></div>
                                                        <label>Reverse Geograhically Balanced</label>
                                                    </div>
                                                    <p>Keep competitors from the same school on the
                                                        same side of the draw (when possible.)</p>
                                                </div>
                                                <div class="rad-txt">
                                                    <div class="rbxx">
                                                        <input type="radio" name="raid">
                                                        <div class="rado"></div>
                                                        <label>Random</label>
                                                    </div>
                                                    <p>Distribute competitors randomly.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="alll">
                                            <div class="ffth">
                                                <label>Avoid consecutive bouts</label>
                                            </div>
                                            <div class="svnth">
                                                <div class="rad-txt">
                                                    <div class="rbxx">
                                                        <input type="radio" name="raid">
                                                        <div class="rado"></div>
                                                        <label>Yes (default)</label>
                                                    </div>
                                                </div>
                                                <div class="rad-txt">
                                                    <div class="rbxx">
                                                        <input type="radio" name="raid">
                                                        <div class="rado"></div>
                                                        <label>No</label>
                                                    </div>
                                                    <p>When this is enabled, a competitor who advances
                                                        from the last bout of an elimination round won't
                                                        compete in the first bout of the second round.</p>
                                                </div>
                                                <a href="#">Save</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="brak brkg">
                                        <h2>Competitors</h2>
                                        <div class="svnth">
                                            <div class="cmp">
                                                <h4>Competitor 1</h4>
                                                <div class="cmp-con">
                                                    <div class="con-sec">
                                                        <label>Color</label>
                                                        <div class="cmp-arr">
                                                            <select>
                                                                <option selected="selected">Red</option>
                                                                <option>Blue</option>
                                                                <option>White</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="con-sec">
                                                        <label>Label</label>
                                                        <a href="#" class="editable-inline">Hong</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cmp">
                                                <h4>Competitor 2</h4>
                                                <div class="cmp-con">
                                                    <div class="con-sec">
                                                        <label>Color</label>
                                                        <div class="cmp-arr">
                                                            <select>
                                                                <option>Red</option>
                                                                <option selected="selected">Blue</option>
                                                                <option>White</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="con-sec">
                                                        <label>Label</label>
                                                        <a href="#" class="editable-inline">Chong</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="brak">
                                        <h2>Printing</h2>
                                        <div class="alll">
                                            <div class="ffth">
                                                <label>Print extra space</label>
                                            </div>
                                            <div class="svnth">
                                                <div class="cmp-arr cmp-arr-wid">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                                <p>Print extra empty bouts in draws to
                                                    accommodate manual changes.</p>
                                            </div>
                                        </div>
                                        <div class="alll">
                                            <div class="ffth">
                                                <label>Print draw hints</label>
                                            </div>
                                            <div class="svnth">
                                                <div class="cmp-arr cmp-arr-wid">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                                <p>Print draw hints like "Winner of 1" in draws.</p>
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
