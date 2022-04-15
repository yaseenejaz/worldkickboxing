<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \Cviebrock\EloquentSluggable\Services\SlugService as SlugService;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!auth()->user()) {
                return redirect()->route('home');
            }
            return $next($request);
        });
    }

    public function user($slug = '')
    {
        if ($slug == '' || $slug != auth()->user()->slug)
            abort(404);
        $user = User::where('slug', $slug)->first();
        $tournament = $user->userTournaments;
        return view('frontend.user.profile', compact('slug', 'tournament'));
    }

    public function billing($slug = '')
    {
        if ($slug == '' || $slug != auth()->user()->slug)
            abort(404);
        return view('frontend.user.billing', compact('slug'));
    }

    public function accountSetting($slug = '')
    {
        if ($slug == '' || $slug != auth()->user()->slug)
            abort(404);
        $user = User::where('slug', $slug)->first();
        return view('frontend.user.account_setting', compact('user', 'slug'));
    }

    public function stripe($slug = '')
    {
        if ($slug == '' || $slug != auth()->user()->slug)
            abort(404);
        return view('frontend.user.stripe', compact('slug'));
    }

    public function paypal($slug = '')
    {
        if ($slug == '' || $slug != auth()->user()->slug)
            abort(404);
        return view('frontend.user.paypal', compact('slug'));
    }

    public function userInfoUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|unique:users,email,' . auth()->user()->id,
        ]);
        $user = User::find(auth()->user()->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'remind' => $request->remind_me ?? 0,
            'updated_at' => Carbon::now()
        ]);
        return redirect('/account_setting/' . $user->slug)->with('message', 'Profile updated successfully!');
    }

    public function userPasswordUpdate(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);

        /*
        * Validate all input fields
        */
        $validatedData = $request->validate([
            'password' => 'required|string|min:8',
        ]);

        if (Hash::check($request->old_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
            return redirect('/account_setting/' . $user->slug)->with('password', 'Password changed successfully!');

        } else {
            return redirect('/account_setting/' . $user->slug)->with('error', 'Old password does not match');
        }
    }

    public function guestInfoUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|unique:users,email,',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = User::find(auth()->user()->id);
        $user->update([
            'slug' => null
        ]);
        $user->update([
            'name' => $request->name,
            'slug' => SlugService::createSlug(User::class, 'slug', $request->name),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'remind' => $request->remind_me ?? 0,
            'updated_at' => Carbon::now()
        ]);
        return redirect('/account_setting/' . $user->slug)->with('message', 'Profile updated successfully!');
    }

    public function userTournamentRanking($slug)
    {
        return view('frontend.user.user_ranking', compact('slug'));
    }
}
