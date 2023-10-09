<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage;
class HomePageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
     $home = HomePage::where('id',1)->first();
        return view('cms.home_page',compact('home'));
    }


    public function store(Request $request){
      
        $video='';
        if($request->hasFile('video')){
           $photo = $request->file('video');
             $video = $photo->getClientOriginalName();
       
             $photo->move('assets/home/', $video);
             HomePage::where('id',1)->update([  'video'=>$video,]);
         }

         
        $newImage='';
        if($request->hasFile('image')){
           $photo = $request->file('image');
             $newImage = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/home/', $newImage);
             HomePage::where('id',1)->update([  'image'=>$newImage,]);
         }


         $newImage1='';
         if($request->hasFile('image1_section4')){
            $photo = $request->file('image1_section4');
              $newImage1 = str_replace(
                  '/[^A-Za-z0-9]/',
                  '-',
                  time() . $photo->getClientOriginalName()
              );
              $photo->move('assets/home/', $newImage1);
              HomePage::where('id',1)->update([  'image1_section4'=>$newImage1,]);
          }

          $newImage2='';
          if($request->hasFile('image2_section4')){
             $photo = $request->file('image2_section4');
               $newImage2 = str_replace(
                   '/[^A-Za-z0-9]/',
                   '-',
                   time() . $photo->getClientOriginalName()
               );
               $photo->move('assets/home/', $newImage2);
               HomePage::where('id',1)->update([  'image2_section4'=>$newImage2,]);
           }


           $newImage3='';
           if($request->hasFile('image_footer')){
              $photo = $request->file('image_footer');
                $newImage3 = str_replace(
                    '/[^A-Za-z0-9]/',
                    '-',
                    time() . $photo->getClientOriginalName()
                );
                $photo->move('assets/home/', $newImage3);
                HomePage::where('id',1)->update([  'image_footer'=>$newImage3,]);
            }

            $icon1_service='';
            if($request->hasFile('icon1_service')){
               $photo = $request->file('icon1_service');
                 $icon1_service = str_replace(
                     '/[^A-Za-z0-9]/',
                     '-',
                     time() . $photo->getClientOriginalName()
                 );
                 $photo->move('assets/home/', $icon1_service);
                 HomePage::where('id',1)->update([  'icon1_service'=>$icon1_service,]);
             }

             $icon2_service='';
            if($request->hasFile('icon2_service')){
               $photo = $request->file('icon2_service');
                 $icon2_service = str_replace(
                     '/[^A-Za-z0-9]/',
                     '-',
                     time() . $photo->getClientOriginalName()
                 );
                 $photo->move('assets/home/', $icon2_service);
                 HomePage::where('id',1)->update([  'icon2_service'=>$icon2_service,]);
             }

             $icon3_service='';
             if($request->hasFile('icon3_service')){
                $photo = $request->file('icon3_service');
                  $icon3_service = str_replace(
                      '/[^A-Za-z0-9]/',
                      '-',
                      time() . $photo->getClientOriginalName()
                  );
                  $photo->move('assets/home/', $icon3_service);
                  HomePage::where('id',1)->update([  'icon3_service'=>$icon3_service,]);
              }

              $icon5_service='';
              if($request->hasFile('icon5_service')){
                 $photo = $request->file('icon5_service');
                   $icon5_service = str_replace(
                       '/[^A-Za-z0-9]/',
                       '-',
                       time() . $photo->getClientOriginalName()
                   );
                   $photo->move('assets/home/', $icon5_service);
                   HomePage::where('id',1)->update([  'icon5_service'=>$icon5_service,]);
               }

               $icon4_service='';
               if($request->hasFile('icon4_service')){
                  $photo = $request->file('icon4_service');
                    $icon4_service = str_replace(
                        '/[^A-Za-z0-9]/',
                        '-',
                        time() . $photo->getClientOriginalName()
                    );
                    $photo->move('assets/home/', $icon4_service);
                    HomePage::where('id',1)->update([  'icon4_service'=>$icon4_service,]);
                }
           
 


           HomePage::where('id',1)->update([

            'title_page'=>$request->title_page,
            'subtitle_page'=>$request->subtitle_page,
            'text'=>$request->text,
            'title1_service'=>$request->title1_service,
            'title2_service'=>$request->title2_service,
            'title_video'=>$request->title_video,
            'title_section4'=>$request->title_section4,
            'content_section4'=>$request->content_section4,
            'link'=>$request->link,
            'color1'=>$request->color1,
            'color2'=>$request->color2,
            'title_blog'=>$request->title_blog,
            'url_text'=>$request->url_text,
            'subtitle_blog'=>$request->subtitle_blog,

            'alt_image'=>$request->alt_image,
            'alt_image1_section4'=>$request->alt_image1_section4,
            'alt_image2_section4'=>$request->alt_image2_section4,
            'alt_icon1'=>$request->alt_icon1,
            'alt_icon2'=>$request->alt_icon2,
            'alt_icon3'=>$request->alt_icon3,
            'alt_icon4'=>$request->alt_icon4,
            'alt_icon5'=>$request->alt_icon5,
            'alt_footer'=>$request->alt_footer,
            
           ]);
        
           toastr()->success('Data has been saved successfully!', 'Congrats');
           return  redirect()->route('homeCms');
        
        }
}
