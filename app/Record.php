<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Field;

class Record extends Model
{
    //
    protected $table = "records";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
    | Defining relationships between models.
     --------------------------------------------------------- */

    public function filters()
    {
        return $this->belongsToMany('App\Field', 'record_has_filters', 'record_id', 'field_id')->withPivot('data', 'order')->orderBy('order');
    }

    public function columns()
    {
        return $this->belongsToMany('App\Field', 'record_has_columns', 'record_id', 'field_id')->withPivot('data', 'order')->orderBy('order');
    }

    public function reports()
    {
        return $this->hasMany('App\Report', 'record_id');
    }

    public function addFilter($field_id, $order = null, $data = null)
    {
        $field = Field::where('field_id', $field_id)->first();
        $this->filters()->attach($field->id, ['order' => $order, 'data' => $data]);
    }

    public function addColumn($field_id, $order = null, $data = null)
    {
        $field = Field::where('field_id', $field_id)->first();
        $this->columns()->attach($field->id, ['order' => $order, 'data' => $data]);
    }

    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();

        Record::deleting(function($record)
        {
            // delete all filters
            $record->filters()->detach();

            // delete all columns
            $record->columns()->detach();

            // delete all reports with the record
            $reports = $record->reports;
            foreach($reports as $report)
            {
                $report->delete();
            }
        });
    }
}
