<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile_picture', 'points', 'visible'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * This query is for getting all the spots where the user had interaction
     */
    public function spots()
    {
        return $this->belongsToMany('App\Spot')
                    ->withPivot('action_id')
                    ->join('actions', 'spot_user.action_id', '=', 'actions.id')
                    ->select('spots.*', 'actions.name AS action', 'actions.points_earned AS points_earned');
    }

    /**
     * This query is for getting the spots that where created by a single user
     */
    public function spots_created()
    {
        return $this->belongsToMany('App\Spot')
                    ->withPivot('action_id')
                    ->join('actions', 'spot_user.action_id', '=', 'actions.id')
                    ->where('actions.id', '=', 1)
                    ->select('spots.*');
    }

    /**
     * This query is for getting the spots that where liked by a single user
     */
    public function spots_liked()
    {
        return $this->belongsToMany('App\Spot')
                    ->withPivot('action_id')
                    ->join('actions', 'spot_user.action_id', '=', 'actions.id')
                    ->where('actions.id', '=', 2)
                    ->select('spots.*');
    }

    /**
     * This query is for getting the spots that where disliked by a single user
     */
    public function spots_disliked()
    {
        return $this->belongsToMany('App\Spot')
                    ->withPivot('action_id')
                    ->join('actions', 'spot_user.action_id', '=', 'actions.id')
                    ->where('actions.id', '=', 3)
                    ->select('spots.*');
    }
}
