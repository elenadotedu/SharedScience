<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    //
    protected $table = "templates";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
     | Defining relationships between models.
      --------------------------------------------------------- */

    public function reports()
    {
        return $this->hasMany('App\Report', 'template_id');
    }

    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();

        Template::deleting(function($template)
        {
            // delete all reports with the record
            $reports = $template->reports;
            foreach($reports as $report)
            {
                $report->template()->dissociate();
                $report->save();
            }
        });
    }
}
