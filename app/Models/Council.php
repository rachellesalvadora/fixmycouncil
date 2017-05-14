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
     * Return associated suburbs for council
     */
    public function suburbs()
    {
        return $this->hasMany('App\Models\Suburb');
    }
}
