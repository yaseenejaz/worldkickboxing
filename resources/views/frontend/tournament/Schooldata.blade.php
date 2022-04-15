@extends('frontend.app')
@section('title')
    <title>School data</title>
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



<section>
	<div class="compe">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					
					<div class="data">
						<div class="log">
							<div class="hd-bg">
								<h4>Logo</h4>
							</div>
						 	<span>
						 		{{$Schools->name}}
						 		<a href="#"><i class="fa fa-chevron-double-left"></i>Registration</a>
						 	</span>
						</div>
						<div class="btn-lst">
							<a href="{{route('event.newcompetitor',$Schools->slug)}}"><i class="fa fa-plus"></i>New Competitor</a>
							<a href="#"><i class="fa fa-print"></i>Print..</a>
							<a href="#"><i class="fa fa-pencil"></i>Edit Divisions</a>
						</div>
						<div class="txt">
							@if(!empty($competitor))
							<?php
					        $count=0;
					        ?>
					        	@foreach($competitor as $compitator)
							<?php
                              $count++;
							?>@endforeach
						
							<h2>Competitors({{$count}})</h2>
							@endif
							<h6>New Competitor</h6>
						</div>
						<div class="sr-box">
							<input type="text" name="search" placeholder="Search">
							<div class="ic">
								<i class="fa fa-search"></i>
							</div>
						</div>
					
						@if(!empty($competitor))
						<table id="example" class="table table-striped table-bordered" style="width:100%">
					        <thead>
					            <tr>
					                <th class="cen one">#</th>
					                <th class="two">Name</th>
					                 <th class="thre">Categories</th>
					                <th class="cen one">Nationality</th>
					                <th class="cen one">Age</th>
					                <th class="cen one">Gender</th>
					               

					            </tr>
					        </thead>
					        <tbody><?php
					        $count=1;
					        ?>
					        	
					            <tr>
					            	@foreach($competitor as $compitator)
					                <td class="cen one">{{$count++}}</td>
					                <td class="bb two">{{$compitator->name}}  
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
					             
					               
									
								@foreach($descipline as $value)
					                <td class="thre">{{$value->name}}</td>
					               @endforeach
							
						
					                <td class="cen one">{{$compitator->nationality}}</td>
					                <td class="cen one">5</td>
					                <td class="cen one">Male</td>
					            </tr> 
					            @endforeach @else
					            <table id="example" class="table table-striped table-bordered" style="width:100%">
					        <thead>
					            <tr>
					                <th class="cen one">#</th>
					                <th class="two">Name</th>
					                <th class="thre">Categories</th>
					                <th class="cen one">Nationality</th>
					                <th class="cen one">Age</th>
					                <th class="cen one">Gender</th>
					            </tr>
					        </thead>
					            @endif
					           <!--  <tr>
					                <td class="cen one">100</td>
					                <td class="bb two">{{$Schools->name}}
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
					                <td class="thre"></td>
					                <td class="cen one">TUR</td>
					                <td class="cen one">5</td>
					                <td class="cen one">Male</td>
					            </tr>
					            <tr>
					                <td class="cen one">100</td>
					                <td class="bb two">aadna
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
					                <td class="thre"></td>
					                <td class="cen one">TUR</td>
					                <td class="cen one">5</td>
					                <td class="cen one">Male</td>
					            </tr>  -->        
					        </tbody>
					    </table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection