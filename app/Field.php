<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Contact;

class Field extends Model
{
    //
    protected $table = "fields";

    protected $guarded = [
    ];

    /* --------------------------------------------------------
     | Defining relationships between models.
      --------------------------------------------------------- */

    public function filterRecords()
    {
        return $this->belongstoMany('App\Record', 'record_has_filters', 'field_id', 'record_id')->withPivot('data', 'order');
    }

    public function columnRecords()
    {
        return $this->belongstoMany('App\Record', 'record_has_columns', 'field_id', 'record_id')->withPivot('data', 'order');
    }

    /* --------------------------------------------------------
    | Defining accessors and setters functions.
    --------------------------------------------------------- */

    public function getValuesAttribute()
    {

        if($this->attributes['values']!=null)
        {
            $params = json_decode($this->attributes['values'], true);
            if($params)
            {
                if (array_key_exists('table', $params) && array_key_exists('columns', $params) && array_key_exists('lists', $params))
                {
                    $table = $params['table'];
                    $columns = [];

                    // set list columns
                    foreach($params['columns'] as $column)
                    {
                        array_push($columns, DB::raw($column));
                    }
                    $query = DB::table($table)->select($columns);

                    // set joins
                    if (array_key_exists('joins', $params))
                    {
                        $joins = $params['joins'];
                        $join_alias = $table;
                        foreach($joins as $join)
                        {
                            if (array_key_exists('parent_alias', $join))
                            {
                                $join_alias = $join['parent_alias'];
                            }
                            $query= $query->join($join['table'].' AS '.$join['alias'], $join_alias.'.'.$join['on'], '=', $join['alias'].'.'.$join['equal']);
                            $join_alias = $join['alias'];
                        }
                    }

                    $lists= $params['lists'];
                    return json_encode($query->lists($lists[0], $lists[1]));
                }
                else {
                    return json_encode($params);
                }
            }
        }
        return null;

    }


    /* --------------------------------------------------------
    | Overriding boot function.
    --------------------------------------------------------- */

    public static function boot()
    {
        parent::boot();

        Field::deleting(function($field)
        {
            // detach all records that have this field as filter
            $field->filterRecords()->detach();

            // detach all records that have this field as column
            $field->columnRecords()->detach();

        });
    }
}
