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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="create">
                        <h2>Tournaments Hosted With Kick Boxing</h2>
                        <p>Let's get you started on your first tournament.</p>
                        <form method="post" action="{{ route('tournament.store') }}">
                            @csrf
                            <div class="cr-box">
                                <div class="ab-tour">
                                    <h2>About Your Tournament</h2>
                                    <div class="fld">
                                        <label>Tournament Name</label>
                                        <input class="form-control" type="text" name="tournament_name">
                                    </div>
                                    <div class="fld">
                                        <label>Martial Art</label>
                                        <div class="icn">
                                            <select id="martialArt" class="form-control" name="martialArt">
                                                <option>- Select Martial Art -</option>
                                                @foreach($martialArt as $martialArts)
                                                    <option value="{{ $martialArts->id }}">{{ $martialArts->name }}</option>
                                                @endforeach
                                            </select>
                                              
                                                @foreach($descipline as $desciplines)
                                                <div class="check-box">
                                    <input type="checkbox" name="descipline[]" value="{{$desciplines->id}}">
                                    <span class="check"></span>
                                    <label>{{ $desciplines->name }}</label> 
                                
                                </div> 
                                                
                                                
                                                @endforeach

                                                 
                                           
                         
                                         
                                        </div>
                                    </div>
                                    <div class="fld">
                                        <label>Date</label>
                                        <div class="dp">
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="date">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tournament_descipline"></div>
                                </div>
                                @if(!auth()->check())
                                    <div class="abyou">
                                        <h2>About You</h2>

                                        <div class="form">
                                            <label class="ryt">Name
                                                <input type="text" name="name" placeholder="First Name">
                                            </label>
                                            <label class="ryt">Email
                                                <input type="email" name="email" placeholder="Email">
                                            </label>
                                            <label class="lft">Password
                                                <input type="password" name="password" placeholder="Password">
                                            </label>

                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-4 offset-5">
                                        <button type="submit" class="save_button">Create Tournament</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function (){
            $('#martialArt').on('change', function() {
                var value = this.value;
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: "GET",
                    url: "/get/tournament/descipline",
                    data: {
                        id: value,
                        _token: _token,
                    },
                    success: function (result) {
                        $('#tournament_descipline').html(result);
                    }

                });

            });
        });
    </script>
@endsection
