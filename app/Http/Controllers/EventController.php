<?php

namespace App\Http\Controllers;

use App\Descipline;
use App\Event;
use App\MartialArt;
use App\Tournament;
use App\Competitor;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\School;
use DB;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService as SlugService;

class EventController extends Controller
{
    public function newEvent($slug = '')
    {
        if ($slug == '')
            abort(404);
        $getSlug = Tournament::where('slug', $slug)->first();
        if (!$getSlug)
            abort(404);
        $tournamentUser = Tournament::with('tournamentUser')->where('slug', '=', $slug)->first();
        $tournamentEvent = Tournament::with('tournamentEvent')->where('slug', '=', $slug)->first();
        $tournamentEventPosition = $tournamentEvent->tournamentEvent->pluck('position');
        $martialArt = MartialArt::with('descipline')->get();
        
        return view('frontend.event.new_event', compact('martialArt', 'tournamentEventPosition', 'tournamentUser', 'slug'));
    }

    public function createNewEvent(Request $request)
    {
        $tournament_id = Tournament::where('slug', $request->slug)->pluck('id')->first();
        $martial_art_id = Descipline::where('id', $request->descipline)->pluck('martial_art_id')->first();
        $tournamentEvent = Tournament::with('tournamentEvent')->where('slug', '=', $request->slug)->first();
        $tournamentEventPosition = $tournamentEvent->tournamentEvent->pluck('position');
        $getEventPositionSort = Event::where('tournament_id', $tournament_id)->where('position', $request->position)->first();
        if ($getEventPositionSort) {
            $getEventPositionSort->update([
                'position' => count($tournamentEventPosition) + 1
            ]);
            $event = Event::create([
                'name' => $request->name,
                'slug' => SlugService::createSlug(Event::class, 'slug', $request->name),
                'tournament_id' => $tournament_id,
                'user_id' => auth()->user()->id,
                'martial_art_id' => $martial_art_id,
                'descipline_id' => $request->descipline,
                'format' => $request->formation,
                'position' => $request->position,
                'identifier' => $request->name[0],
                'created_at' => Carbon::now(),
            ]);
        }
        else {
            $event = Event::create([
                'name' => $request->name,
                'slug' => SlugService::createSlug(Event::class, 'slug', $request->name),
                'tournament_id' => $tournament_id,
                'user_id' => auth()->user()->id,
                'martial_art_id' => $martial_art_id,
                'descipline_id' => $request->descipline,
                'format' => $request->formation,
                'position' => $request->position,
                'identifier' => $request->name[0],
                'created_at' => Carbon::now(),
            ]);
        }
        return redirect('/user/tournament/' . $request->slug);
    }

    public function importEvent()
    {
        return view('frontend.event.import_event');
    }

    public function eventDivision($slug = '', $slug2 = '')
    {
        if($slug == '' || $slug2 == '')
            abort(404);
        $tournament = Tournament::with('tournamentUser')->where('slug', $slug)->first();
        $event = Event::where('slug', $slug2)->first();
        return view('frontend.event.division', compact('slug', 'tournament', 'event'));
    }

    public function eventEditDivision($slug= '', $slug2 = '')
    {
        if($slug == '' || $slug2 == '')
            abort(404);
        $tournament = Tournament::with('tournamentUser')->where('slug', $slug)->first();
        $event = Event::where('slug', $slug2)->first();
        return view('frontend.event.edit_division', compact('slug', 'tournament', 'event'));
    }

    public function eventCategories($slug = '', $slug2 = '')
    {
        if($slug == '' || $slug2 == '')
            abort(404);
        $tournament = Tournament::with('tournamentUser')->where('slug', $slug)->first();
        $event = Event::where('slug', $slug2)->first();
        return view('frontend.event.categories', compact('slug', 'tournament', 'event'));
    }

    public function eventCompetitors($slug = '', $slug2 = '')
    {
        if($slug == '' || $slug2 == '')
            abort(404);
        $tournament = Tournament::with('tournamentUser')->where('slug', $slug)->first();
        $event = Event::where('slug', $slug2)->first();
        return view('frontend.event.competitors', compact('slug', 'tournament', 'event'));
    }

    public function eventSetting($slug = '', $slug2 = '')
    {
        if($slug == '' || $slug2 == '')
            abort(404);
        $tournament = Tournament::with('tournamentUser')->where('slug', $slug)->first();
        $event = Event::where('slug', $slug2)->first();
        $tournamentEvent = Tournament::with('tournamentEvent')->where('slug', '=', $slug)->first();
        $tournamentEventPosition = $tournamentEvent->tournamentEvent->pluck('position');
        $descipline = Descipline::all();
        return view('frontend.event.setting', compact('slug', 'tournament', 'event', 'tournamentEventPosition', 'descipline'));
    }
    public function eventCompetitor($slug=''){
       
        if (!empty($slug)) {
             $school = DB::table('schools')->where('slug', $slug)->first();
       if ($school=='') {
           $tournament=Tournament::where('slug','=',$slug)->first();
            $schools = DB::table('schools')->where('tournament_id','=',$tournament->id)->get();
           return view('frontend.event.newCompetitor',compact('tournament','schools'));
       }else{
          $school = DB::table('schools')->where('slug', $slug)->first();
         $tournament=Tournament::where('id','=',$school->tournament_id)->first();
        $event=Event::where('tournament_id','=',$tournament->id)->get();
        $schools = DB::table('schools')->where('tournament_id','=',$school->tournament_id)->get();
        foreach ($event as $value) {
                // echo $value->descipline_id;
         $descipline[]=Descipline::where('id','=',$value->descipline_id)->get();
          }
        return view('frontend.event.newCompetitor',compact('schools','descipline','tournament'));


       }

       
         
        }
        


    }
    public function storeevent($slug='',Request $request){
         $Schools = DB::table('schools')->where('slug', $slug)->first();
         $tournament = DB::table('tournaments')->where('id','=',$Schools->tournament_id)->first();
         $competitor= new Competitor;
          $day=$request->Birthday;
         $month=$request->Birthday1;
         $year=$request->Birthday2;
         $time = strtotime($day.'/'.$month.'/'.$year);
         $newformat = date('Y-m-d',$time);

         $competitor->name = $request->name;
         $competitor->slug =  SlugService::createSlug(School::class, 'slug', $competitor->name);
         $competitor->tournament_id = $tournament->id;
         $competitor->school_id = $request->school;
         $competitor->gender = $request->Gender;
         $competitor->dob = $newformat;
       
         $competitor->nationality  = $request->Nationality;
         $competitor->age = $request->age;
         $competitor->weight  = $request->weight;
         $competitor->email = $request->email;
         $competitor->phone = $request->number;

         $competitor->event_id = $request->check;
         $competitor->save();
 return redirect()->route('event_info',[$competitor->slug]);
         

    
}
public function event_info($slug){
         if (auth()->check()) {
         $competitors = DB::table('competitors')->where('slug', $slug)->first();
 $Schools = DB::table('schools')->where('id','=',$competitors->school_id)->first();
         $tournament = Tournament::with(['tournamentEvent' => function($q)  {
            $q->orderBy('position', 'ASC')->get();
        }])->with('tournamentUser')->where('id', $Schools->tournament_id)->first();
    
    
  $competitors = DB::table('competitors')->where('slug', $slug)->first();
 $Schools = DB::table('schools')->where('id','=',$competitors->school_id)->first();
  $competitor = DB::table('competitors')->where('slug', $slug)->get();
   foreach ($competitor as $value) {
                // echo $value->descipline_id;
     $descipline =Descipline::where('id', $value->event_id)->get();
          }
  
 


  return view('frontend.tournament.Schooldata',compact('competitor','Schools','descipline','tournament'));
      
}
}
}
