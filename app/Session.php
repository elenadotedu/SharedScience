<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //
    protected $table = "sessions";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
     | Defining relationships between models.
      --------------------------------------------------------- */

    public function school()
    {
        return $this->belongsTo('App\School', 'school_id');
    }

    public function program()
    {
        return $this->belongsTo('App\Program', 'program_id');
    }

    public function registrations()
    {
        return $this->hasMany('App\Registration');
    }

    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();

        Session::deleting(function($session)
        {
            // delete all associated registrations
            $registrations = $session->registrations;
            foreach($registrations as $registration)
            {
                $registration->delete();
            }
        });
    }
}
