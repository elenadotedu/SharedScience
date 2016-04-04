<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    protected $table = "campaigns";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
     | Defining relationships between models.
      --------------------------------------------------------- */

    public function recipients()
    {
        return $this->belongsToMany('App\Contact', 'campaign_recipients', 'campaign_id', 'contact_id');
    }

    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();

        // attach even to after delete
        Campaign::deleting(function($campaign)
        {
            // detach all recipients
            $campaign->recipients()->detach();
        });
    }
}
