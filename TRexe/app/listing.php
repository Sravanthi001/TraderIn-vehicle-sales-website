<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class listing extends Model
{
    //
     public $table = "listing";
     protected $primaryKey = 'listid';

     public function getlistings ($pricelow  ,$pricehigh,$type)
     {
         $availablelistings= DB::table('listing as l')
                                ->select('l.listid','l.year','l.make','l.model','l.description','l.price','l.imagepath','l.metadata','l.sellerid')
                                ->whereRaw("
                                l.listid IN ( 
                                    Select v.listid from listing v
                                    WHERE (
                                        v.price > '{$pricelow}' AND
                                        v.price < '{$pricehigh}' AND
                                        v.type = '{$type}'
                                             )
                                    
                                                )
                                
                                           ")
                                ->orderBy('l.listid')->get()
         ;
         return $availablelistings;
     }

}
