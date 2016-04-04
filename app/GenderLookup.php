<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenderLookup extends Model
{
    //
    protected $table = "genders_lookup";

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
