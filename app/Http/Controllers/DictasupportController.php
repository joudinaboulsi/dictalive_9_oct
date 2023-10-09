<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dictasupport;
class DictasupportController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $service= Dictasupport::where('id',1)->first();
        return view('cms.dictasupport',compact('service'));
    }





    public function store(Request $request){
        $image='';
    if($request->hasFile('image')){
       $photo = $request->file('image');
         $image = str_replace(
             '/[^A-Za-z0-9]/',
             '-',
             time() . $photo->getClientOriginalName()
         );
         $photo->move('assets/service/', $image);

         Dictasupport::where('id',1)->update([
            'image'=>$image,
         ]);

    }

    $image2='';
    if($request->hasFile('image2')){
       $photo = $request->file('image2');
         $image2 = str_replace(
             '/[^A-Za-z0-9]/',
             '-',
             time() . $photo->getClientOriginalName()
         );
         $photo->move('assets/service/', $image2);

         Dictasupport::where('id',1)->update([
            'image2'=>$image2,
         ]);

    }

  

     
     Dictasupport::where('id',1)->update([

        'title_page' => $request->title_page,
        'subtitle_page' => $request->subtitle_page,
        'title_section1' => $request->title_section1,
        'subtitle_section1' => $request->subtitle_section1,
        'text_section1' => $request->text_section1,
        'text_section2' => $request->text_section2,
        'title_section2' => $request->title_section2,
        'text_section3' => $request->text_section3,
        'title_section3' => $request->title_section3,
        'link' => $request->link,
        'url' => $request->url,
       
      
        'color' => $request->color,
        'color2' => $request->color2,
        'color3' => $request->color3,
       
        

     ]);
     toastr()->success('Data has been saved successfully!', 'Congrats');
     return  redirect()->route('dictasupportCms');
     
    }
}
