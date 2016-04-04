<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $table = "addresses";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
     | Defining relationships between models.
      --------------------------------------------------------- */

    public function contact()
    {
        return $this->hasOne('App\Contact', 'address_id');
    }

    public function school()
    {
        return $this->hasOne('App\School', 'address_id');
    }

    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();

        // attach even to after delete
        Address::deleting(function($address)
        {
            // remove from contact
            $contact = $address->contact;
            $contact->address()->dissociate();
            $contact->save();

            // remove from school
            $school = $address->school;
            $school->address()->dissociate();
            $school->save();
        });
    }
}
