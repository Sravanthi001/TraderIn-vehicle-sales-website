<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    //
    public $table = "seller";
    protected $primaryKey = 'sellerid';
   
    public function reviews()
     {
         return $this->hasMany('App\sellerrev','sellerid');
     }
}
