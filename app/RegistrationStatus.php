<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrationStatus extends Model
{
    //
    protected $table = "registration_statuses";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
     | Defining relationships between models.
      --------------------------------------------------------- */

    public function registrations()
    {
        return $this->hasMany('App\Registration', 'status_id');
    }

    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();

        RegistrationStatus::deleting(function($status)
        {
            // delete all reports with the record
            $registrations = $status->registrations;
            foreach($registrations as $registration)
            {
                $registration->status()->dissociate();
                $registration->save();
            }
        });
    }
}
