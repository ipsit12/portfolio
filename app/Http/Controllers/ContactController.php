<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function post(Request $request){
        $contact = new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->message=$request->message;
        $contact->save();
        return redirect('/')->with("Data inserted successfully");

    }
    public function secretcontactshow(){
        $contact=Contact::all();
        return view('frontend.all',compact('contact'));
    }
    public function secretcontactdelte($id){
        $contact=Contact::find($id);
        if($contact){
            $contact->delete();
            return redirect()->back()->with('success', 'Record deleted successfully!');
         }
        return view('frontend.all',compact('contact'));
    }
}
