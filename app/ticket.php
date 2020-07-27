<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $fillable = [
        'trip_id', 'level','quantity','price','start_date','end_date'
    ];

    public function trip()
    {
    return $this->belongsTo('App\Trip');
    }

}
