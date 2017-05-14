<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postcode extends Model
{
    /**
     * The table associated with the model
     */
    protected $table = 'postcodes';

    /**
     * Get the associated suburbs for postcode
     */
    public function suburbs()
    {
        return $this->hasMany('App\Models\Suburb');
    }

    /**
     * Get the associated problems for postcode
     */
    public function problems()
    {
        return $this->hasMany('App\Models\Problem');
    }

    /**
     * Get the associated council for postcode
     */
    public function council()
    {
        return $this->hasMany('App\Models\Council');
    }
}
