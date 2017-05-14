<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Council extends Model
{
    /**
     * The table associated with the model
     */
    protected $table = 'councils';

    /**
     * Return associated postcodes for council
     */
    public function postcode()
    {
        return $this->hasMany('App\Models\Postcode');
    }
}
