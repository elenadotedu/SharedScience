<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //
    protected $table = "registrations";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
     | Defining relationships between models.
      --------------------------------------------------------- */

    public function participant()
    {
        return $this->belongsTo('App\Participant', 'participant_id');
    }

    public function session()
    {
        return $this->belongsTo('App\Session', 'session_id');
    }

    public function status()
    {
        return $this->belongsTo('App\RegistrationStatus', 'status_id');
    }

    /* --------------------------------------------------------
    | Defining accessors and setters functions.
    --------------------------------------------------------- */

    public function setStatusIdAttribute($value)
    {
        $this->attributes['status_id'] = (!$value)? null : $value;
    }

    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();
    }
}
