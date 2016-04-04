<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    //
    protected $table = "participants";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
     | Defining relationships between models.
      --------------------------------------------------------- */

    public function contact()
    {
        return $this->belongsTo('App\Contact', 'contact_id');
    }

    public function sessions()
    {
        return $this->belongsToMany('App\Session', 'registrations');
    }

    public function registrations()
    {
        return $this->hasMany('App\Registration', 'participant_id');
    }

    public function emergencyContact1()
    {
        return $this->belongsTo('App\Contact', 'emergency_contact1_id');
    }

    public function emergencyContact2()
    {
        return $this->belongsTo('App\Contact', 'emergency_contact2_id');
    }

    public function primaryPG()
    {
        return $this->belongsTo('App\Contact', 'primary_pg_id');
    }

    public function secondaryPG()
    {
        return $this->belongsTo('App\Contact', 'secondary_pg_id');
    }

    public function family()
    {
        return $this->belongsTo('App\Family', 'family_id');
    }

    public function school()
    {
        return $this->belongsTo('App\School', 'school_id');
    }

    public function ethnicity()
    {
        return $this->belongsTo('App\Ethnicity', 'ethnicity_id');
    }

    /* --------------------------------------------------------
    | Defining accessors and setters functions.
    --------------------------------------------------------- */

    function getFirstNameAttribute()
    {
        return $this->contact->first_name;
    }

    function getLastNameAttribute()
    {
        return $this->contact->last_name;
    }

    function getEmailAttribute()
    {
        return $this->contact->email;
    }

    function getDateOfBirthAttribute()
    {
        return $this->contact->date_of_birth;
    }

    function getBusinessPhoneAttribute()
    {
        return $this->contact->business_phone;
    }

    function getHomePhoneAttribute()
    {
        return $this->contact->home_phone;
    }

    public function setEmergencyContact1IdAttribute($value)
    {
        $this->attributes['emergency_contact1_id'] = ($value == 0)? null : $value;
    }

    public function setEmergencyContact2IdAttribute($value)
    {
        $this->attributes['emergency_contact2_id'] = (!$value)? null : $value;
    }

    public function setPrimaryPgIdAttribute($value)
    {
        $this->attributes['primary_pg_id'] = (!$value)? null : $value;
    }

    public function setSecondaryPgIdAttribute($value)
    {
        $this->attributes['secondary_pg_id'] = (!$value)? null : $value;
    }

    public function setSchoolIdAttribute($value)
    {
        $this->attributes['school_id'] = (!$value)? null : $value;
    }

    public function setFamilyIdAttribute($value)
    {
        $this->attributes['family_id'] = (!$value)? null : $value;
    }

    public function setEthnicityIdAttribute($value)
    {
        $this->attributes['ethnicity_id'] = (!$value)? null : $value;
    }

    public function setGenderAttribute($value)
    {
        $this->attributes['gender'] = ($value != "M" && $value != "F")? null : $value;
    }

    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();

        Participant::deleting(function($participant)
        {
            // delete all session registrations with this participant in them
            $participant->sessions()->detach();
        });

        Participant::deleted(function($participant)
        {
            // delete all session registrations with this participant in them
            $participant->contact->delete();
        });
    }
}
