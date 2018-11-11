<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactsellerController extends Controller
{
    //
    public function showform(Request $request)
    {
        $data =[];

        $data['name'] = $request->input('name');
        $data['last_name'] = $request->input('last_name');
        $data['address'] = $request->input('address');
        $data['zip_code'] = $request->input('zip_code');
        $data['Description'] = $request->input('Description');
        $data['email'] = $request->input('email');

        if($request->isMethod('post'))
        {
           // dd($data);
           
           $this->validate(
            $request,
            [
                'name'=> 'required',
                'last_name'=>'required',
                'address'=> 'required',
                'zip_code'=>'required|digits:5',
                'email'=>'required|email',
            ]
            );

            Mail::send('emails/emailtemp',$data,function($m)use ($data){
                $m->from($data['email']);
                $m->to('skapu001@odu.edu');
            }
             );

           // return redirect('Sales');
        }


        return view('Contactseller/showform');
    }

    public function sendemail()
    {

        return view('Contactseller/sendemail');
    }

}
