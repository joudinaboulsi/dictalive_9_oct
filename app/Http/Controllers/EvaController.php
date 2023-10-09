<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceCentre;
class EvaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    
    public function index(){
        $service = ServiceCentre::where('id',3)->first();
        return view('cms.eva',compact('service'));
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

         ServiceCentre::where('id',3)->update([
            'image'=>$image,
         ]);

    }

    
    $video1='';
    if($request->hasFile('video1')){
       $photo = $request->file('video1');
         $video1 = $photo->getClientOriginalName();
   
         $photo->move('assets/service/', $video1);
         ServiceCentre::where('id',3)->update([  'video1'=>$video1,]);
     }

    $video='';
    if($request->hasFile('video')){
       $photo = $request->file('video');
         $video = $photo->getClientOriginalName();
   
         $photo->move('assets/service/', $video);
         ServiceCentre::where('id',3)->update([  'video'=>$video,]);
     }

     
     ServiceCentre::where('id',3)->update([

        'title_page' => $request->title_page,
        'title_section1' => $request->title_section1,
        'text_section1' => $request->text_section1,
        
        'url_youtube' => $request->url_youtube,
        'alt_image' => $request->alt_image,
        'title_contact' => $request->title_contact,
        'text_href' => $request->text_href,
        'href' => $request->href,
   
        
     ]);
     toastr()->success('Data has been saved successfully!', 'Congrats');
     return  redirect()->route('evaCms');
     
    }
}
