<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    /**
     * This query is for getting all the users that have some interaction with this spot
     */
    public function users()
    {
        return $this->belongsToMany('App\User')
                    ->withPivot('action_id')
                    ->join('actions', 'spot_user.action_id', '=', 'actions.id')
                    ->select('users.*', 'actions.name AS action', 'actions.points_earned AS points_earned');
    }

    /**
     * This query is for getting the creator of some spot
     * 1 refers that the action of adding a new spot has the id of 1
     */
    public function creator()
    {
        return $this->belongsToMany('App\User')
                    ->withPivot('action_id')
                    ->join('actions', 'spot_user.action_id', '=', 'actions.id')
                    ->where('actions.id', '=', 1)
                    ->select('users.*', 'actions.name AS action', 'actions.points_earned AS points_earned');
    }

    /**
     * This query is for getting the country of a spot
     */
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
