@extends('frontend.app')
@section('title')
    <title>Tournament | {{ $tournament->name }}</title>
@endsection
@section('link')
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <span>{{ $month . $today }} @if(!empty($tournament->final_registration_date)) to {{$tournament->final_registration_date}} @endif</span>
    </section>

    @include('frontend.tournament.header')

    <section>
        <div class="compe">
            <div class="container">
                <div class="row">
                    @if($tournament->tournamentUser->email == '')
                        <div class="col-xl-12">
                            <p>Complete your profile so you'll be able log in later. <a href="{{ route('account.setting', $tournament->tournamentUser->slug) }}">Profile</a></p>
                        </div>
                    @endif
                    <div class="col-xl-12">
                        <div class="un-til">
                            <div class="col-xl-5">
                                <div class="left">
                                    <div class="reg-box">
                                        <a href="{{route('event.newcompetitor',$tournament->slug)}}">Register Competitor</a>
                                        <a href="{{route('tournament.orgnaization',$tournament->slug)}}">Register School</a>
                                    </div>@if(auth()->check())
                                    <div class="box">
                                        <p>Hosted by:<br> {{ auth()->user()->name }}&nbsp &nbsp{{auth()->user()->email}} &nbsp &nbsp {{auth()->user()->phone}}</p><br><br>
                                        @if(!empty($tournament->final_registration_date))
                                        <p>Registration deadline: <br>{{$tournament->final_registration_date}}
                                            <?php $fdate = $tournament->date;
                                                  $tdate = $tournament->final_registration_date;
                                                
                                                  $datetime1 = strtotime($fdate); 
                                                  $datetime2 = strtotime($tdate); 
                                                  if ($datetime1<$datetime2) {
                                                     echo $days = (int)(($datetime2 - $datetime1)/86400)."remaining days";
                                                      
                                                  }else{
                                                 echo $days = (int)(($datetime2 - $datetime1)/86400)." days ago";
                                              }
                                                 
                                            ?></p>@endif
                                    </div>
                                    
                                    @else
                                     <div class="box">
                                        <p>Hosted by:<br>Guest User</p>
                                    </div>
                                    @endif
                                    <form method="GET">
                                        @csrf;
                                    @if(auth()->check())
                                        @if(auth()->user()->slug == $tournament->tournamentUser->slug)
                                            <div class="vis-box visi-box">
                                                <span>Visibility: <b>
                                                        @if($tournament->visibility == 1)
                                                            Public
                                                        @else
                                                            Private
                                                        @endif
                                                    </b></span>
                                                <a class="vis-btn" href="#">
                                                    @if($tournament->visibility == 1)
                                                        Unpublish
                                                    @else
                                                        Publish
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="vis-box">
                                                <span>Registration: <b>Closed</b></span>
                                                <a class="vis-btnn" href="#">Open</a>
                                            </div>
                                            <div class="vis-box draw-box">
                                                <span>Draws: <b>
                                                         @if($tournament->draws == 1)
                                                            Public
                                                        @else
                                                            Private
                                                        @endif
                                                    </b></span>
                                                <a class="vis-btn" href="#">
                                                    @if($tournament->draws == 1)
                                                        Unpublish
                                                    @else
                                                        Publish
                                                    @endif
                                                </a>
                                            </div>
                                        @endif
                                    @endif
                                    </form>
                                    <div class="vis-icn">
                                        <a href="#"><i class="fa fa-facebook-f"></i>Share</a>
                                        <a href="#"><i class="fa fa-twitter"></i>Share</a>
                                        <a href="#"><i class="fa fa-envelope"></i>Share</a>
                                    </div>
                                    @if(auth()->check())
                                        @if(auth()->user()->slug == $tournament->tournamentUser->slug)
                                            <a href="{{ route('general',$tournament->slug) }}" style="text-decoration: none" class="vis-set"><i class="fa fa-cog"></i>SETTINGS</a>
                                            <div class="vis-btn-box">
                                                <a href="#"><i class="fa fa-envelope"></i>SEND INVITATIONS</a>
                                                <a href="#">WEIGH-IN</a>
                                                <a href="#"><i class="fa fa-gift"></i>GIFT CARDS</a>
                                                <a href="#"><i class="fa fa-envelope"></i>EMAIL REFEREES</a>
                                                <a href="#"><i class="fa fa-file-excel-o"></i>EXPORT</a>
                                                <a href="#" class="org">CANCEL TOURNAMENT</a>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>

                            <div class="col-xl-7">
                                <div class="right">
                                    @if(auth()->check())
                                        @if(auth()->user()->slug == $tournament->tournamentUser->slug)
                                            <div class="gen-box">
                                                <h2>General Information <a href="#" class="edit">Edit</a></h2>
                                                <form class="genform" style="display: none" method="post" action="{{ route('update.tournament.description') }}">
                                                    @csrf
                                                    <input name="id" type="hidden" value="{{ $tournament->id }}">
                                                    <input name="slug" type="hidden" value="{{ $tournament->slug }}">
                                                    <textarea name="description" placeholder="(...)">{{ $tournament->description ?? '' }}</textarea>
                                                    <button class="save_button" type="submit">Save</button>
                                                    <a href="#" id="desc_cancel">Cancel</a>
                                                </form>
                                                <p style="float:left; margin-left: 25px; margin-top: 10px">{{ $tournament->description ?? '' }}</p>
                                            </div>
                                            <div class="ev-box">
                                                <span>Events</span>
                                                <a href="{{ route('new.tournament.event', $tournament->slug) }}">New Event</a>
                                                <a href="{{ route('import.event') }}">Import Event</a>
                                                <a href="#">Event Settings</a>
                                            </div>
                                        @else
                                            <div class="gen-box">
                                                <h2>General Information</h2>
                                                <p style="float:left; margin-left: 25px; margin-top: 10px">{{ $tournament->description ?? '' }}</p>
                                            </div>
                                            <div class="ev-box">
                                                <span>Events</span>
                                            </div>
                                        @endif
                                    @endif
                                   
                                    @foreach($tournament->tournamentEvent as $tounamentEvents)
                                        <div class="bg-box">
                                            <h3>{{ $tounamentEvents->name }}</h3>
                                            <span class="link">
                                                <a href="{{ route('event.division', ['slug' => $tournament->slug, 'slug2' => $tounamentEvents->slug]) }}">Divisions</a>
                                                @if(auth()->check())
                                                    @if(auth()->user()->slug == $tournament->tournamentUser->slug)
                                                        <a href="{{route('event.categories',['slug'=>$tournament->slug,'slug2'=>$tounamentEvents->slug])}}">Categories</a>
                                                        <a href="{{route('event.newcompetitor',$tournament->slug)}}">Competitors (0)</a>
                                                        <a href="#">Registration Form</a>
                                                        <a href="{{route('event.setting',['slug'=>$tournament->slug,'slug2'=>$tounamentEvents->slug])}}">Settings</a>
                                                    @endif
                                                @endif
                                            </span>
                                        </div>
                                    @endforeach
                                    <div class="ven-box">
                                        @if(auth()->check())
                                            @if(auth()->user()->slug == $tournament->tournamentUser->slug)
                                                <h4>Venue</h4>
                                                <span>
										            <a href="{{ route('venue.setting') }}">Add Venue</a>
									            </span>
                                            @endif
                                        @endif
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
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        jQuery(document).ready(function(){
            jQuery('.icon-menu').on('click',function(){

                jQuery('.nav-kick').slideToggle('fast');
            });

            $('.edit').on('click',function(e){
                e.preventDefault();
                $('.genform').show();
            });

            $('#desc_cancel').on('click',function(e){
                e.preventDefault();
                $('.genform').hide();
            });

            $('.visi-box .vis-btn').click(function(e){
                e.preventDefault();
                if ($.trim($(this).text()) == 'Publish') {
                    $(this).text('Unpublish');
                    $(this).parent('.visi-box').find('span b').text('Publish');
                    var value = "{{ $tournament->id }}";
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: "GET",
                        url: "/change/tournament/visibility",
                        data: {
                            id: value,
                            visibility_id: 1,
                            _token: _token,
                        },
                        success: function () {

                        }

                    });
                }
                else {
                    $(this).text('Publish');
                    $(this).parent('.visi-box').find('span b').text('Private');
                    var value = "{{ $tournament->id }}";
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: "GET",
                        url: "/change/tournament/visibility",
                        data: {
                            id: value,
                            visibility_id: 0,
                            _token: _token,
                        },
                        success: function () {

                        }

                    });
                }
            });

            $('.draw-box .vis-btn').click(function(e){
                e.preventDefault();
                if ($.trim($(this).text()) == 'Publish') {
                    $(this).text('Unpublish');
                    $(this).parent('.draw-box').find('span b').text('Publish');
                    var value = "{{ $tournament->id }}";
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: "GET",
                        url: "/change/tournament/draw",
                        data: {
                            id: value,
                            draw_id: 1,
                            _token: _token,
                        },
                        success: function () {

                        }

                    });
                }
                else{
                    $(this).text('Publish');
                    $(this).parent('.draw-box').find('span b').text('Private');
                    var value = "{{ $tournament->id }}";
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: "GET",
                        url: "/change/tournament/draw",
                        data: {
                            id: value,
                            draw_id: 0,
                            _token: _token,
                        },
                        success: function () {

                        }

                    });
                }
            });

            $('.vis-btnn').click(function(e){
                e.preventDefault();
                if ($.trim($(this).text()) == 'Open') {
                    $(this).text('Close');
                    jQuery('.reg-box').show();
                    $(this).parent('.vis-box').find('span b').text('Open');
                }else{
                    $(this).text('Open');
                    jQuery('.reg-box').hide();
                    $(this).parent('.vis-box').find('span b').text('Close');
                }
            });

            @if(\Session::has('message'))
            $.toast({
                heading: 'Success!',
                position: 'top-center',
                text: '{{session()->get('message')}}',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 3000,
                stack: 6
            });
            @endif

        });
    </script>
@endsection
