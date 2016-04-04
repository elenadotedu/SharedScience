<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CSVMap extends Model
{
    //
    protected $table = "csv_maps";

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
