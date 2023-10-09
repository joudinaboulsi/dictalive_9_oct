<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
class FaqController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }



    
    public function index(){
        $faqs = Faq::all();


        
        return view('cms.faq.index',compact('faqs'));
    }

    
    public function create(){
        return view('cms.faq.create');
    }





    public function store(Request $request){


        Faq::insert([
            'title'=>$request->title,
            'description'=>$request->description

        ]);




        toastr()->success('Data has been saved successfully!', 'Congrats');
        return  redirect()->route('faqCms');
    }

    public function edit($id){

        $faq = Faq::find($id);
        return view('cms.faq.edit',compact('faq'));
    }


    public function update(Request $request,$id){


        Faq::where('id',$id)->update([
            'title'=>$request->title,
            'description'=>$request->description
        ]);
       
       
       
        toastr()->success('Data has been updated successfully!', 'Congrats');
        return  redirect()->route('faqCms');
   
   
    }



    public function delete($id){
        Faq::where('id',$id)->delete();

        toastr()->success('Data has been deleted successfully!', 'Congrats');
        return  redirect()->route('faqCms');
    }
}
