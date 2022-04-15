@extends('frontend.app')
@section('title')
    <title>Import Event</title>
@endsection
@section('link')
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')

    <section class="untitled">
        <h2>Untitled Tournament</h2>
        <span>May 20,2020</span>
    </section>

    @include('frontend.setting.navbar')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="imp">
                        <p>Complete your profile so you'll be able log in later.</p>
                        <div class="imp-form">
                            <h2>Import Event</h2>
                            <span>
							<h4>Event to import</h4>
							<div class="sel-down">
								<select>
									<option>Pattern</option>
									<option>Sparring</option>
									<option>Power Test</option>
									<option>Special Techniques</option>
									<option>Team Patterns</option>
									<option>Self Defence Routine</option>
									<option>Team Sparring</option>
									<option>Team Power Test</option>
									<option>Team Special Techniques</option>
									<option>Traditional Sparring</option>
								</select>
							</div>
						</span>
                            <a href="#">Import</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>

        jQuery(document).ready(function(){
            jQuery('.icon-menu').on('click',function(){

                jQuery('.nav-kick').slideToggle('fast');
            });
        });

    </script>
@endsection
