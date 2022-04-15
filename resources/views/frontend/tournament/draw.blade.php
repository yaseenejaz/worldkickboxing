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
        element.style {
    font-size: 38.5px;
    width: 100%;
    height: calc(50% - 0.5px);
    display: -webkit-inline-box;
    justify-content: left;
    align-items: center;
}
.half-match.flex-centered>div {
    height: 012333333;
    align-items: center;
    left: center;
    /* display: flex; */
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
					<!-- <p>Complete your profile so you'll be able log in later.</p> -->
					<h2>Draws</h2>

					 <div class="search-list">
						<input type="text" name="Search" placeholder="Search...">
						<div class="evsel">
							Event:
							<select>
								<option>All</option>
								<option>Patterns</option>
								<option>Sparring</option>
								<option>Power Test</option>
							</select>
						</div>
						<a href="#">
							<i class="fa fa-globe"></i>
							<span>Publish</span>
						</a>				
						<a href="#">
							<img src="{{ asset('frontend/images/printer.png') }}">
							<span>Print All</span>
						</a>
						<a href="#" class="imp-sch">
							<span>Print Blank Draw</span>
						</a>
					</div>

					@if(!empty($competitors))
					
					@foreach($competitors as $competitor)
					
					<div class="drw-mt">
										<table class='b-match__metadata' border="2">
<tr>
<td class='number-and-phase text-left' style='margin-left: 0.5em'>
Round 1
</td>
<td class='continuation text-right'>

</td>
</tr>


@foreach($schools as $school)
	<tr>
		<td>
			<!-- <div class='competitor-box competitor'> -->

<!-- <span class='name competitor-name'>  -->
	{{$competitor->name}}&nbsp &nbsp &nbsp {{$school->name}}

<!-- </span> -->




<!-- <span class='name gray club-name'>
<h5></h5>
</span> -->
<!-- </div> -->
		</td>

	</tr>

</div>
<!-- <div class='competitor-box--code code hide-when-not-international' style='width: 29.880000000000003px'>
<span class='country-code gray'>PAK</span -->
</div>
@endforeach
@endforeach
	
</table>

		</div>
</div>			</div>				
					
					
					
					@endif 					

			</div>
		</div>
	</div>
</section>
@endsection