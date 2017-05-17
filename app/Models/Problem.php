<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    /**
     * The table associated with the model
     */
    protected $table = 'problems';

    /**
     * Get the council for the problem
     */
    public function council()
    {
        return $this->belongsTo('App\Models\Council');
    }

    /**
     * Get the postcode for the problem
     */
    public function suburb()
    {
        return $this->belongsTo('App\Models\Suburb');
    }

    /**
     * Get the updates for problem
     */
    public function updates()
    {
        return $this->hasMany('App\Models\Update');
    }
}
