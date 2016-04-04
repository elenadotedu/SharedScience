<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $table = "programs";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
    | Defining relationships between models.
     -------------------------------------------------------- */

    public function sessions()
    {
        return $this->hasMany('App\Session', 'program_id');
    }

    public function currentSessions()
    {
        return $this->hasMany('App\Session', 'program_id')->where('end_date', '>', date('y-m-d'));
    }

    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();

        Program::creating(function ($program) {
            if (!$program->slug)
            {
                $words = explode (' ', $program->name );
                $initials = '';
                foreach($words as $word) {
                    $initials = $initials.$word[0];
                }
                $program->slug = $initials.'_'.time();
            }
        });

        Program::deleting(function($program)
        {
            // remove program from all sessions
            $sessions = $program->sessions;
            foreach($sessions as $session) {
                abort(500, 'This program contains sessions, you can\'t delete it');
               // $session->program()->dissociate();
               // $session->save();
            }
        });
    }
}
