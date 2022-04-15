<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

  use App\Descipline;
  use App\Event;
  use App\MartialArt;
  use App\Tournament;
  use App\User;
  use App\Competitor;
  use App\School;
  use Carbon\Carbon;
  use Validator;
  use DB;
  use Illuminate\Support\Facades\Auth;
  use Illuminate\Support\Facades\Hash;
 use \Cviebrock\EloquentSluggable\Services\SlugService as SlugService;

class TournamentsController extends Controller
{
       public function index()
      {
           if (auth()->check()) {
              $userId = Auth::id();
            $tournament = Tournament::with('tournamentVenue')->where('date', '>', now())
              ->where('visibility','=',1)->where('user_id','=',$userId)->get();
              $tournamentt = Tournament::with('tournamentVenue')->where('date', '>', now())
              ->where('visibility','=',1)->get();
             $tournamen = Tournament::with('tournamentVenue')->where('date', '<', now())
              ->where('visibility','=',1)->get();
                return view('frontend.tournament.index', compact('tournament','tournamen','tournamentt'));
      }else{
            $tournamentt = Tournament::with('tournamentVenue')->where('date', '>', now())
              ->where('visibility','=',1)->get();
              $tournamen = Tournament::with('tournamentVenue')->where('date', '<', now())
              ->where('visibility','=',1)->get();
                return view('frontend.tournament.index', compact('tournamentt','tournamen'));
              
          }
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          $martialArt = MartialArt::all();
          $descipline=Descipline::all();
          return view('frontend.tournament.create', compact('martialArt','descipline'));
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
          //$date = Carbon::createFromFormat('Y-m-d', $request->date)->format('d/m/Y');
          if (auth()->check()) {
              $tournament_id = Tournament::create([
                  'name' => $request->tournament_name,
                  'slug' => SlugService::createSlug(Tournament::class, 'slug', $request->tournament_name),
                  'user_id' => auth()->user()->id,
                  'martial_art_id' => $request->martialArt,
                  'date' => $request->date,
                  'created_at' =>Carbon::now(),
              ])->id;
              $count = 1;
              foreach($request->descipline as $desciplines)
               {
                  $event_name = Descipline::where('id',  $desciplines)->first();
                  $event = Event::create([
                      'name' => $event_name->name,
                      'slug' => SlugService::createSlug(Event::class, 'slug', $event_name->name),
                      'tournament_id' => $tournament_id,
                      'user_id' => auth()->user()->id,
                      'martial_art_id' => $request->martialArt,
                      'descipline_id' =>  $desciplines,
                      'format' => $event_name->format,
                      'position' => $count,
                      'identifier' => $event_name->name[0],
                      'created_at' =>Carbon::now(),
                  ]);
                  $count ++;
               }
              $tournament = Tournament::where('id', $tournament_id)->first();
          } else {
              if($request->name && $request->email && $request->password) {
                  $user_id = User::create([
                      'name' => $request->name,
                      'slug' => SlugService::createSlug(User::class, 'slug', $request->name),
                      'email' => $request->email,
                      'password' => Hash::make($request->password),
                      'created_at' =>Carbon::now(),
                  ])->id;
              }
              else {
                  $name = 'Guest User';
                  $user_id = User::create([
                      'name' => $name,
                      'slug' => SlugService::createSlug(User::class, 'slug', $name),
                      'created_at' =>Carbon::now(),
                  ])->id;
              }

              $tournament_id = Tournament::create([
                  'name' => $request->tournament_name,
                  'slug' => SlugService::createSlug(Tournament::class, 'slug', $request->tournament_name),
                  'user_id' => $user_id,
                  'martial_art_id' => $request->martialArt,
                  'date' => $request->date,
                  'created_at' =>Carbon::now(),
              ])->id;
              $count = 1;

              foreach($request->descipline as $desciplines)
              {
                  $event_name = Descipline::where('id',  $desciplines)->first();
                  $event = Event::create([
                      'name' => $event_name->name,
                      'slug' => SlugService::createSlug(Event::class, 'slug', $event_name->name),
                      'tournament_id' => $tournament_id,
                      'user_id' => $user_id,
                      'martial_art_id' => $request->martialArt,
                      'descipline_id' =>  $desciplines,
                      'format' => $event_name->format,
                      'position' => $count,
                      'identifier' => $event_name->name[0],
                      'created_at' =>Carbon::now(),
                  ]);
                  $count++;
              }
              $tournament = Tournament::where('id', $tournament_id)->first();
              Auth::loginUsingId($user_id);
          }
          return redirect('/user/tournament/' . $tournament->slug);
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function showTournament($slug = '')
      {
          if($slug == '')
              abort(404);
          $tournament = Tournament::with(['tournamentEvent' => function($q)  {
              $q->orderBy('position', 'ASC')->get();
          }])->with('tournamentUser')->where('slug', $slug)->first();

                  return view('frontend.tournament.tournament_info', compact('tournament'));
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
          //
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function update(Request $request, $id)
      {
          //
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
          //
      }

      public function getTournamentDescipline(Request $request)
      {
          $descipline = Descipline::where('martial_art_id', $request->id)->get();
          return view('frontend.tournament.tournament_descipline', compact('descipline'));
      }

      public function updateTournamentDescription(Request $request)
      {
          $tournament = Tournament::find(intval($request->id));
          $tournament->update([
             'description' => $request->description
          ]);
          return redirect('/user/tournament/' . $request->slug)->with('message', 'Description updated successfully!');
      }

      public function changeTournamentVisibility(Request $request)
      {
          $tournament = Tournament::find(intval($request->id));
         
          $tournament->update([
              'visibility' => $request->visibility_id
          ]);
          return response()->json(['status' => true]);
      }

      public function changeTournamentDraw(Request $request)
      {
          $tournament = Tournament::find(intval($request->id));
          $tournament->update([
              'draws' => $request->draw_id
          ]);
          return response()->json(['status' => true]);
      }
      // public function newcompetitor(){
      //      return view('frontend.event.newcompetitor');
      // }
      // public function newComp($id,Request $request){
      //     $event=Event::find($id);
         

      //     // return redirect()->route('insertcompetitor',['event'=>$event]);
      //     return view('frontend.tournament.newcompetitor',compact('event'));
      //     }
      //     public function compinsert($id, Request $request){
      //         print_r($id);
      //         die();
      //     }
         
      public function registration($slug=''){
      if (auth()->check()) {
          $tournament = Tournament::with(['tournamentEvent' => function($q)  {
              $q->orderBy('position', 'ASC')->get();
          }])->with('tournamentUser')->where('slug', $slug)->first();

          $Schools = DB::table('schools')->where('tournament_id', $tournament->id)->get();

   if (!empty($Schools)) {
    return view('frontend.tournament.registration',compact('tournament','Schools'));
     }
     else{
         
          return view('frontend.tournament.registration',compact('tournament'));
        }
      }
      }
      public function orgnaization($slug=''){
         if (auth()->check()) {
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
              $q->orderBy('position', 'ASC')->get();
          }])->with('tournamentUser')->where('slug', $slug)->first();

        return view('frontend.tournament.organization',compact('tournament'));}
      }

      public function draw($slug=''){
        if (auth()->check()) {
           $tournament = Tournament::with(['tournamentEvent' => function($q)  {
              $q->orderBy('position', 'ASC')->get();
          }])->with('tournamentUser')->where('slug', $slug)->first();

$Schools = DB::table('schools')->where('tournament_id', $tournament->id)->get();
 foreach ($Schools as $value) {
                // echo $value->descipline_id;
     // $descipline =Descipline::where('id', $value->tournament->id)->get();
      $competitors = DB::table('competitors')->where('school_id', $value->id)->get();
          }
          foreach ($competitors as $competitor) {
          $schools=DB::table('schools')->where('id',$competitor->school_id)->get();
 }
          return view('frontend.tournament.draw',compact('tournament','competitors','schools'));
      }}
      public function schedule($slug){
   if (auth()->check()) {
           $tournament = Tournament::with(['tournamentEvent' => function($q)  {
              $q->orderBy('position', 'ASC')->get();
          }])->with('tournamentUser')->where('slug', $slug)->first();
        return view('frontend.tournament.schedule',compact('tournament'));
      }

      }

      public function saveorgnaization ($slug='',Request $request){
         if (auth()->check()) {
           $tournament = Tournament::with(['tournamentEvent' => function($q)  {
              $q->orderBy('position', 'ASC')->get();
          }])->with('tournamentUser')->where('slug', $slug)->first();

      $Schools= new School;
     $validator =Validator::make($request->all(),[
          'name' => 'required',
          'place_of_origin' => 'required',
          'contact_email' => 'required',
          'contact_phone' => 'required',
          'city' => 'required',
          'country' => 'required',
          'line1' => 'required',
      ]);


  if ($validator->passes())
  {
  $Schools->name = $request->name;
        $Schools->slug =  SlugService::createSlug(School::class, 'slug', $Schools->name);
        $Schools->user_id = $tournament->user_id;
        $Schools->tournament_id = $tournament->id;
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $Schools->logo=$name;
        $Schools->place_of_origin = $request->place_of_origin;
        $Schools->phone = $request->phone;
        $Schools->contact_email = $request->contact_email;
        $Schools->contact_phone = $request->contact_phone;
        $Schools->line1 = $request->line1;
        $Schools->line2 = $request->line2;
        $Schools->city = $request->city;
        $Schools->country = $request->country;
        
      
        $Schools->save();
         return redirect()->route('school_info',[$Schools->slug]);
     
  }
  else{
    return redirect()->route('tournament.orgnaization')->withErrors($validator)->withInput();
  }

       }


      }
      public function school_info($slug=''){
          if (auth()->check()) {
             $Schools = DB::table('schools')->where('slug', $slug)->first();
           $tournament = Tournament::with(['tournamentEvent' => function($q)  {
              $q->orderBy('position', 'ASC')->get();
          }])->with('tournamentUser')->where('id', $Schools->tournament_id)->first();
          $Schools = DB::table('schools')->where('slug', $slug)->first();
          return view('frontend.tournament.Schooldata',compact('Schools','tournament'));
        }

      }
}
