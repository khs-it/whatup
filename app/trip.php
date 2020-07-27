<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trip extends Model
{
    protected $fillable = [
        'from', 'to', 'dep_date', 'arrival_date', 'dep_time', 'arrival_time'
    ];

    public function tickets()
    {
    return $this->hasMany('App\Ticket');
    }



}
