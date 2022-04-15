@extends('frontend.app')
@section('title')
    <title>Categories | {{ $slug }}</title>
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
                            <div class="tab-pane fade active in" id="categories" role="tabpanel" aria-labelledby="categories-tab">

                                <div class="search-list">
                                    <input type="text" name="Search..." placeholder="Search...">
                                    <a href="#">
                                        <img src="{{ asset('frontend/images/merge.png') }}">
                                        <span>Merge</span>
                                    </a>
                                    <a href="{{ route('event.division.edit', ['slug' => $slug, 'slug2' => $event->slug]) }}">
                                        <i class="fa fa-pencil"></i>
                                        <span>Edit Divisions</span>
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('frontend/images/printer.png') }}">
                                        <span>Print</span>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-file"></i>
                                        <span>Resumer</span>
                                    </a>
                                    <a href="#" class="imp-sch">
                                        <span>Scorecard Template</span>
                                    </a>
                                </div>

                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th><span>ID</span></th>
                                        <th><b>Name</b></th>
                                        <th><span>Size</span></th>
                                        <th></th>
                                        <th><b>Format</b></th>
                                        <th>Version</th>
                                        <th>Changes</th>
                                        <th>Areas</th>
                                        <th>Progress</th>
                                        <th>Done</th>
                                        <th>Results</th>
                                        <th>Certificates</th>
                                        <th>Awarded</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="rad-txt">
                                                <input type="checkbox" name="raid">
                                                <div class="rado"></div>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>incididunt</td>
                                        <td class="carot"><span>0</span></td>
                                        <td>
                                            <div class="dropdown show">
                                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-cog"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-eye"></i>View Draw</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-bars"></i>View Match List</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-print"></i>Print Draw</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-print"></i>Print Competitor List</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-file"></i>Print Blank Draw</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="flx">
                                            <div class="slct">
                                                <select>
                                                    <option>Scorecard</option>
                                                    <option>Elimination</option>
                                                </select>
                                            </div>
                                            Template:
                                            <div class="slct">
                                                <select>
                                                    <option>None</option>
                                                    <option>Template</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0 / 0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="rad-txt">
                                                <input type="checkbox" name="raid">
                                                <div class="rado"></div>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>incididunt</td>
                                        <td class="carot"><span>0</span></td>
                                        <td>
                                            <div class="dropdown show">
                                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-cog"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-eye"></i>View Draw</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-bars"></i>View Match List</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-print"></i>Print Draw</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-print"></i>Print Competitor List</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-file"></i>Print Blank Draw</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="flx">
                                            <div class="slct">
                                                <select>
                                                    <option>Scorecard</option>
                                                    <option>Elimination</option>
                                                </select>
                                            </div>
                                            Template:
                                            <div class="slct">
                                                <select>
                                                    <option>None</option>
                                                    <option>Template</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0 / 0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="rad-txt">
                                                <input type="checkbox" name="raid">
                                                <div class="rado"></div>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>incididunt</td>
                                        <td class="carot"><span>0</span></td>
                                        <td>
                                            <div class="dropdown show">
                                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-cog"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-eye"></i>View Draw</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-bars"></i>View Match List</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-print"></i>Print Draw</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-print"></i>Print Competitor List</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-file"></i>Print Blank Draw</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="flx">
                                            <div class="slct">
                                                <select>
                                                    <option>Scorecard</option>
                                                    <option>Elimination</option>
                                                </select>
                                            </div>
                                            Template:
                                            <div class="slct">
                                                <select>
                                                    <option>None</option>
                                                    <option>Template</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0 / 0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>

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
   <!--  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
@endsection
