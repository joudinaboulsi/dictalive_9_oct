<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TitlePage;
class TitlePageController extends Controller
{
    //

    public function index(){

        $page= TitlePage::where('id',1)->first();
        return view('cms.faq_content',compact('page'));
    }


    public function store(Request $request){
        TitlePage::where('id',1)->update([

            'title' => $request->title,
            'subtitle' => $request->subtitle,
            
        
        ]);
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return  redirect()->route('faqContentCms');
    }



    public function related_blog(){

        $page= TitlePage::where('id',2)->first();
        return view('cms.related_content',compact('page'));
    }


    public function store_blog(Request $request){
        TitlePage::where('id',2)->update([

            'title' => $request->title,
            'subtitle' => $request->subtitle,
            
        
        ]);
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return  redirect()->route('relatedContentCms');
    }
}
