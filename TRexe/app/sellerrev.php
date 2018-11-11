<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sellerrev extends Model
{
    //
    public $table = "sellerrev";
     protected $primaryKey = 'revid';
     
     public function seller()
     {
        return $this->belongsTo('App\seller','sellerid','sellerid');

     }
}
