@extends('frontend.app')
@section('title')
    <title>Image</title>
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
                            <h2>Settings: Image</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @include('frontend.setting.sidebar')

                    <div class="col-xl-8">
                        <div class="tab-content">
                         <form method="post" action="{{route('save.image',$tournament->slug)}}">
                            @csrf;
                            <div class="text-style">
                                <div class="tab-img">
                                    <div class="vd">
                                        <label>Logo</label>
                                        <div class="box">
                                            <input type="file" name="image">
                                            <p>Max size 8192 x 8192. Format must be PNG or JPEG.</p>
                                        </div>
                                    </div>
                                    <div class="vd">
                                        <label>Secondary Logo</label>
                                        <div class="box">
                                            <input type="file" name="S_logo">
                                            <p>Max size 8192 x 8192. Format must be PNG or JPEG.</p>
                                        </div>
                                    </div>
                                    <div class="vd">
                                        <label>Cover Photo</label>
                                        <div class="pp">
                                            <div class="box">
                                                <input type="file" name="c_pic">
                                                <p>Max size 8192 x 8192. Format must be PNG or JPEG.</p>
                                            </div>
                                            <p>This image is used as a background to the element at the top of this
                                                page.</p>
                                        </div>
                                    </div>
                                    <div class="vd">
                                        <label>Facebook Photo</label>
                                        <div class="pp">
                                            <div class="box">
                                                <input type="file" name="f_pic">
                                                <p>Max size 8192 x 8192. Format must be PNG or JPEG.</p>
                                            </div>
                                            <p>This image is used when this tournament is shared of Facebook.</p>
                                        </div>
                                    </div>
                                    <div class="vd">
                                        <button type="submit">Save</button>
                                        <!-- <a href="#" class="btn">Save</a> -->
                                    </div>
                                </div>
                            </div>
</form>
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
