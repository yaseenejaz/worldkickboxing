@extends('frontend.app')
@section('title')
    <title>Permission</title>
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
                            <h2>Settings: Permission</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @include('frontend.setting.sidebar')

                    <div class="col-xl-8">
                        <div class="tab-content">

                            <div class="text-style">
                                <div class="tab-per">
                                    <h2>Invite New User</h2>
                                    <div class="per-for">
                                        <input class="for-fe" type="email" name="email" placeholder="Email">
                                        <div class="for-fe arr">
                                            <select>
                                                <option>Official</option>
                                                <option>Admin</option>
                                                <option>Observer</option>
                                            </select>
                                        </div>
                                        <a href="#">Invite by Email</a>
                                    </div>
                                    <table>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                        </tr>
                                        <tr>
                                            <td>Guest User</td>
                                            <td>shumailansari490@gmail.com</td>
                                            <td>Owner</td>
                                        </tr>
                                    </table>
                                    <div class="tx">
                                        <p>Admins can do everything owners can, except change the owner.</p>
                                        <p>Observers can see most things admins can, but can't make changes.</p>
                                        <p>Officials can manage the areas assigned to them. Officials can optionally be
                                            also made observers.</p>
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
