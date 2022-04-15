<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentPayments extends Model
{
    protected $table = 'tournament_payments';

    protected $fillable = [
        'tournament_id', 'stripe_account', 'paypal_account', 'terms_and_policy', 'contact_information', 'created_at', 'updated_at'
    ];
}
