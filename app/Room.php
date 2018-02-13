<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'uuid', 'socket_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get the ac model room is using.
     */
    public function ac_model()
    {
        return $this->belongsTo(AcModel::class);
    }
        
    /**
     * Get the ac status for current room.
     */
    public function room_ac()
    {
        return $this->hasOne(RoomAc::class);
    }

    /**
     * Get hvac params for room.
     */
    public function hvac()
    {
        return $this->hasOne(Hvac::class);
    }
}
