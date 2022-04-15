<?php

namespace App\Http\Controllers;
use App\Tournament;
  use App\MartialArt;
  use DB;
  use App\User;
  use App\TournamentImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function general($slug='')

    {
          if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
       

           $martialArt = MartialArt::all();
          $martial = MartialArt::where('id', $tournament->martial_art_id)->first();

    return view('frontend.setting.general',compact('tournament','martialArt','martial'));
    }

       
    }
    public function savegenral($slug='',Request $request){
    $tournament = DB::table('tournaments')->where('slug','=',$slug)->first();
    $id=$tournament->id;
    $u_id=$tournament->user_id;
    $tournaments=Tournament::find($id);
   
    $users=User::find($u_id);
    // print_r($request->all());
    // die();

if ($request->name==''){
 $tournaments->name;
 $tournaments->save();
}
if ($request->martial=='') {
 $tournaments->martial_art_id;
 $tournaments->save(); 
}
if($request->date==''){
  $tournaments->date;
  $tournaments->save();
}
if($request->final_registration_date==''){
  $tournaments->final_registration_date;
  $tournaments->save();
}
if($request->email==''){
  $users->email;
  $users->save();
}
if($request->contact==''){
  $users->phone;
  $users->save();
}

if($request->timezone==''){
  $tournaments->timezone;
  $tournaments->save();
}
if($request->host==''){
  $tournaments->host;
  $tournaments->save();
}
if($request->chk==''){
  $tournaments->show_national_flag;
   $tournaments->save();
}
   if($request->length==''){
    $tournaments->length;
     $tournaments->save();
   }
 else{
    $tournaments->name=$request->name;
    $tournaments->martial_art_id=$request->martial;
    $tournaments->date=$request->date;
    $tournaments->length=$request->length;
    $tournaments->timezone=$request->timezone;
    $tournaments->final_registration_date=$request->final_registration_date;
    $tournaments->host=$request->host;
    $tournaments->show_national_flag=$request->chk;
    $tournaments->save();
    $users->email=$request->email;
    $users->phone=$request->contact;
    $users->save();
}
 return redirect('/user/tournament/' . $tournaments->slug)->with('message', 'general updated successfully!');

    }

    public function registration($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.registration',compact('tournament'));
    }
}
      

    public function venue($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.venue',compact('tournament'));
    }
       
    }

    public function image($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.image',compact('tournament'));
    }}



    //    public function saveimage($slug='',Request $request){
    //     $TournamentImages= new TournamentImages;
    //         if (auth()->check()) {
    //      $tournament = Tournament::with(['tournamentEvent' => function($q)  {
    //         $q->orderBy('position', 'ASC')->get();
    //     }])->with('tournamentUser')->where('slug', $slug)->first();}
    //      //$logo=$request->logo;
    //       $image = $request->file('image');
    //        print_r($image);
    //        die();
    //     if (!empty($image)) {
        
        
    //     $name = time().'.'.$image->getClientOriginalExtension();
    //     $destinationPath = public_path('/images');
    //     $image->move($destinationPath, $name);
    //     $TournamentImages->logo=$name;
    //     $TournamentImages->save();
    //     echo "hi";


       
    //   //return view('frontend.setting.venue',compact('tournament'));
    // }

    //    }

    public function draw($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.draw',compact('tournament'));
    }}
      

    public function entryFees($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.entryFees',compact('tournament'));
    }}
      

    public function payment($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.payment',compact('tournament'));
    }}
      

    public function document($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.tournament.draw',compact('tournament'));
    }
}
      

    public function email($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.email',compact('tournament'));
    }
}
        

    public function permission($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.permission',compact('tournament'));
    }
}
      

    public function result($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.result',compact('tournament'));
    }
}
     

    public function certificate($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.certificate',compact('tournament'));
    }
}

    public function weighIn($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.weighIn',compact('tournament'));
    }
}
       

    public function license($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.license',compact('tournament'));
    }
}
      

    public function physical($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.physical',compact('tournament'));
    }
}
      
    public function data($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.data',compact('tournament'));
    }
}
     

    public function editCerticate($slug='')
    {
           if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('slug', $slug)->first();
      return view('frontend.setting.editPDF',compact('tournament'));
    }
}
       
}
