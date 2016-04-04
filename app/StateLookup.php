<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StateLookup extends Model
{
    //
    protected $table = "states_lookup";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
     | Defining relationships between models.
      --------------------------------------------------------- */

    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();
    }
}
