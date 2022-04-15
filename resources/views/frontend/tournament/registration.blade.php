@extends('frontend.app')
@section('title')
    <title>Tournament Info</title>
@endsection
@section('link')
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .save_button {
            background: #e04529;
            color: #fff;
            padding: 10px 30px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.5s ease;
            border: none;
        }
        .save_button:hover {
            transition: all 0.5s ease;
            background: #000;
        }
    </style>
@endsection
@section('content')

<<section class="untitled">
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

<section class="padd">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="cyp">
					
					<h2>Registration</h2>
				</div>
				<div class="search-list">
					<input type="text" name="Search..." placeholder="Search...">
					<a href="{{route('tournament.orgnaization',$tournament->slug)}}">
						<img src="{{ asset('frontend/images/plus.png') }}">
						<span>New School</span>
					</a>
					<a href="#">
						<img src=" {{ asset('frontend/images/envelope.png') }}">
						<span>Send Invitations</span>
					</a>
					<a href="#">
						<img src="{{ asset('frontend/images/printer.png ') }}">
						<span>Print All Schools</span>
					</a>
					<a href="#" class="imp-sch">
						<img src="{{ asset('frontend/images/black-plus.png') }}">
						<span>Import Schools...</span>
					</a>
				</div>
				@if(!empty($Schools))
				<div class="r-box">
					<p></p>
	</div>

				@else
				<div class="r-box">
					<p>No schools registered yet!</p>
					<a href="#">
						<img src="{{asset('frontend/images/wheel.png')}}">
						<span>SETTINGS</span>
					</a>
				</div>
				@endif
			</div>
		</div>
	</div>
</section>


@endsection