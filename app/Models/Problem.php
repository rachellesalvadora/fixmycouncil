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
     * Get the postcode for the problem
     */
    public function suburb()
    {
        return $this->belongsTo('App\Models\suburb');
    }

    /**
     * Get the updates for problem
     */
    public function updates()
    {
        return $this->hasMany('App\Models\Update');
    }
}
