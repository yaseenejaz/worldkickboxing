    @extends('frontend.app')
    @section('title')
        <title>Division | {{ $slug }}</title>
    @endsection
    @section('link')
        <style>
            .navActive {
                transition: all 0.5s ease;
                background: #df4428;
                border-radius: 5px;
                color: #fff !important;
            }

            .navActive a {
                color: #fff !important;
            }
        </style>
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet"
              id="bootstrap-css">
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
        <section class="ver-tab">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h2>Pattern</h2>
                        <div class="pow-in">
                            @include('frontend.event.navHeader')

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active in" id="division" role="tabpanel" aria-labelledby="division-tab">
                                    <div class="search-list">
                                        <a href="#" class="siing">
                                            <i class="fa fa-check"></i>
                                            <span>Done Editing</span>
                                        </a>
                                        <a href="#" class="siing">
                                            <i class="fa fa-copy"></i>
                                            <span>Copy All</span>
                                        </a>
                                        <a href="#" class="siing">
                                            <i class="fa fa-paste"></i>
                                            <span>Paste All</span>
                                        </a>
                                        <a href="#" class="siing">
                                            <i class="fa fa-trash"></i>
                                            <span>Delete All</span>
                                        </a>
                                    </div>
                                    <div class="sim">
                                        <p>Need help setting up divisions? Please <a href="#">get in touch</a>, we're happy to help!</p>
                                    </div>
                                    <div class="drw-mt">
                                        <table class="pp-edt">
                                            <div id="clip">
                                                <tr>
                                                    <td rowspan="6">
                                                        <div class="dropdown show">
                                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#" id="copy" data-clipboard-target=#clip><i class="fa fa-files-o"></i>Copy Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-clipboard"></i>Paste Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-up"></i>Move Up</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-down"></i>Move Down</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Above</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Below</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Split by Weight / Height</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Delete</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Clear Subdivisions</a>
                                                            </div>
                                                        </div>
                                                    
            <select  style="display: none;" class="select" class="form-control">
                <option value="">(up to)</option>
                <option value="0">0</option>
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
                
            </select>
            <select style="display: none;" class="select" class="form-control">
                <option value="0">0</option>
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
                </select>
                       
    <button type="submit" class="select" id="show" style="display: none;">Save</button>
    <div id="show">   
        <a class="btn1">0-12years</a>
                                                            
    <!-- <a href="#" id="age"  data-type="select"  data-title="Select status" data-value="usama" >0 </a>
                                                                 
        <a href="#"  id="age2" data-type="select"  data-title="Select status" data-value="usama" > -12 years 
        </a> -->
                                                         
                                                           
                                                     
                                                       
                                                       
                                                        
                                                         
                                                        <p>Age</p>
                                                  
                                                        
                                                      </td>
                                                      </div>

                                                        

                                                             
                                                    <td rowspan="2">
                                                        <div class="dropdown show">
                                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-files-o"></i>Copy Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-clipboard"></i>Paste Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-up"></i>Move Up</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-down"></i>Move Down</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Above</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Below</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Split by Weight / Height</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Delete</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Clear Subdivisions</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="txt" id="group">10–6.gup</a>

                                                         <select  style="display: none;" class="group" class="form-control">
                <option value="">(up to)</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                </select>
                <select class="group" style="display: none;">
                    <option value="10">10</option>
                <option value="8">8</option>
                <option value="7">7</option>
                <option value="6">6</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                </select>
                <button type="submit" class="group" id="showg" style="display: none;">Save</button>
                                                        <p>Rank</p>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-files-o"></i>Copy Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-clipboard"></i>Paste Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-up"></i>Move Up</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-down"></i>Move Down</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Above</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Below</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Split by Weight / Height</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Delete</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Clear Subdivisions</a>
                                                            </div>
                                                        </div>
                                                        <!-- <a href="#" id="gender" data-type="select"  data-title="Select status"> -->
                                                           
                                                        <a href="#" class="txt" id="gender">Male</a>
                                                        <select class="gender" style="display: none;">
                                                           <option value="male">
                                                               male
                                                           </option>
                                                           <option value="female">Female</option>
                                                           <option value="mixed">Mix</option>
                                                       </select>
                                                       <button type="submit" id="showge" class="gender" style="display: none;">save</button>
                                                        <p>Gender</p>
                                                       
                                                    </td>
                                                    <td><a href="#" class="splt" id="splt">Split</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-files-o"></i>Copy Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-clipboard"></i>Paste Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-up"></i>Move Up</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-down"></i>Move Down</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Above</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Below</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Split by Weight / Height</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Delete</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Clear Subdivisions</a>
                                                            </div>
                                                        </div>
                                                        <div class="rank" style="display: none;">
                                                        <a href="#" class="txt" id="gender">Female</a>
                                                        <p>Gender</p>
                                                    </td>
                                                     </div>
                                                    <td><a href="#" class="splt" id="splt">Split</a></td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">
                                                        <div class="dropdown show">
                                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-files-o"></i>Copy Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-clipboard"></i>Paste Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-up"></i>Move Up</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-down"></i>Move Down</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Above</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Below</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Split by Weight / Height</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Delete</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Clear Subdivisions</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="txt" id="group">5–1.gup</a>
                                                        <p>Rank</p>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-files-o"></i>Copy Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-clipboard"></i>Paste Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-up"></i>Move Up</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-down"></i>Move Down</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Above</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Below</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Split by Weight / Height</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Delete</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Clear Subdivisions</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="txt" id="gender">Male</a>
                                                        <p>Gender</p>
                                                    </td>
                                                    <td><a href="#" class="splt">Split</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-files-o"></i>Copy Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-clipboard"></i>Paste Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-up"></i>Move Up</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-down"></i>Move Down</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Above</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Below</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Split by Weight / Height</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Delete</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Clear Subdivisions</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="txt">Female</a>
                                                        <p>Gender</p>
                                                    </td>
                                                    <td><a href="#" class="splt">Split</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">
                                                        <div class="dropdown show">
                                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-files-o"></i>Copy Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-clipboard"></i>Paste Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-up"></i>Move Up</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-down"></i>Move Down</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Above</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Below</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Split by Weight / Height</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Delete</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Clear Subdivisions</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="txt">1.dan+</a>
                                                        <p>Rank</p>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-files-o"></i>Copy Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-clipboard"></i>Paste Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-up"></i>Move Up</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-down"></i>Move Down</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Above</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Below</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Split by Weight / Height</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Delete</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Clear Subdivisions</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="txt">Male</a>
                                                        <p>Gender</p>
                                                    </td>
                                                    <td><a href="#" class="splt"  name="sbt_add1" id="sbt_add1">Splitt</a></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>

                                                        <div class="dropdown show">
                                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#"><i class="fa fa-files-o"></i>Copy Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-clipboard"></i>Paste Subdivisions</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-up"></i>Move Up</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-arrow-down"></i>Move Down</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Above</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Insert Below</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>Split by Weight / Height</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Delete</a>
                                                                <a class="dropdown-item" href="#"><i class="fa fa-times"></i>Clear Subdivisions</a>
                                                            </div>
                                                        </div>
                                                        <div id="my_div"></div>
                                                        <a href="#" class="txt">Female</a>
                                                        <p>Gender</p>
                                                    </td>
                                                    <td><a href="#" class="splt">Split</a></td>
                                                </tr>
                                            </div>

                                        </table>
                                        <div class="seperate">
                                            <span></span>
                                        </div>
                                        <table class="ajbb">
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 5–1.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 5–1.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 1.dan+"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 1.dan+"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 13-17 years M 10–6.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 5–1.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 5–1.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 1.dan+"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 1.dan+"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 13-17 years M 10–6.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 5–1.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 5–1.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 1.dan+"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 1.dan+"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 13-17 years M 10–6.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 5–1.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 5–1.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 1.dan+"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 1.dan+"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 13-17 years M 10–6.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 5–1.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 5–1.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 1.dan+"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 1.dan+"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 13-17 years M 10–6.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 5–1.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 5–1.gup"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years M 1.dan+"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 0-12 years F 1.dan+"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="km" type="text" name="num" placeholder="-"></td>
                                                <td><input class="zy" type="text" name="name" placeholder="Patterns 13-17 years M 10–6.gup"></td>
                                            </tr>
                                        </table>
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
     <script >
        $(document).ready(function(){

      $(".btn1").click(function(){
       
       $(".select").show();
       $(".btn1").hide();
      });
      $("#show").click(function(){
        var str = $(".select"). val();
// alert(str);
       $(".btn1").show();
       $(".select").hide();
       
      });

      $("#group").click(function(){
       
       $(".group").show();
       $("#group").hide();
      });
      $('#showg').click(function(){
        $('#group').show();
        $('.group').hide();

      })
      $('#splt').click(function(){
        $('.rank').show();
      })

      $("#gender").click(function(){
       
       $(".gender").show();
       $("#gender").hide();
      });
      $('#showge').click(function(){
        $('#gender').show();
        $('.gender').hide();

      })
       $('#sbt_add1').on("click", function(e){     
 
        //Adds/Appends new div to the content of the existing div, towards the end of the content.
        $('#my_div').append('<div class="new_div">This is NEW div.</div>')      
 
        e.preventDefault();
 
    });
    });
            $(document).ready(function(){
                $.fn.editable.defaults.mode='inline';
        //         $('#gender').editable({
        //     value: 3,    
        //     source: [
        //           {value: 'male', text: 'male'},
        //           {value: 'Female', text: 'Female'},
        //           {value: 'mix', text: 'mixed'},
                 
        //        ]
        // });
                    $('#age,#age2').editable({
                
            source: [
                  {value: 0, text: '0-3 years'},
                  {value: 1, text: '1-7 years'},
                  {value: 2, text: '2-9 years'},
                  {value: 3, text: '3'},
                  {value: 4, text: '4'},
                  {value: 5, text: '5'},
                  {value: 6, text: '6'},
                  {value: 7, text: '7'},
                  {value: 8, text: '8'},
                  {value: 9, text: '9'},
                  {value: 10, text: '10'},
                  {value: 11, text: '11'},
                  {value: 12, text: '12'},
                  {value: 13, text: '13'},
                  {value: 14, text: '14'},
                  {value: 15, text: '15'},
                  {value: 16, text: '16'},
                  {value: 17, text: '17'},
                  {value: 18, text: '18'},
                  {value: 19, text: '19'},
                  {value: 20, text: '20'},
                  {value: 21, text: '21'},
                  {value: 22, text: '22'},
                  {value: 23, text: '23'},
                  {value: 24, text: '24'},
                  {value: 25, text: '25'},
                  {value: 26, text: '26'},
                  {value: 27, text: '27'},
                  {value: 28, text: '28'},
                  {value: 29, text: '29'},
                  {value: 30, text: '30'},
                  {value: 31, text: '31'},
                  {value: 32, text: '32'},
                  {value: 33, text: '33'},
                  {value: 34, text: '34'},
                  {value: 34, text: '35'},
                 ]

                
        });

        //                  $('#age2').editable({
        //     value: 3,    
        //     source: [
        //           {value: 0, text: '0'},
        //           {value: 1, text: '1'},
        //           {value: 2, text: '2'},
        //           {value: 3, text: '3'},
        //           {value: 4, text: '4'},
        //           {value: 5, text: '5'},
        //           {value: 6, text: '6'},
        //           {value: 7, text: '7'},
        //           {value: 8, text: '8'},
        //           {value: 9, text: '9'},
        //           {value: 10, text: '10'},
        //           {value: 11, text: '11'},
        //           {value: 12, text: '12'},
        //           {value: 13, text: '13'},
        //           {value: 14, text: '14'},
        //           {value: 15, text: '15'},
        //           {value: 16, text: '16'},
        //           {value: 17, text: '17'},
        //           {value: 18, text: '18'},
        //           {value: 19, text: '19'},
        //           {value: 20, text: '20'},
        //           {value: 21, text: '21'},
        //           {value: 22, text: '22'},
        //           {value: 23, text: '23'},
        //           {value: 24, text: '24'},
        //           {value: 25, text: '25'},
        //           {value: 26, text: '26'},
        //           {value: 27, text: '27'},
        //           {value: 28, text: '28'},
        //           {value: 29, text: '29'},
        //           {value: 30, text: '30'},
        //           {value: 31, text: '31'},
        //           {value: 32, text: '32'},
        //           {value: 33, text: '33'},
        //           {value: 34, text: '34'},
        //           {value: 34, text: '35'},
                 
        //        ]
        // });
                 // $('#age').editable();
                // $('#group').editable();
                // // $('#gender').editable();
                // $('#splt').editable();
                
    });


        </script>
    <!--     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
    @endsection
