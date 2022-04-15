@extends('frontend.app')
@section('title')
    <title>Registration</title>
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
    {{--    <link href="{{ asset('frontend/css/bootstrap-editable.css') }}" rel="stylesheet"/>--}}
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
                   <!--  <div class="col-xl-12">
                        <p>Complete your profile so you'll be able log in later.</p>
                    </div> -->
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tabbs-hed">
                            <h2>Settings: Registration</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @include('frontend.setting.sidebar')

                    <div class="col-xl-8">
                        <div class="tab-content">
                            <div class="text-style">
                                <div class="tab-reg">
                                    <div class="sc">
                                        <h2>Registration</h2>
                                        <div class="fld">
                                            <label>Registration Status</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Open</option>
                                                        <option>Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>Registration is open</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>To anyone</option>
                                                        <option>By invitation only</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>New schools can be created by</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Anyone</option>
                                                        <option>Admins only</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>Allow amendments</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                                <p>When amendments are enabled, people can change registrations that
                                                    they've already completed, and pay the difference at checkout.</p>
                                                <p>They can also withdraw from categories, but won't automatically be
                                                    refunded.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc">
                                        <div class="fld">
                                            <label>Max. categories per competitor</label>
                                            <div class="sel-p">
                                                <input type="text" name="competitors" class="editable-inline">
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>Assign competitor numbers automatically</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc">
                                        <h3>Registration</h3>
                                        <div class="fld">
                                            <label>Strict divisions</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>Require email address</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>Require phone number</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>Require school contact information</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>Require win-loss record</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>Competitor photos</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Off</option>
                                                        <option>Optional</option>
                                                        <option>Required</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc">
                                        <h3>Teams</h3>
                                        <div class="fld">
                                            <label>Strict divisions</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc">
                                        <h3>Coaches</h3>
                                        <div class="fld">
                                            <label>Enable coaches</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>Coach online registration</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Disabled</option>
                                                        <option>Enabled</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>Require coach photos</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc">
                                        <h3>Referees</h3>
                                        <div class="fld">
                                            <label>Enable referees</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>Referee online registration</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Disabled</option>
                                                        <option>Enabled</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>Require referee photos</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>Require referee rank information</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fld">
                                            <label>Referee classification</label>
                                            <div class="sel-p">
                                                <input type="text" name="refree" class="editable-inline"
                                                       placeholder="A, B, C, D">
                                                <p>Separate with commas. Leave empty to ask for no classification.
                                                    Values cannot contain spaces.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc">
                                        <h3>Active Categories</h3>
                                        <div class="fld">
                                            <label>Publish a list of active Categories</label>
                                            <div class="sel-p">
                                                <div class="sel-des">
                                                    <select>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                                <p>This is a public list of categories which have at least two
                                                    competitors in them.</p>
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
{{--    <script src="{{ asset('frontend/js/bootstrap-editable.min.js') }}"></script>--}}
@endsection
