<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class readlistings 
{
    //
    protected $listings = [];

    public function all()
    {
        return $this->listings;

    }

    public function get( $id )
    {
        return $this->listings[$id];

    }


}
