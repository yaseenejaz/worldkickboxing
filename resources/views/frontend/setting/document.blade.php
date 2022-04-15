@extends('frontend.app')
@section('title')
    <title>Document</title>
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
                    <div class="col-xl-12">
                        <p>Complete your profile so you'll be able log in later.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tabbs-hed">
                            <h2>Settings: Document</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @include('frontend.setting.sidebar')

                    <div class="col-xl-8">
                        <div class="tab-content">

                            <div class="text-style">
                                <div class="doc-tab">
                                    <div class="hds">
                                        <h2>Documents <a href="#" data-toggle="modal" data-target="#documentModal">New
                                                Document</a></h2>
                                        <div class="modal fade paypal" id="documentModal" tabindex="-1" role="dialog"
                                             aria-labelledby="documentModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5>New Document</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="fld">
                                                            <label>Title</label>
                                                            <input type="text" name="title" placeholder="Title">
                                                        </div>
                                                        <div class="fld">
                                                            <label>File</label>
                                                            <input type="file" name="file">
                                                        </div>
                                                        <a href="#" class="modal-btn">Save</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gr-bx">
                                        <p>There are no advanced pricing rules.</p>
                                    </div>
                                    <p>Documents are things like invitations, rulebooks, travel information, etc.
                                        Documents are downloadable from the front page.</p>
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
