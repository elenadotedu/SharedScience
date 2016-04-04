<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ethnicity extends Model
{
    //
    protected $table = "ethnicities";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
     | Defining relationships between models.
      --------------------------------------------------------- */
    public function participants()
    {
        return $this->hasMany('App\Participant', 'ethnicity_id');
    }

    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();

        Ethnicity::deleting(function($ethnicity) {

            // remove from participants
            $participants = $ethnicity->participants;
            foreach($participants as $participant) {
                $participant->ethnicity()->dissociate();
                $participant->save();
            }
        });
    }
}
