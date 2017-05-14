<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    /**
     * The table associated with the model
     */
    protected $table = 'updates';

    /**
     * Return associated problem for update
     */
    public function problem()
    {
        return $this->belongsTo('App\Models\Problem');
    }
}
