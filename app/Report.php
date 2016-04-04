<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $table = "reports";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
     | Defining relationships between models.
      --------------------------------------------------------- */

    public function record()
    {
        return $this->belongsTo('App\Record', 'record_id');
    }

    public function template()
    {
        return $this->belongsTo('App\Template', 'template_id');
    }

    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();
    }
}
