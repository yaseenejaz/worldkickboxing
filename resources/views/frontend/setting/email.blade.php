@extends('frontend.app')
@section('title')
    <title>Email</title>
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
                            <h2>Settings: Email</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @include('frontend.setting.sidebar')

                    <div class="col-xl-8">
                        <div class="tab-content">

                            <div class="text-style">
                                <div class="tab-eml">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="txt">
                                                <h3>Registration Receipt to Registrant and Competitor</h3>
                                                <p>After a competitor or coach is registered, this email is sent to the
                                                    person who made the registration. A copy is sent to the competitor
                                                    or coach, if they have an email address. Coach emails are not
                                                    affected by the subject and custom text settings.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="hlf">
						 					<span>
						 						<label>Enabled</label>
						 						<div class="arr-sel">
						 							<select>
						 								<option>Yes</option>
						 								<option>No</option>
						 							</select>
						 						</div>
						 					</span>
                                                <span>
						 						<label>Subject</label>
						 						<div class="dble">
						 							<input type="text" name="subject" class="editable-inline"
                                                           placeholder="You're going to %{tournament_name}!">
						 							<p>Variables: %{tournament_name}, %{school_name}, %{competitor_name}</p>
						 						</div>
						 					</span>
                                                <span>
						 						<label>Custom Text</label>
						 						<div class="dble">
						 							<textarea type="text" name="subject" class="editable-inline">(click to edit)</textarea>
						 							<p>This text is added after the first paragraph. Some HTML will work.</p>
						 						</div>
						 					</span>
                                                <span>
						 						<label>Preview</label>
						 						<a href="#">Send Preview</a>
						 					</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="txt">
                                                <h3>Registration Receipt to Host</h3>
                                                <p>This email is sent to the host after a competitor or coach is
                                                    registered.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="hlf">
						 					<span>
						 						<label>Enabled</label>
						 						<div class="arr-sel">
						 							<select>
						 								<option>Yes</option>
						 								<option>No</option>
						 							</select>
						 						</div>
						 					</span>
                                                <span>
						 						<label>Subject</label>
						 						<div class="dble">
						 							<input type="text" name="subject" class="editable-inline"
                                                           placeholder="shumail@gmail.com">
						 							<p>Separate multiple addresses with commas.</p>
						 						</div>
						 					</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="txt">
                                                <h3>Registration Receipt to School</h3>
                                                <p>After a competitor or coach is registered, this email is sent to the
                                                    contact email address of their school. Coach emails are not affected
                                                    by the subject setting.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="hlf">
						 					<span>
						 						<label>Enabled</label>
						 						<div class="arr-sel">
						 							<select>
						 								<option>Yes</option>
						 								<option>No</option>
						 							</select>
						 						</div>
						 					</span>
                                                <span>
						 						<label>Subject</label>
						 						<div class="dble">
						 							<input type="text" name="subject" class="editable-inline"
                                                           placeholder="%{competitor_name} of %{school_name} has been entered into %{tournament_name}">
						 							<p>Variables: %{tournament_name}, %{school_name}, %{competitor_name}</p>
						 						</div>
						 					</span>
                                                <span>
						 						<label>Preview</label>
						 						<a href="#">Send Preview</a>
						 					</span>
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
