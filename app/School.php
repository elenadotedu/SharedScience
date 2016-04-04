<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Address;

class School extends Model
{
    //
    protected $table = "schools";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
     | Defining relationships between models.
      --------------------------------------------------------- */

    public function address()
    {
        return $this->belongsTo('App\Address', 'address_id');
    }

    public function sessions()
    {
        return $this->hasMany('App\Session', 'school_id');
    }

    public function currentSessions()
    {
        return $this->hasMany('App\Session', 'school_id')->where('end_date', '>', date('y-m-d'));
    }

    public function programs()
    {
        return $this->hasManyThrough('App\Program', 'App\Session');
    }

    public function contacts()
    {
        return $this->belongsToMany('App\Contact', 'school_contacts');
    }

    public function participants()
    {
        return $this->hasMany('App\Participant', 'school_id');
    }

    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();

        School::creating(function ($school) {

            // prevent non unique slug error
            if (!$school->slug)
            {
                $words = explode (' ', $school->name );
                $initials = '';
                foreach($words as $word) {
                    $initials = $initials.$word[0];
                }
                $school->slug = $initials.'_'.time();
            }

            // prevent schools without addresses
            if (!$school->address_id)
            {
                $address = Address::create([]);
                $school->address_id = $address->id;
            }
        });

        School::deleting(function($school)
        {
            $school->contacts()->detach();

            // delete all reports with the record
            $sessions = $school->sessions;
            foreach($sessions as $session)
            {
                abort(500, 'This school contains sessions, you can\'t delete it, you must delete sessions first.');
                //$session->school()->dissociate();
                //$session->save();
            }

            $participants = $school->participants;

            foreach($participants as $participant)
            {
                $participant->school()->dissociate();
                $participant->save();
            }
        });
    }
}
