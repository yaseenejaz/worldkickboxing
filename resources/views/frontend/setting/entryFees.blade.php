@extends('frontend.app')
@section('title')
    <title>Entry Fees</title>
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
    <link href="{{ asset('frontend/css/bootstrap-editable.css') }}" rel="stylesheet"/>
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
                            <h2>Settings: Entry Fees</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @include('frontend.setting.sidebar')

                    <div class="col-xl-8">
                        <div class="tab-content">

                            <div class="text-style">
                                <div class="tab-pay">
                                    <h2>Standard</h2>
                                    <div class="row">
                                        <div class="col-xl-1"></div>
                                        <div class="col-xl-10">
                                            <div class="stan">
                                                <label>Currency</label>
                                                <div class="sel-p">
                                                    <div class="sel-arr">
                                                        <select>
                                                            <option value="AFG">Afghanistan</option>
                                                            <option value="ALA">Åland Islands</option>
                                                            <option value="ALB">Albania</option>
                                                            <option value="DZA">Algeria</option>
                                                            <option value="ASM">American Samoa</option>
                                                            <option value="AND">Andorra</option>
                                                            <option value="AGO">Angola</option>
                                                            <option value="AIA">Anguilla</option>
                                                            <option value="ATA">Antarctica</option>
                                                            <option value="ATG">Antigua and Barbuda</option>
                                                            <option value="ARG">Argentina</option>
                                                            <option value="ARM">Armenia</option>
                                                            <option value="ABW">Aruba</option>
                                                            <option value="AUS">Australia</option>
                                                            <option value="AUT">Austria</option>
                                                            <option value="AZE">Azerbaijan</option>
                                                            <option value="BHS">Bahamas</option>
                                                            <option value="BHR">Bahrain</option>
                                                            <option value="BGD">Bangladesh</option>
                                                            <option value="BRB">Barbados</option>
                                                            <option value="BLR">Belarus</option>
                                                            <option value="BEL">Belgium</option>
                                                            <option value="BLZ">Belize</option>
                                                            <option value="BEN">Benin</option>
                                                            <option value="BMU">Bermuda</option>
                                                            <option value="BTN">Bhutan</option>
                                                            <option value="BOL">Bolivia, Plurinational State of</option>
                                                            <option value="BES">Bonaire, Sint Eustatius and Saba
                                                            </option>
                                                            <option value="BIH">Bosnia and Herzegovina</option>
                                                            <option value="BWA">Botswana</option>
                                                            <option value="BVT">Bouvet Island</option>
                                                            <option value="BRA">Brazil</option>
                                                            <option value="IOT">British Indian Ocean Territory</option>
                                                            <option value="BRN">Brunei Darussalam</option>
                                                            <option value="BGR">Bulgaria</option>
                                                            <option value="BFA">Burkina Faso</option>
                                                            <option value="BDI">Burundi</option>
                                                            <option value="KHM">Cambodia</option>
                                                            <option value="CMR">Cameroon</option>
                                                            <option value="CAN">Canada</option>
                                                            <option value="CPV">Cape Verde</option>
                                                            <option value="CYM">Cayman Islands</option>
                                                            <option value="CAF">Central African Republic</option>
                                                            <option value="TCD">Chad</option>
                                                            <option value="CHL">Chile</option>
                                                            <option value="CHN">China</option>
                                                            <option value="CXR">Christmas Island</option>
                                                            <option value="CCK">Cocos (Keeling) Islands</option>
                                                            <option value="COL">Colombia</option>
                                                            <option value="COM">Comoros</option>
                                                            <option value="COG">Congo</option>
                                                            <option value="COD">Congo, the Democratic Republic of the
                                                            </option>
                                                            <option value="COK">Cook Islands</option>
                                                            <option value="CRI">Costa Rica</option>
                                                            <option value="CIV">Côte d'Ivoire</option>
                                                            <option value="HRV">Croatia</option>
                                                            <option value="CUB">Cuba</option>
                                                            <option value="CUW">Curaçao</option>
                                                            <option value="CYP">Cyprus</option>
                                                            <option value="CZE">Czech Republic</option>
                                                            <option value="DNK">Denmark</option>
                                                            <option value="DJI">Djibouti</option>
                                                            <option value="DMA">Dominica</option>
                                                            <option value="DOM">Dominican Republic</option>
                                                            <option value="ECU">Ecuador</option>
                                                            <option value="EGY">Egypt</option>
                                                            <option value="SLV">El Salvador</option>
                                                            <option value="GNQ">Equatorial Guinea</option>
                                                            <option value="ERI">Eritrea</option>
                                                            <option value="EST">Estonia</option>
                                                            <option value="ETH">Ethiopia</option>
                                                            <option value="FLK">Falkland Islands (Malvinas)</option>
                                                            <option value="FRO">Faroe Islands</option>
                                                            <option value="FJI">Fiji</option>
                                                            <option value="FIN">Finland</option>
                                                            <option value="FRA">France</option>
                                                            <option value="GUF">French Guiana</option>
                                                            <option value="PYF">French Polynesia</option>
                                                            <option value="ATF">French Southern Territories</option>
                                                            <option value="GAB">Gabon</option>
                                                            <option value="GMB">Gambia</option>
                                                            <option value="GEO">Georgia</option>
                                                            <option value="DEU">Germany</option>
                                                            <option value="GHA">Ghana</option>
                                                            <option value="GIB">Gibraltar</option>
                                                            <option value="GRC">Greece</option>
                                                            <option value="GRL">Greenland</option>
                                                            <option value="GRD">Grenada</option>
                                                            <option value="GLP">Guadeloupe</option>
                                                            <option value="GUM">Guam</option>
                                                            <option value="GTM">Guatemala</option>
                                                            <option value="GGY">Guernsey</option>
                                                            <option value="GIN">Guinea</option>
                                                            <option value="GNB">Guinea-Bissau</option>
                                                            <option value="GUY">Guyana</option>
                                                            <option value="HTI">Haiti</option>
                                                            <option value="HMD">Heard Island and McDonald Islands
                                                            </option>
                                                            <option value="VAT">Holy See (Vatican City State)</option>
                                                            <option value="HND">Honduras</option>
                                                            <option value="HKG">Hong Kong</option>
                                                            <option value="HUN">Hungary</option>
                                                            <option value="ISL">Iceland</option>
                                                            <option value="IND">India</option>
                                                            <option value="IDN">Indonesia</option>
                                                            <option value="IRN">Iran, Islamic Republic of</option>
                                                            <option value="IRQ">Iraq</option>
                                                            <option value="IRL">Ireland</option>
                                                            <option value="IMN">Isle of Man</option>
                                                            <option value="ISR">Israel</option>
                                                            <option value="ITA">Italy</option>
                                                            <option value="JAM">Jamaica</option>
                                                            <option value="JPN">Japan</option>
                                                            <option value="JEY">Jersey</option>
                                                            <option value="JOR">Jordan</option>
                                                            <option value="KAZ">Kazakhstan</option>
                                                            <option value="KEN">Kenya</option>
                                                            <option value="KIR">Kiribati</option>
                                                            <option value="PRK">Korea, Democratic People's Republic of
                                                            </option>
                                                            <option value="KOR">Korea, Republic of</option>
                                                            <option value="KWT">Kuwait</option>
                                                            <option value="KGZ">Kyrgyzstan</option>
                                                            <option value="LAO">Lao People's Democratic Republic
                                                            </option>
                                                            <option value="LVA">Latvia</option>
                                                            <option value="LBN">Lebanon</option>
                                                            <option value="LSO">Lesotho</option>
                                                            <option value="LBR">Liberia</option>
                                                            <option value="LBY">Libya</option>
                                                            <option value="LIE">Liechtenstein</option>
                                                            <option value="LTU">Lithuania</option>
                                                            <option value="LUX">Luxembourg</option>
                                                            <option value="MAC">Macao</option>
                                                            <option value="MKD">Macedonia, the former Yugoslav Republic
                                                                of
                                                            </option>
                                                            <option value="MDG">Madagascar</option>
                                                            <option value="MWI">Malawi</option>
                                                            <option value="MYS">Malaysia</option>
                                                            <option value="MDV">Maldives</option>
                                                            <option value="MLI">Mali</option>
                                                            <option value="MLT">Malta</option>
                                                            <option value="MHL">Marshall Islands</option>
                                                            <option value="MTQ">Martinique</option>
                                                            <option value="MRT">Mauritania</option>
                                                            <option value="MUS">Mauritius</option>
                                                            <option value="MYT">Mayotte</option>
                                                            <option value="MEX">Mexico</option>
                                                            <option value="FSM">Micronesia, Federated States of</option>
                                                            <option value="MDA">Moldova, Republic of</option>
                                                            <option value="MCO">Monaco</option>
                                                            <option value="MNG">Mongolia</option>
                                                            <option value="MNE">Montenegro</option>
                                                            <option value="MSR">Montserrat</option>
                                                            <option value="MAR">Morocco</option>
                                                            <option value="MOZ">Mozambique</option>
                                                            <option value="MMR">Myanmar</option>
                                                            <option value="NAM">Namibia</option>
                                                            <option value="NRU">Nauru</option>
                                                            <option value="NPL">Nepal</option>
                                                            <option value="NLD">Netherlands</option>
                                                            <option value="NCL">New Caledonia</option>
                                                            <option value="NZL">New Zealand</option>
                                                            <option value="NIC">Nicaragua</option>
                                                            <option value="NER">Niger</option>
                                                            <option value="NGA">Nigeria</option>
                                                            <option value="NIU">Niue</option>
                                                            <option value="NFK">Norfolk Island</option>
                                                            <option value="MNP">Northern Mariana Islands</option>
                                                            <option value="NOR">Norway</option>
                                                            <option value="OMN">Oman</option>
                                                            <option value="PAK">Pakistan</option>
                                                            <option value="PLW">Palau</option>
                                                            <option value="PSE">Palestinian Territory, Occupied</option>
                                                            <option value="PAN">Panama</option>
                                                            <option value="PNG">Papua New Guinea</option>
                                                            <option value="PRY">Paraguay</option>
                                                            <option value="PER">Peru</option>
                                                            <option value="PHL">Philippines</option>
                                                            <option value="PCN">Pitcairn</option>
                                                            <option value="POL">Poland</option>
                                                            <option value="PRT">Portugal</option>
                                                            <option value="PRI">Puerto Rico</option>
                                                            <option value="QAT">Qatar</option>
                                                            <option value="REU">Réunion</option>
                                                            <option value="ROU">Romania</option>
                                                            <option value="RUS">Russian Federation</option>
                                                            <option value="RWA">Rwanda</option>
                                                            <option value="BLM">Saint Barthélemy</option>
                                                            <option value="SHN">Saint Helena, Ascension and Tristan da
                                                                Cunha
                                                            </option>
                                                            <option value="KNA">Saint Kitts and Nevis</option>
                                                            <option value="LCA">Saint Lucia</option>
                                                            <option value="MAF">Saint Martin (French part)</option>
                                                            <option value="SPM">Saint Pierre and Miquelon</option>
                                                            <option value="VCT">Saint Vincent and the Grenadines
                                                            </option>
                                                            <option value="WSM">Samoa</option>
                                                            <option value="SMR">San Marino</option>
                                                            <option value="STP">Sao Tome and Principe</option>
                                                            <option value="SAU">Saudi Arabia</option>
                                                            <option value="SEN">Senegal</option>
                                                            <option value="SRB">Serbia</option>
                                                            <option value="SYC">Seychelles</option>
                                                            <option value="SLE">Sierra Leone</option>
                                                            <option value="SGP">Singapore</option>
                                                            <option value="SXM">Sint Maarten (Dutch part)</option>
                                                            <option value="SVK">Slovakia</option>
                                                            <option value="SVN">Slovenia</option>
                                                            <option value="SLB">Solomon Islands</option>
                                                            <option value="SOM">Somalia</option>
                                                            <option value="ZAF">South Africa</option>
                                                            <option value="SGS">South Georgia and the South Sandwich
                                                                Islands
                                                            </option>
                                                            <option value="SSD">South Sudan</option>
                                                            <option value="ESP">Spain</option>
                                                            <option value="LKA">Sri Lanka</option>
                                                            <option value="SDN">Sudan</option>
                                                            <option value="SUR">Suriname</option>
                                                            <option value="SJM">Svalbard and Jan Mayen</option>
                                                            <option value="SWZ">Swaziland</option>
                                                            <option value="SWE">Sweden</option>
                                                            <option value="CHE">Switzerland</option>
                                                            <option value="SYR">Syrian Arab Republic</option>
                                                            <option value="TWN">Taiwan, Province of China</option>
                                                            <option value="TJK">Tajikistan</option>
                                                            <option value="TZA">Tanzania, United Republic of</option>
                                                            <option value="THA">Thailand</option>
                                                            <option value="TLS">Timor-Leste</option>
                                                            <option value="TGO">Togo</option>
                                                            <option value="TKL">Tokelau</option>
                                                            <option value="TON">Tonga</option>
                                                            <option value="TTO">Trinidad and Tobago</option>
                                                            <option value="TUN">Tunisia</option>
                                                            <option value="TUR">Turkey</option>
                                                            <option value="TKM">Turkmenistan</option>
                                                            <option value="TCA">Turks and Caicos Islands</option>
                                                            <option value="TUV">Tuvalu</option>
                                                            <option value="UGA">Uganda</option>
                                                            <option value="UKR">Ukraine</option>
                                                            <option value="ARE">United Arab Emirates</option>
                                                            <option value="GBR">United Kingdom</option>
                                                            <option value="USA">United States</option>
                                                            <option value="UMI">United States Minor Outlying Islands
                                                            </option>
                                                            <option value="URY">Uruguay</option>
                                                            <option value="UZB">Uzbekistan</option>
                                                            <option value="VUT">Vanuatu</option>
                                                            <option value="VEN">Venezuela, Bolivarian Republic of
                                                            </option>
                                                            <option value="VNM">Viet Nam</option>
                                                            <option value="VGB">Virgin Islands, British</option>
                                                            <option value="VIR">Virgin Islands, U.S.</option>
                                                            <option value="WLF">Wallis and Futuna</option>
                                                            <option value="ESH">Western Sahara</option>
                                                            <option value="YEM">Yemen</option>
                                                            <option value="ZMB">Zambia</option>
                                                            <option value="ZWE">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label>Pricing model</label>
                                                <div class="sel-p">
                                                    <div class="sel-arr">
                                                        <select>
                                                            <option>X per competitor + Y per category</option>
                                                            <option>X for first category + Y for additional categories
                                                            </option>
                                                            <option>X for first category + Y for second category + Z for
                                                                additional categories
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label>Fee per competitor</label>
                                                <div class="sel-p-con">
                                                    <a type="text" name="aud" class="editable-inline">0.00</a>
                                                    <label>AUD</label>
                                                </div>
                                                <label>Fee per category</label>
                                                <div class="sel-p-con">
                                                    <a type="text" name="aud" class="editable-inline">0.00</a>
                                                    <label>AUD</label>
                                                    <p>If you need a custom pricing structure, please be in touch with
                                                        us at hello@kickboxing.com</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <h3>StandAdvanced Pricing Rules <a href="#" data-toggle="modal"
                                                                               data-target="#ruleModal">New Rule</a>
                                            </h3>
                                            <div class="modal fade paypal" id="ruleModal" tabindex="-1" role="dialog"
                                                 aria-labelledby="ruleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5>New Rule</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="fld">
                                                                <label>New Rule</label>
                                                                <div class="multi-sel">
                                                                    <div class="multi-arr">
                                                                        <select>
                                                                            <option>Select Attribute</option>
                                                                            <option>Gender</option>
                                                                            <option>Age</option>
                                                                            <option>Number of events</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="multi-arr">
                                                                        <select>
                                                                            <option>equals</option>
                                                                            <option>is higher than</option>
                                                                            <option>is higher than or equal to</option>
                                                                            <option>is lower than</option>
                                                                            <option>is lower than or equal to</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="multi-arr">
                                                                        <select>
                                                                            <option value="">(Select value)</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                            <option value="15">15</option>
                                                                            <option value="16">16</option>
                                                                            <option value="17">17</option>
                                                                            <option value="18">18</option>
                                                                            <option value="19">19</option>
                                                                            <option value="20">20</option>
                                                                            <option value="21">21</option>
                                                                            <option value="22">22</option>
                                                                            <option value="23">23</option>
                                                                            <option value="24">24</option>
                                                                            <option value="25">25</option>
                                                                            <option value="26">26</option>
                                                                            <option value="27">27</option>
                                                                            <option value="28">28</option>
                                                                            <option value="29">29</option>
                                                                            <option value="30">30</option>
                                                                            <option value="31">31</option>
                                                                            <option value="32">32</option>
                                                                            <option value="33">33</option>
                                                                            <option value="34">34</option>
                                                                            <option value="35">35</option>
                                                                            <option value="36">36</option>
                                                                            <option value="37">37</option>
                                                                            <option value="38">38</option>
                                                                            <option value="39">39</option>
                                                                            <option value="40">40</option>
                                                                            <option value="41">41</option>
                                                                            <option value="42">42</option>
                                                                            <option value="43">43</option>
                                                                            <option value="44">44</option>
                                                                            <option value="45">45</option>
                                                                            <option value="46">46</option>
                                                                            <option value="47">47</option>
                                                                            <option value="48">48</option>
                                                                            <option value="49">49</option>
                                                                            <option value="50">50</option>
                                                                            <option value="51">51</option>
                                                                            <option value="52">52</option>
                                                                            <option value="53">53</option>
                                                                            <option value="54">54</option>
                                                                            <option value="55">55</option>
                                                                            <option value="56">56</option>
                                                                            <option value="57">57</option>
                                                                            <option value="58">58</option>
                                                                            <option value="59">59</option>
                                                                            <option value="60">60</option>
                                                                            <option value="61">61</option>
                                                                            <option value="62">62</option>
                                                                            <option value="63">63</option>
                                                                            <option value="64">64</option>
                                                                            <option value="65">65</option>
                                                                            <option value="66">66</option>
                                                                            <option value="67">67</option>
                                                                            <option value="68">68</option>
                                                                            <option value="69">69</option>
                                                                            <option value="70">70</option>
                                                                            <option value="71">71</option>
                                                                            <option value="72">72</option>
                                                                            <option value="73">73</option>
                                                                            <option value="74">74</option>
                                                                            <option value="75">75</option>
                                                                            <option value="76">76</option>
                                                                            <option value="77">77</option>
                                                                            <option value="78">78</option>
                                                                            <option value="79">79</option>
                                                                            <option value="80">80</option>
                                                                            <option value="81">81</option>
                                                                            <option value="82">82</option>
                                                                            <option value="83">83</option>
                                                                            <option value="84">84</option>
                                                                            <option value="85">85</option>
                                                                            <option value="86">86</option>
                                                                            <option value="87">87</option>
                                                                            <option value="88">88</option>
                                                                            <option value="89">89</option>
                                                                            <option value="90">90</option>
                                                                            <option value="91">91</option>
                                                                            <option value="92">92</option>
                                                                            <option value="93">93</option>
                                                                            <option value="94">94</option>
                                                                            <option value="95">95</option>
                                                                            <option value="96">96</option>
                                                                            <option value="97">97</option>
                                                                            <option value="98">98</option>
                                                                            <option value="99">99</option>
                                                                            <option value="100">100</option>
                                                                            <option value="101">101</option>
                                                                            <option value="102">102</option>
                                                                            <option value="103">103</option>
                                                                            <option value="104">104</option>
                                                                            <option value="105">105</option>
                                                                            <option value="106">106</option>
                                                                            <option value="107">107</option>
                                                                            <option value="108">108</option>
                                                                            <option value="109">109</option>
                                                                            <option value="110">110</option>
                                                                            <option value="111">111</option>
                                                                            <option value="112">112</option>
                                                                            <option value="113">113</option>
                                                                            <option value="114">114</option>
                                                                            <option value="115">115</option>
                                                                            <option value="116">116</option>
                                                                            <option value="117">117</option>
                                                                            <option value="118">118</option>
                                                                            <option value="119">119</option>
                                                                            <option value="120">120</option>
                                                                            <option value="121">121</option>
                                                                            <option value="122">122</option>
                                                                            <option value="123">123</option>
                                                                            <option value="124">124</option>
                                                                            <option value="125">125</option>
                                                                            <option value="126">126</option>
                                                                            <option value="127">127</option>
                                                                            <option value="128">128</option>
                                                                            <option value="129">129</option>
                                                                            <option value="130">130</option>
                                                                            <option value="131">131</option>
                                                                            <option value="132">132</option>
                                                                            <option value="133">133</option>
                                                                            <option value="134">134</option>
                                                                            <option value="135">135</option>
                                                                            <option value="136">136</option>
                                                                            <option value="137">137</option>
                                                                            <option value="138">138</option>
                                                                            <option value="139">139</option>
                                                                            <option value="140">140</option>
                                                                            <option value="141">141</option>
                                                                            <option value="142">142</option>
                                                                            <option value="143">143</option>
                                                                            <option value="144">144</option>
                                                                            <option value="145">145</option>
                                                                            <option value="146">146</option>
                                                                            <option value="147">147</option>
                                                                            <option value="148">148</option>
                                                                            <option value="149">149</option>
                                                                            <option value="150">150</option>
                                                                            <option value="151">151</option>
                                                                            <option value="152">152</option>
                                                                            <option value="153">153</option>
                                                                            <option value="154">154</option>
                                                                            <option value="155">155</option>
                                                                            <option value="156">156</option>
                                                                            <option value="157">157</option>
                                                                            <option value="158">158</option>
                                                                            <option value="159">159</option>
                                                                            <option value="160">160</option>
                                                                            <option value="161">161</option>
                                                                            <option value="162">162</option>
                                                                            <option value="163">163</option>
                                                                            <option value="164">164</option>
                                                                            <option value="165">165</option>
                                                                            <option value="166">166</option>
                                                                            <option value="167">167</option>
                                                                            <option value="168">168</option>
                                                                            <option value="169">169</option>
                                                                            <option value="170">170</option>
                                                                            <option value="171">171</option>
                                                                            <option value="172">172</option>
                                                                            <option value="173">173</option>
                                                                            <option value="174">174</option>
                                                                            <option value="175">175</option>
                                                                            <option value="176">176</option>
                                                                            <option value="177">177</option>
                                                                            <option value="178">178</option>
                                                                            <option value="179">179</option>
                                                                            <option value="180">180</option>
                                                                            <option value="181">181</option>
                                                                            <option value="182">182</option>
                                                                            <option value="183">183</option>
                                                                            <option value="184">184</option>
                                                                            <option value="185">185</option>
                                                                            <option value="186">186</option>
                                                                            <option value="187">187</option>
                                                                            <option value="188">188</option>
                                                                            <option value="189">189</option>
                                                                            <option value="190">190</option>
                                                                            <option value="191">191</option>
                                                                            <option value="192">192</option>
                                                                            <option value="193">193</option>
                                                                            <option value="194">194</option>
                                                                            <option value="195">195</option>
                                                                            <option value="196">196</option>
                                                                            <option value="197">197</option>
                                                                            <option value="198">198</option>
                                                                            <option value="199">199</option>
                                                                            <option value="200">200</option>
                                                                            <option value="201">201</option>
                                                                            <option value="202">202</option>
                                                                            <option value="203">203</option>
                                                                            <option value="204">204</option>
                                                                            <option value="205">205</option>
                                                                            <option value="206">206</option>
                                                                            <option value="207">207</option>
                                                                            <option value="208">208</option>
                                                                            <option value="209">209</option>
                                                                            <option value="210">210</option>
                                                                            <option value="211">211</option>
                                                                            <option value="212">212</option>
                                                                            <option value="213">213</option>
                                                                            <option value="214">214</option>
                                                                            <option value="215">215</option>
                                                                            <option value="216">216</option>
                                                                            <option value="217">217</option>
                                                                            <option value="218">218</option>
                                                                            <option value="219">219</option>
                                                                            <option value="220">220</option>
                                                                            <option value="221">221</option>
                                                                            <option value="222">222</option>
                                                                            <option value="223">223</option>
                                                                            <option value="224">224</option>
                                                                            <option value="225">225</option>
                                                                            <option value="226">226</option>
                                                                            <option value="227">227</option>
                                                                            <option value="228">228</option>
                                                                            <option value="229">229</option>
                                                                            <option value="230">230</option>
                                                                            <option value="231">231</option>
                                                                            <option value="232">232</option>
                                                                            <option value="233">233</option>
                                                                            <option value="234">234</option>
                                                                            <option value="235">235</option>
                                                                            <option value="236">236</option>
                                                                            <option value="237">237</option>
                                                                            <option value="238">238</option>
                                                                            <option value="239">239</option>
                                                                            <option value="240">240</option>
                                                                            <option value="241">241</option>
                                                                            <option value="242">242</option>
                                                                            <option value="243">243</option>
                                                                            <option value="244">244</option>
                                                                            <option value="245">245</option>
                                                                            <option value="246">246</option>
                                                                            <option value="247">247</option>
                                                                            <option value="248">248</option>
                                                                            <option value="249">249</option>
                                                                            <option value="250">250</option>
                                                                            <option value="251">251</option>
                                                                            <option value="252">252</option>
                                                                            <option value="253">253</option>
                                                                            <option value="254">254</option>
                                                                            <option value="255">255</option>
                                                                            <option value="256">256</option>
                                                                            <option value="257">257</option>
                                                                            <option value="258">258</option>
                                                                            <option value="259">259</option>
                                                                            <option value="260">260</option>
                                                                            <option value="261">261</option>
                                                                            <option value="262">262</option>
                                                                            <option value="263">263</option>
                                                                            <option value="264">264</option>
                                                                            <option value="265">265</option>
                                                                            <option value="266">266</option>
                                                                            <option value="267">267</option>
                                                                            <option value="268">268</option>
                                                                            <option value="269">269</option>
                                                                            <option value="270">270</option>
                                                                            <option value="271">271</option>
                                                                            <option value="272">272</option>
                                                                            <option value="273">273</option>
                                                                            <option value="274">274</option>
                                                                            <option value="275">275</option>
                                                                            <option value="276">276</option>
                                                                            <option value="277">277</option>
                                                                            <option value="278">278</option>
                                                                            <option value="279">279</option>
                                                                            <option value="280">280</option>
                                                                            <option value="281">281</option>
                                                                            <option value="282">282</option>
                                                                            <option value="283">283</option>
                                                                            <option value="284">284</option>
                                                                            <option value="285">285</option>
                                                                            <option value="286">286</option>
                                                                            <option value="287">287</option>
                                                                            <option value="288">288</option>
                                                                            <option value="289">289</option>
                                                                            <option value="290">290</option>
                                                                            <option value="291">291</option>
                                                                            <option value="292">292</option>
                                                                            <option value="293">293</option>
                                                                            <option value="294">294</option>
                                                                            <option value="295">295</option>
                                                                            <option value="296">296</option>
                                                                            <option value="297">297</option>
                                                                            <option value="298">298</option>
                                                                            <option value="299">299</option>
                                                                            <option value="300">300</option>
                                                                            <option value="301">301</option>
                                                                            <option value="302">302</option>
                                                                            <option value="303">303</option>
                                                                            <option value="304">304</option>
                                                                            <option value="305">305</option>
                                                                            <option value="306">306</option>
                                                                            <option value="307">307</option>
                                                                            <option value="308">308</option>
                                                                            <option value="309">309</option>
                                                                            <option value="310">310</option>
                                                                            <option value="311">311</option>
                                                                            <option value="312">312</option>
                                                                            <option value="313">313</option>
                                                                            <option value="314">314</option>
                                                                            <option value="315">315</option>
                                                                            <option value="316">316</option>
                                                                            <option value="317">317</option>
                                                                            <option value="318">318</option>
                                                                            <option value="319">319</option>
                                                                            <option value="320">320</option>
                                                                            <option value="321">321</option>
                                                                            <option value="322">322</option>
                                                                            <option value="323">323</option>
                                                                            <option value="324">324</option>
                                                                            <option value="325">325</option>
                                                                            <option value="326">326</option>
                                                                            <option value="327">327</option>
                                                                            <option value="328">328</option>
                                                                            <option value="329">329</option>
                                                                            <option value="330">330</option>
                                                                            <option value="331">331</option>
                                                                            <option value="332">332</option>
                                                                            <option value="333">333</option>
                                                                            <option value="334">334</option>
                                                                            <option value="335">335</option>
                                                                            <option value="336">336</option>
                                                                            <option value="337">337</option>
                                                                            <option value="338">338</option>
                                                                            <option value="339">339</option>
                                                                            <option value="340">340</option>
                                                                            <option value="341">341</option>
                                                                            <option value="342">342</option>
                                                                            <option value="343">343</option>
                                                                            <option value="344">344</option>
                                                                            <option value="345">345</option>
                                                                            <option value="346">346</option>
                                                                            <option value="347">347</option>
                                                                            <option value="348">348</option>
                                                                            <option value="349">349</option>
                                                                            <option value="350">350</option>
                                                                            <option value="351">351</option>
                                                                            <option value="352">352</option>
                                                                            <option value="353">353</option>
                                                                            <option value="354">354</option>
                                                                            <option value="355">355</option>
                                                                            <option value="356">356</option>
                                                                            <option value="357">357</option>
                                                                            <option value="358">358</option>
                                                                            <option value="359">359</option>
                                                                            <option value="360">360</option>
                                                                            <option value="361">361</option>
                                                                            <option value="362">362</option>
                                                                            <option value="363">363</option>
                                                                            <option value="364">364</option>
                                                                            <option value="365">365</option>
                                                                            <option value="366">366</option>
                                                                            <option value="367">367</option>
                                                                            <option value="368">368</option>
                                                                            <option value="369">369</option>
                                                                            <option value="370">370</option>
                                                                            <option value="371">371</option>
                                                                            <option value="372">372</option>
                                                                            <option value="373">373</option>
                                                                            <option value="374">374</option>
                                                                            <option value="375">375</option>
                                                                            <option value="376">376</option>
                                                                            <option value="377">377</option>
                                                                            <option value="378">378</option>
                                                                            <option value="379">379</option>
                                                                            <option value="380">380</option>
                                                                            <option value="381">381</option>
                                                                            <option value="382">382</option>
                                                                            <option value="383">383</option>
                                                                            <option value="384">384</option>
                                                                            <option value="385">385</option>
                                                                            <option value="386">386</option>
                                                                            <option value="387">387</option>
                                                                            <option value="388">388</option>
                                                                            <option value="389">389</option>
                                                                            <option value="390">390</option>
                                                                            <option value="391">391</option>
                                                                            <option value="392">392</option>
                                                                            <option value="393">393</option>
                                                                            <option value="394">394</option>
                                                                            <option value="395">395</option>
                                                                            <option value="396">396</option>
                                                                            <option value="397">397</option>
                                                                            <option value="398">398</option>
                                                                            <option value="399">399</option>
                                                                            <option value="400">400</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="fld">
                                                                <label>Price</label>
                                                                <input type="text" name="merchant">
                                                            </div>
                                                            <a href="#" class="modal-btn">Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box">
                                                <p>There are no advanced pricing rules.</p>
                                            </div>
                                            <p>Advanced pricing rules override standard prices.<br>When a registration
                                                fulfills more than one rule, the one higher on the list is applied.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <h3>Tickets <a href="#" data-toggle="modal" data-target="#ticketModal">New
                                                    Ticket</a></h3>
                                            <div class="modal fade paypal" id="ticketModal" tabindex="-1" role="dialog"
                                                 aria-labelledby="ticketModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5>New Ticket</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="fld">
                                                                <label>Name</label>
                                                                <input type="text" name="ticket"
                                                                       placeholder="Spectator Ticket">
                                                            </div>
                                                            <div class="fld">
                                                                <label>Online Price</label>
                                                                <input type="number" name="online" placeholder="0.00">
                                                            </div>
                                                            <div class="fld">
                                                                <label>Door Price</label>
                                                                <input type="number" name="door" placeholder="0.00">
                                                            </div>
                                                            <a href="#" class="modal-btn">Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Online Price</th>
                                                    <th>Door Price</th>
                                                    <th>Sold</th>
                                                    <th style="width: 25%"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td colspan="4">There are no tickets.</td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <p>Tickets are for spectators, and for add-ons such as seminars or
                                                dinners.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <h3>Discount Periods <a href="#" data-toggle="modal"
                                                                    data-target="#discountModal">New Discount Period</a>
                                            </h3>
                                            <div class="modal fade paypal discount" id="discountModal" tabindex="-1"
                                                 role="dialog" aria-labelledby="discountModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5>New Discount</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="fld">
                                                                <label>Name</label>
                                                                <input type="text" name="name" placeholder="Early Bird">
                                                            </div>
                                                            <div class="fld">
                                                                <label>Starts at</label>
                                                                <input type="text" name="merchant">
                                                            </div>
                                                            <div class="fld">
                                                                <label>Ends at</label>
                                                                <input type="text" name="merchant">
                                                            </div>
                                                            <div class="fld">
                                                                <label>Amount</label>
                                                                <div class="double">
                                                                    <input type="number" name="amount"
                                                                           placeholder="20.00">
                                                                    <div class="arr">
                                                                        <select>
                                                                            <option>AUD</option>
                                                                            <option>Percent</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="fld">
                                                                <label>Per</label>
                                                                <div class="arr">
                                                                    <select>
                                                                        <option>Competitor</option>
                                                                        <option>Category</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="modal-btn">Create Discount</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box">
                                                <p>There are no discount periods defined.</p>
                                            </div>
                                            <p>Discount periods allow you to define early / regular / late pricing.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <h3>Discount Codes <a href="#" data-toggle="modal" data-target="#codeModal">New
                                                    Discount Code</a></h3>
                                            <div class="modal fade paypal discount" id="codeModal" tabindex="-1"
                                                 role="dialog" aria-labelledby="codeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5>New Discount Code</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="fld">
                                                                <label>Name</label>
                                                                <input type="text" name="bird" placeholder="Early Bird">
                                                            </div>
                                                            <div class="fld">
                                                                <label>Amount</label>
                                                                <div class="double">
                                                                    <input type="number" name="amount"
                                                                           placeholder="20.00">
                                                                    <div class="arr">
                                                                        <select>
                                                                            <option>AUD</option>
                                                                            <option>Percent</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="fld">
                                                                <label>Per</label>
                                                                <div class="arr">
                                                                    <select>
                                                                        <option>Competitor</option>
                                                                        <option>Category</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="modal-btn">Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box">
                                                <p>There are no discount codes.</p>
                                            </div>
                                            <p>Discount codes are links you can send that allow for a certain amount of
                                                discount.</p>
                                        </div>
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
    <script src="{{ asset('frontend/js/bootstrap-editable.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
@endsection
