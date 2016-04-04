<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    //
    protected $table = "families";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
     | Defining relationships between models.
      --------------------------------------------------------- */

    public function participants()
    {
        return $this->hasMany('App\Participant', 'family_id');
    }
    
    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();


        Family::deleting(function($family) {

            // remove from participants
            $participants = $family->participants;
            foreach($participants as $participant) {
                $participant->family()->dissociate();
                $participant->save();
            }
        });
    }
}
