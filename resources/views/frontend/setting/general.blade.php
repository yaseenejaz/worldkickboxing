@extends('frontend.app')
@section('title')
    <title>General</title>
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
                        <!-- <p>Complete your profile so you'll be able log in later.</p> -->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tabbs-hed">
                            <h2>Settings: General</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @include('frontend.setting.sidebar')

                    <div class="col-xl-8">
                        <div class="tab-content">
                          <form method="post" action="{{route('general.save',$tournament->slug)}}">
                            @csrf;
                            <div class="text-style">
                                <div class="tab-gen">
                                    <div class="gen-box">
                                        <div class="lne">
                                            <label>Name</label>
                                            <input type="text" name="name" value="{{$tournament->name}}">
                                        </div>
                                        <div class="lne">
                                            <label>Art</label>
                                            <div class="arr">
                                               <select id="martialArt" class="form-control" name="martial">
                                                <option value="{{$martial->id}}">{{$martial->name}}</option>
                                                @foreach($martialArt as $martialArts)
                                                    <option value="{{ $martialArts->id }}">{{ $martialArts->name }}</option>
                                                @endforeach
                                            </select>
                                              
                                            </div>
                                        </div>
                                        <div class="lne">
                                            <label>Date</label>
                                            <div class="dp">
                                                <div class="input-group">
                                                    <input type="date" class="form-control"value="{{$tournament->date}}" name="date">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-th"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lne">
                                            <label>Length</label>
                                            <div class="arr">
                                                <select name="length">
                                                    <option value="{{$tournament->length}}">{{$tournament->length}}</option>
                                                    <option value="1">1 Day</option>
                                                    <option value="2">2 Days</option>
                                                    <option value="3">3 Days</option>
                                                    <option value="4">4 Days</option>
                                                    <option value="5">5 Days</option>
                                                    <option value="6">6 Days</option>
                                                    <option value="7">7 Days</option>
                                                    <option value="8">8 Days</option>
                                                    <option value="9">9 Days</option>
                                                    <option value="10">10 Days</option>
                                                    <option value="11">11 Days</option>
                                                    <option value="12">12 Days</option>
                                                    <option value="13">13 Days</option>
                                                    <option value="14">14 Days</option>
                                                    <option value="15">15 Days</option>
                                                    <option value="16">16 Days</option>
                                                    <option value="17">17 Days</option>
                                                    <option value="18">18 Days</option>
                                                    <option value="19">19 Days</option>
                                                    <option value="20">20 Days</option>
                                                    <option value="21">21 Days</option>
                                                    <option value="22">22 Days</option>
                                                    <option value="23">23 Days</option>
                                                    <option value="24">24 Days</option>
                                                    <option value="25">25 Days</option>
                                                    <option value="26">26 Days</option>
                                                    <option value="27">27 Days</option>
                                                    <option value="28">28 Days</option>
                                                    <option value="29">29 Days</option>
                                                    <option value="30">30 Days</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="lne">
                                            <label>Time Zone</label>
                                            <div class="arr">
                                                <select class="selectpicker" name="timezone">
                                                    <option value="{{$tournament->timezone}}">{{$tournament->timezone}}</option>
                                                    <option value="Etc/GMT+12">(GMT-12:00) International Date Line
                                                        West
                                                    </option>
                                                    <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa
                                                    </option>
                                                    <option value="Pacific/Honolulu">(GMT-10:00) Hawaii</option>
                                                    <option value="US/Alaska">(GMT-09:00) Alaska</option>
                                                    <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US &
                                                        Canada)
                                                    </option>
                                                    <option value="America/Tijuana">(GMT-08:00) Tijuana, Baja
                                                        California
                                                    </option>
                                                    <option value="US/Arizona">(GMT-07:00) Arizona</option>
                                                    <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz,
                                                        Mazatlan
                                                    </option>
                                                    <option value="US/Mountain">(GMT-07:00) Mountain Time (US &
                                                        Canada)
                                                    </option>
                                                    <option value="America/Managua">(GMT-06:00) Central America</option>
                                                    <option value="US/Central">(GMT-06:00) Central Time (US & Canada)
                                                    </option>
                                                    <option value="America/Mexico_City">(GMT-06:00) Guadalajara, Mexico
                                                        City, Monterrey
                                                    </option>
                                                    <option value="Canada/Saskatchewan">(GMT-06:00) Saskatchewan
                                                    </option>
                                                    <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio
                                                        Branco
                                                    </option>
                                                    <option value="US/Eastern">(GMT-05:00) Eastern Time (US & Canada)
                                                    </option>
                                                    <option value="US/East-Indiana">(GMT-05:00) Indiana (East)</option>
                                                    <option value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada)
                                                    </option>
                                                    <option value="America/Caracas">(GMT-04:00) Caracas, La Paz</option>
                                                    <option value="America/Manaus">(GMT-04:00) Manaus</option>
                                                    <option value="America/Santiago">(GMT-04:00) Santiago</option>
                                                    <option value="Canada/Newfoundland">(GMT-03:30) Newfoundland
                                                    </option>
                                                    <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
                                                    <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos
                                                        Aires, Georgetown
                                                    </option>
                                                    <option value="America/Godthab">(GMT-03:00) Greenland</option>
                                                    <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
                                                    <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
                                                    <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.
                                                    </option>
                                                    <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                                                    <option value="Africa/Casablanca">(GMT+00:00) Casablanca, Monrovia,
                                                        Reykjavik
                                                    </option>
                                                    <option value="Etc/Greenwich">(GMT+00:00) Greenwich Mean Time :
                                                        Dublin, Edinburgh, Lisbon, London
                                                    </option>
                                                    <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin,
                                                        Bern, Rome, Stockholm, Vienna
                                                    </option>
                                                    <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava,
                                                        Budapest, Ljubljana, Prague
                                                    </option>
                                                    <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen,
                                                        Madrid, Paris
                                                    </option>
                                                    <option value="Europe/Sarajevo">(GMT+01:00) Sarajevo, Skopje,
                                                        Warsaw, Zagreb
                                                    </option>
                                                    <option value="Africa/Lagos">(GMT+01:00) West Central Africa
                                                    </option>
                                                    <option value="Asia/Amman">(GMT+02:00) Amman</option>
                                                    <option value="Europe/Athens">(GMT+02:00) Athens, Bucharest,
                                                        Istanbul
                                                    </option>
                                                    <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
                                                    <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                                                    <option value="Africa/Harare">(GMT+02:00) Harare, Pretoria</option>
                                                    <option value="Europe/Helsinki">(GMT+02:00) Helsinki, Kyiv, Riga,
                                                        Sofia, Tallinn, Vilnius
                                                    </option>
                                                    <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                                                    <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
                                                    <option value="Africa/Windhoek">(GMT+02:00) Windhoek</option>
                                                    <option value="Asia/Kuwait">(GMT+03:00) Kuwait, Riyadh, Baghdad
                                                    </option>
                                                    <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg,
                                                        Volgograd
                                                    </option>
                                                    <option value="Africa/Nairobi">(GMT+03:00) Nairobi</option>
                                                    <option value="Asia/Tbilisi">(GMT+03:00) Tbilisi</option>
                                                    <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                                                    <option value="Asia/Muscat">(GMT+04:00) Abu Dhabi, Muscat</option>
                                                    <option value="Asia/Baku">(GMT+04:00) Baku</option>
                                                    <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                                                    <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                                                    <option value="Asia/Yekaterinburg">(GMT+05:00) Yekaterinburg
                                                    </option>
                                                    <option value="Asia/Karachi">(GMT+05:00)
                                                        Islamabad, Karachi
                                                    </option>
                                                    <option value="Asia/Calcutta">(GMT+05:30) Chennai, Kolkata, Mumbai,
                                                        New Delhi
                                                    </option>
                                                    <option value="Asia/Calcutta">(GMT+05:30) Sri Jayawardenapura
                                                    </option>
                                                    <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
                                                    <option value="Asia/Almaty">(GMT+06:00) Almaty, Novosibirsk</option>
                                                    <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
                                                    <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
                                                    <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta
                                                    </option>
                                                    <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                    <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong
                                                        Kong, Urumqi
                                                    </option>
                                                    <option value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur,
                                                        Singapore
                                                    </option>
                                                    <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar
                                                    </option>
                                                    <option value="Australia/Perth">(GMT+08:00) Perth</option>
                                                    <option value="Asia/Taipei">(GMT+08:00) Taipei</option>
                                                    <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo
                                                    </option>
                                                    <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                                                    <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
                                                    <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                                                    <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
                                                    <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                                                    <option value="Australia/Canberra">(GMT+10:00) Canberra, Melbourne,
                                                        Sydney
                                                    </option>
                                                    <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
                                                    <option value="Pacific/Guam">(GMT+10:00) Guam, Port Moresby</option>
                                                    <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
                                                    <option value="Asia/Magadan">(GMT+11:00) Magadan, Solomon Is., New
                                                        Caledonia
                                                    </option>
                                                    <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington
                                                    </option>
                                                    <option value="Pacific/Fiji">(GMT+12:00) Fiji, Kamchatka, Marshall
                                                        Is.
                                                    </option>
                                                    <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
                                                    <!-- @foreach (timezone_identifiers_list() as $timezone) -->
        <!-- <option value="{{ $timezone }}">{{ $timezone }}</option> --> 
    <!-- @endforeach -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="lne">
                                            <label>Final Registration Date</label>
                                            <div class="dp">
                                                <div class="input-group">
                                                    <input type="date" class="form-control" name="final_registration_date" value="{{$tournament->final_registration_date}}">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-th"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="gen-box gen-gr">
                                        <div class="lne">
                                            <label>Host</label>
                                            <input type="text" name="host" value="{{$tournament->host}}">
                                        </div>
                                        <div class="lne">
                                            <label>Contact Email</label>
                                            <input type="email" name="email" value="{{$tournament->tournamentUser->email}}">
                                        </div>
                                        <div class="lne">
                                            <label>Contact Phone</label>
                                            <input type="tel" name="contact" value="{{$tournament->tournamentUser->phone}}">
                                        </div>
                                    </div>

                                    <div class="gen-box">
                                        <div class="lne">
                                            <label class="hde">Length</label>
                                            @if(!empty($tournament->show_national_flag))
                                            <div class="cxk">

                                                <input type="checkbox" name="chk" value="{{$tournament->show_national_flag}}" checked="">
                                                <div class="ckx"></div>
                                                <label>Show national flags</label>
                                            </div>@else
                                            <div class="cxk">

                                                <input type="checkbox" name="chk" value="1">
                                                <div class="ckx"></div>
                                                <label>Show national flags</label>
                                            </div>@endif
                                        </div>
                                        <div class="lne">
                                            <label>Paper size</label>
                                            <div class="arr">
                                                <select>
                                                    <option>A4</option>
                                                    <option>Letter</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="lne">
                                            <label>Badge size</label>
                                            <div class="arr">
                                                <select>
                                                    <option>Same as paper size (A4)</option>
                                                    <option>A4</option>
                                                    <option>A5</option>
                                                    <option>Letter</option>
                                                    <option>A6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="lne">
                                            <label>Unit of weight</label>
                                            <div class="arr">
                                                <select>
                                                    <option>Metric (Kg)</option>
                                                    <option>Imperial (lb)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="lne">
                                            <label>Unit of height</label>
                                            <div class="arr">
                                                <select>
                                                    <option>Metric (cm)</option>
                                                    <option>Imperial (ft / in)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="lne">
                                            <label>Age cutoff</label>
                                            <span>
						 					<div class="rad-txt">
												<input type="radio" name="raid">
												<div class="rado"></div>
												<label>Day of tournament</label>
											</div>
											<div class="rad-txt">
												<input type="radio" name="raid">
												<div class="rado"></div>
												<label>Reginning of year</label>
											</div>
											<div class="rad-txt">
												<input type="radio" name="raid">
												<div class="rado"></div>
												<label>End of year</label>
											</div>
											<div class="rad-txt">
												<input type="radio" name="raid">
												<div class="rado"></div>
												<label>Custom</label>
											</div>
							 				<p>The age cutoff is the day from which the ages of competitions are calculated</p>
						 				</span>
                                        </div>
                                        <div class="lne">
                                            <label>Weight cutoff</label>
                                            <span>
						 					<div class="arr">
							 					<select>
							 						<option>.0 Kg</option>
							 						<option>.1 kg</option>
							 						<option>.2 kg</option>
							 						<option>.3 kg</option>
							 						<option>.4 kg</option>
							 						<option>.5 kg</option>
							 						<option>.6 kg</option>
							 						<option>.7 kg</option>
							 						<option>.8 kg</option>
							 						<option>.9 kg</option>
							 					</select>
							 				</div>
							 				<p>The weight cutoff is the upper (inclusive) limit, in grams, of a Insight class.</p>
                                            <div>
                                            
							 				<!-- <a href="#" type="submit">Save</a> -->
                                            </div>
						 				</span>
                                        </div>
                                        <button type="submit">Save</button>
</form>
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
