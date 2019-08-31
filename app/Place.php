<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image_url', 'title', 'location',
    ];

    public function offers()
    {
        return $this->hasMany('App\Offer');
    }

    public function activeOffers()
    {
        return $this->hasMany('App\Offer')->where('active', true);
    }
}
