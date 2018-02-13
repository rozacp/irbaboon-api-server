<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hvac extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'flow', 'finished'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['room'];
}
