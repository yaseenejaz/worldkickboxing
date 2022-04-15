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
<section class="padd">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="cyp drw">
					<p>Complete your profile so you'll be able log in later.</p>
					<h2>Schedule</h2>

					 <div class="search-list sch">
						<a href="#">
							<i class="fa fa-plus"></i>
							<span>New Area</span>
						</a>
						<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <i class="fa fa-check"></i>
						    Select
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						    <button class="dropdown-item" type="button"><i class="fa fa-check-square-o"></i>Select All</button>
						    <button class="dropdown-item" type="button"><i class="fa fa-square-o"></i>Select None</button>
						    <button class="dropdown-item" type="button">Select All on Area 1</button>
						    <button class="dropdown-item" type="button">Select All Unassigned</button>
						  </div>
						</div>
						<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <i class="fa fa-arrow-right"></i>
						    Move
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						    <button class="dropdown-item" type="button">Move to Area 1</button>
						    <button class="dropdown-item" type="button">Move to Unassigned</button>
						  </div>
						</div>
						<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <i class="fa fa-expand"></i>
						    Split
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						    <button class="dropdown-item" type="button"><i class="fa fa-bars"></i>Split into Rounds</button>
						    <button class="dropdown-item" type="button"><i class="fa fa-code-fork"></i>Split into Branches</button>
						    <button class="dropdown-item" type="button"><i class="fa fa-bars"></i>Split into Matches</button>
						    <button class="dropdown-item" type="button"><i class="fa fa-compress"></i>Recombine</button>
						  </div>
						</div>
						<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <i class="fa fa-sort-numeric-desc"></i>
						    Order
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						    <button class="dropdown-item" type="button"><i class="fa fa-sort-numeric-desc"></i>Default Order</button>
						    <button class="dropdown-item" type="button"><i class="fa fa-sort-numeric-desc"></i>Interlace Automatically</button>
						  </div>
						</div>
						<a href="#">
							<i class="fa fa-globe"></i>
							<span>Publish</span>
						</a>				
						<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <i class="fa fa-print"></i>
						    Print
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						    <button class="dropdown-item" type="button"><i class="fa fa-print"></i>Print Match List</button>
						    <button class="dropdown-item" type="button"><i class="fa fa-print"></i>Print Running Order</button>
						  </div>
						</div>
						<a href="#">
							<i class="fa fa-globe"></i>
							<span>Cycling Screen</span>
						</a>
						<a href="#">
							<i class="fa fa-globe"></i>
							<span>Timing Settings</span>
						</a>
						<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  <i class="fa fa-check"></i>
						    Completed
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						    <button class="dropdown-item" type="button"><i class="fa fa-times"></i>Hide Completed</button>
						    <button class="dropdown-item" type="button"><i class="fa fa-check"></i>Show Completed</button>
						  </div>
						</div>
					</div>
					<div class="drw-mt">
						<div class="area">
							<div class="half">
								<h3>Area 1</h3>
							</div>
							<div class="half">
								<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  <i class="fa fa-check"></i>
								    Options
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
								    <button class="dropdown-item" type="button"><i class="fa fa-print"></i>Print Draws</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-print"></i>Print Competitors Lists</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-bars"></i>Match List</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-television"></i>Operator Scoreboard</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-television"></i>Audience Scoreboard</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-television"></i>Green Screen</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-television"></i>Staging Screen</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-sort-numeric-desc"></i>Renumber Matches</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-paint-brush"></i>Set Color Coding</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-paint-brush"></i>Clear Color Coding</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-times"></i>Delete Area</button>
								  </div>
								</div>
							</div>
							<div class="op-lnk">
								<a href="#"><i class="fa fa-television"></i>Operator Scoreboard</a>
								<a href="#"><i class="fa fa-television"></i>Audience Scoreboard</a>
								<a href="#"><i class="fa fa-bars"></i>Match List</a>
								<a href="#"><i class="fa fa-television"></i>Green Screen</a>
								<a href="#"><i class="fa fa-television"></i>Staging</a>
							</div>
							<div class="ar-box">
								<div class="scre">
									<p>0 / 0</p>
								</div>
								<span>Drop categories here.</span>
							</div>
						</div>
						<div class="area">
							<div class="half">
								<h3>Area 2</h3>
							</div>
							<div class="half">
								<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  <i class="fa fa-check"></i>
								    Options
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
								    <button class="dropdown-item" type="button"><i class="fa fa-print"></i>Print Draws</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-print"></i>Print Competitors Lists</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-bars"></i>Match List</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-television"></i>Operator Scoreboard</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-television"></i>Audience Scoreboard</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-television"></i>Green Screen</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-television"></i>Staging Screen</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-sort-numeric-desc"></i>Renumber Matches</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-paint-brush"></i>Set Color Coding</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-paint-brush"></i>Clear Color Coding</button>
								    <button class="dropdown-item" type="button"><i class="fa fa-times"></i>Delete Area</button>
								  </div>
								</div>
							</div>
							<div class="op-lnk">
								<a href="#"><i class="fa fa-television"></i>Operator Scoreboard</a>
								<a href="#"><i class="fa fa-television"></i>Audience Scoreboard</a>
								<a href="#"><i class="fa fa-bars"></i>Match List</a>
								<a href="#"><i class="fa fa-television"></i>Green Screen</a>
								<a href="#"><i class="fa fa-television"></i>Staging</a>
							</div>
							<div class="ar-box">
								<div class="scre">
									<p>0 / 0</p>
								</div>
								<span>Drop categories here.</span>
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