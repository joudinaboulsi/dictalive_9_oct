<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FooterPage;
class FooterPageController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    

    public function politique(){
        $politique= FooterPage::where('id',1)->first();
       return view('cms.politique',compact('politique'));
    }

    public function save_politiques(Request $request){
          
    
        FooterPage::where('id',1)->update([
 
                 'title_page'     =>$request->title_page,
                 'subtitle_page'  =>$request->subtitle_page,
                 'content'        =>$request->content,
             ]);
 
             toastr()->success('Data has been saved successfully!');
 
               return redirect()->route('politiqueCms');
    }
 












    public function cookies(){
        $cookies= FooterPage::where('id',2)->first();

        return view('cms.cookies',compact('cookies'));
    }




   public function save_cookies(Request $request){

        FooterPage::where('id',2)->update([

            'title_page'      =>$request->title_page,
            'subtitle_page'   =>$request->subtitle_page,
            'content'         =>$request->content,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('cookiesCms');
        
   }




   public function mentions_legales(){
    $legales= FooterPage::where('id',3)->first();

    return view('cms.mentions_legales',compact('legales'));
}




public function  save_mentions_legales(Request $request){

    FooterPage::where('id',3)->update([

        'title_page'      =>$request->title_page,
        'subtitle_page'   =>$request->subtitle_page,
        'content'         =>$request->content,
    ]);

    toastr()->success('Data has been saved successfully!');

    return redirect()->route('mentionslegalesCms');
    
}


}
