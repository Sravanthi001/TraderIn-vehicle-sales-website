<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listingtype as listingtype;
use App\listing as listing;
use App\listingimages as listingimages;
use App\seller as seller;
use App\sellerrev as sellerrev;


class SalesController extends Controller
{
    public function __construct( listingtype $listingst, listing $listing)
    {
        $this->listingst = $listingst->all();
        $this->listing = $listing;
    }
    //

    

    public function search(Request $request)
    {
    $data=[];

       
    $data['listings']= $this->listing->all();    

       $t=[];
       $t['listingst']=$this->listingst;
    //dd($data['image']);
        return view('Sales/search',$data,$t)->with('data',$data);
    }


    public function details($listid)
    {
        $data =[];
        $listdata = $this->listing->find($listid);
        $data['type']= $listdata->type;
        $data['year']= $listdata->year;
        $data['make']= $listdata->make;
        $data['model']= $listdata->model;
        $data['description']= $listdata->description;
        $data['price']= $listdata->price;
        $data['metadata']= $listdata->metadata;
        $data['imagepath']= $listdata->imagepath;
        $data['sellerid']= $listdata->sellerid;

        $i = $data['sellerid'];
        $seller = new seller();
        $selectedseller= $seller->find($i);
        
        $data['reviews']=$selectedseller->reviews()->get();

        //dd($data['reviews']);

        return view('Sales/details',$data)->with('data',$data);
    }

    
    public function request(Request $request)
    {
        
        if($request->isMethod('post'))
        {
           // dd($data);
           
           $this->validate(
            $request,
            [
                'pricehigh'=> 'required',
                'pricelow'=>'required',
                'listtype'=>'required',
            ]
            );
          //  return redirect('Sales');
        }
        
        $data=[];

       
   // $data['listings']= $this->listing->all();
        
       $t=[];
       $t['listingst']=$this->listingst;

       $high = request()->get('pricehigh');
        $low = request()->get('pricelow');
        $listtype = request()->get('listtype');
        
      /*  $pricehigh = $request->input('pricehigh');
        $pricelow = $request->input('pricelow');
*/
        $listing = new listing();
        
       // $d =[];
        $data['pricehigh']=$high;
        $data['pricelow']=$low;
        $data['listtype']=$listtype;
     //   $d['list']=$listing->getlistings($low,$high,$listtype);
     $data['listings']=$listing->getlistings($low,$high,$listtype);
       // dd($listtype,$data['listings']);

    

        return view('Sales/search',$data,$t)->with('data',$data);
        
    }

}
