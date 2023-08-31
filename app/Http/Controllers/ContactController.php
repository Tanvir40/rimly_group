<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //view contact page
    function view_contact(){
        $contact = ContactInfo::get();
        return view('backend.view_contact',[
            'contact'=>$contact,
        ]);
    }

    // update contact info
    function update_contact(Request $request){

        $request->validate([
            'address_one'=>'required',
            'address_two'=>'required',
            'number_one'=>'required',
            'number_two'=>'required',
            'email_one'=>'required',
            'email_two'=>'required',
            'days'=>'required',
            'times'=>'required',
        ]);

        ContactInfo::find($request->id)->update([
            'address_one'=>$request->address_one,
            'address_two'=>$request->address_two,
            'number_one'=>$request->number_one,
            'number_two'=>$request->number_two,
            'email_one'=>$request->email_one,
            'email_two'=>$request->email_two,
            'days'=>$request->days,
            'times'=>$request->times,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('updated' , 'Contact Updated Successfully');
    }

}
