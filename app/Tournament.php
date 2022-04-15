<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Tournament extends Model
{
    use SoftDeletes, Sluggable;

    protected $fillable = [
        'name', 'slug', 'user_id', 'martial_art_id', 'date', 'length', 'timezone', 'host', 'final_registration_date', 'description', 'show_national_flag',
        'visibility', 'registration', 'draws', 'status', 'created_at', 'updated_at'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function tournamentUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function tournamentVenue()
    {
        return $this->hasOne(TournamentVenue::class);
    }

    public function tournamentTickets()
    {
        return $this->hasMany(TournamentTickets::class);
    }

    public function tournamentDiscountPeriods()
    {
        return $this->hasMany(TournamentDiscountPeriods::class);
    }

    public function tournamentDiscountCodes()
    {
        return $this->hasMany(TournamentDiscountCodes::class);
    }

    public function tournamentDocuments()
    {
        return $this->hasMany(TournamentDocuments::class);
    }

    public function tournamentImages()
    {
        return $this->hasOne(TournamentImages::class);
    }

    public function tournamentLicense()
    {
        return $this->hasOne(TournamentLicense::class);
    }

    public function tournamentPayments()
    {
        return $this->hasOne(TournamentPayments::class);
    }

    public function tournamentEntryFees()
    {
        return $this->hasMany(TournamentEntryFees::class);
    }

    public function tournamentAdvancePricing()
    {
        return $this->hasMany(TournamentAdvancePricing::class);
    }

    public function tournamentDraws()
    {
        return $this->hasOne(TournamentDraws::class);
    }

    public function tournamentRegisterSetting()
    {
        return $this->hasOne(TournamentRegisterSetting::class);
    }

    public function tournamentRegisterIndividual()
    {
        return $this->hasOne(TournamentRegisterIndividual::class);
    }

    public function tournamentRegisterTeam()
    {
        return $this->hasOne(TournamentRegisterTeam::class);
    }

    public function tournamentRegisterCoach()
    {
        return $this->hasOne(TournamentRegisterCoach::class);
    }

    public function tournamentRegisterRefree()
    {
        return $this->hasOne(TournamentRegisterRefree::class);
    }

    public function tournamentActiveCategories()
    {
        return $this->hasOne(TournamentActiveCategories::class);
    }

    public function tournamentWeighIn()
    {
        return $this->hasMany(TournamentWeighIn::class);
    }

    public function tournamentCompetitor()
    {
        return $this->hasMany(Competitor::class);
    }

    public function tournamentSchool()
    {
        return $this->hasMany(School::class);
    }

    public function tournamentData()
    {
        return $this->hasOne(TournamentData::class);
    }

    public function tournamentEvent()
    {
        return $this->hasMany(Event::class, 'tournament_id', 'id');
    }
}
