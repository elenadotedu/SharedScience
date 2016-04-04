<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = "contacts";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
     | Defining relationships between models.
      --------------------------------------------------------- */

    public function address()
    {
        return $this->belongsTo('App\Address', 'address_id');
    }

    public function participant()
    {
        return $this->hasOne('App\Participant', 'contact_id');
    }

    public function campaigns()
    {
        return $this->belongsToMany('App\Campaign', 'campaign_recipients', 'contact_id', 'campaign_id');
    }

    public function emergencyContact1Participants()
    {
        return $this->hasMany('App\Participant', 'emergency_contact1_id');
    }

    public function emergencyContact2Participants()
    {
        return $this->hasMany('App\Participant', 'emergency_contact2_id');
    }

    public function primaryPGParticipants()
    {
        return $this->hasMany('App\Participant', 'primary_pg_id');
    }

    public function secondaryPGParticipants()
    {
        return $this->hasMany('App\Participant', 'secondary_pg_id');
    }

    public function schools()
    {
        return $this->belongsToMany('App\School', 'school_contacts', 'contact_id', 'school_id');
    }

    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();

        Contact::creating(function ($contact) {

            // prevent contacts without addresses
            if (!$contact->address_id)
            {
                $address = Address::create([]);
                $contact->address_id = $address->id;
            }
        });

        Contact::deleting(function($contact)
        {
            $contact->schools()->detach();

            // delete attached participant if exists
            if ($contact->participant)
            {
                $contact->participant->delete();
            }

            // detach all campaigns
            $contact->campaigns()->detach();

            // remove associations as emergency contacts
            $emergencyContact1Participants = $contact->emergencyContact1Participants;
            foreach($emergencyContact1Participants as $participant)
            {
                $participant->emergencyContact1()->dissociate();
                $participant->save();
            }

            // remove associations as emergency contacts
            $emergencyContact2Participants = $contact->emergencyContact2Participants;
            foreach($emergencyContact2Participants as $participant)
            {
                $participant->emergencyContact2()->dissociate();
                $participant->save();
            }

            // remove associations as primary parent guardian
            $primaryPGParticipants = $contact->primaryPGParticipants;
            foreach($primaryPGParticipants as $participant)
            {
                $participant->primaryPG()->dissociate();
                $participant->save();
            }

            // remove associations as secondary parent guardian
            $secondaryPGParticipants = $contact->secondaryPGParticipants;
            foreach($secondaryPGParticipants as $participant)
            {
                $participant->secondaryPG()->dissociate();
                $participant->save();
            }

        });

        Contact::deleted(function($contact)
        {
            // delete all addresses
            $contact->address()->delete();
        });
    }
}
