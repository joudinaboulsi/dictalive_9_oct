<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $contact = Contact::where('id',1)->first();
        return view('cms.contact',compact('contact'));
    }

    public function store(Request $request){


        Contact::where('id',1)->update([
            'title_page'=>$request->title_page,
            'small_text'=>$request->small_text,
            'title_contact'=>$request->title_contact,
            'phone'=>$request->phone,
            'url_phone'=>$request->url_phone,
            'email'=>$request->email,
            'location'=>$request->location,
            

        ]);
        toastr()->success('Data has been saved successfully!', 'Congrats');

        return  redirect()->route('contactCms');
    }
}