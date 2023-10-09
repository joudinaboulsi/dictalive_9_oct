<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
class AboutController extends Controller
{
    //
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
      $about = About::where('id',1)->first();
        return view('cms.about',compact('about'));
    }


    public function store(Request $request){


      $shape='';
      if($request->hasFile('shape')){
         $photo = $request->file('shape');
           $shape = str_replace(
               '/[^A-Za-z0-9]/',
               '-',
               time() . $photo->getClientOriginalName()
           );
           $photo->move('assets/about/', $shape);

           About::where('id',1)->update([
              'shape'=>$shape,
           ]);

      }




        $image1='';
        if($request->hasFile('image1')){
           $photo = $request->file('image1');
             $image1 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/about/', $image1);

             About::where('id',1)->update([
                'image1'=>$image1,
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
             $photo->move('assets/about/', $image2);

             About::where('id',1)->update([
                'image2'=>$image2,
             ]);

        }     

        $image3='';
        if($request->hasFile('image3')){
           $photo = $request->file('image3');
             $image3 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/about/', $image3);

             About::where('id',1)->update([
                'image3'=>$image3,
             ]);

        }     
         

        $image4='';
        if($request->hasFile('image4')){
           $photo = $request->file('image4');
             $image4 = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/about/', $image4);

             About::where('id',1)->update([
                'image4'=>$image4,
             ]);

        }   

        $image1_description='';
        if($request->hasFile('image1_description')){
           $photo = $request->file('image1_description');
             $image1_description = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/about/', $image1_description);

             About::where('id',1)->update([
                'image1_description'=>$image1_description,
             ]);

        }   

        $image2_description='';
        if($request->hasFile('image2_description')){
           $photo = $request->file('image2_description');
             $image2_description = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/about/', $image2_description);

             About::where('id',1)->update([
                'image2_description'=>$image2_description,
             ]);

        }  

        $image3_description='';
        if($request->hasFile('image3_description')){
           $photo = $request->file('image3_description');
             $image3_description = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/about/', $image3_description);

             About::where('id',1)->update([
                'image3_description'=>$image3_description,
             ]);

        }  

        $image4_description='';
        if($request->hasFile('image4_description')){
           $photo = $request->file('image4_description');
             $image4_description = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/about/', $image4_description);

             About::where('id',1)->update([
                'image4_description'=>$image4_description,
             ]);

        }  



        $image_description='';
        if($request->hasFile('image_description')){
           $photo = $request->file('image_description');
             $image_description = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/about/', $image_description);

             About::where('id',1)->update([
                'image_description'=>$image_description,
             ]);

        }   
        $video='';
        if($request->hasFile('video')){
           $photo = $request->file('video');
             $video = $photo->getClientOriginalName();
       
             $photo->move('assets/about/', $video);
             About::where('id',1)->update([  'video'=>$video,]);
         }
         $image1_portfolio='';
         if($request->hasFile('image1_portfolio')){
            $photo = $request->file('image1_portfolio');
              $image1_portfolio = str_replace(
                  '/[^A-Za-z0-9]/',
                  '-',
                  time() . $photo->getClientOriginalName()
              );
              $photo->move('assets/about/', $image1_portfolio);
 
              About::where('id',1)->update([
                 'image1_portfolio'=>$image1_portfolio,
              ]);
 
         }   


         $image2_portfolio='';
         if($request->hasFile('image2_portfolio')){
            $photo = $request->file('image2_portfolio');
              $image2_portfolio = str_replace(
                  '/[^A-Za-z0-9]/',
                  '-',
                  time() . $photo->getClientOriginalName()
              );
              $photo->move('assets/about/', $image2_portfolio);
 
              About::where('id',1)->update([
                 'image2_portfolio'=>$image2_portfolio,
              ]);
 
         } 

         $image3_portfolio='';
         if($request->hasFile('image3_portfolio')){
            $photo = $request->file('image3_portfolio');
              $image3_portfolio = str_replace(
                  '/[^A-Za-z0-9]/',
                  '-',
                  time() . $photo->getClientOriginalName()
              );
              $photo->move('assets/about/', $image3_portfolio);
 
              About::where('id',1)->update([
                 'image3_portfolio'=>$image3_portfolio,
              ]);
 
         } 
 


        About::where('id',1)->update([
     
          'title1_page' =>$request->title1_page,
          'title2_page' =>$request->title2_page,
          'content_page' =>$request->content_page,
          'title_description' =>$request->title_description,
          'text_description' =>$request->text_description,
          'small_title_portfolio' =>$request->small_title_portfolio,
          'title_portfolio' =>$request->title_portfolio,
          'text_portfolio' =>$request->text_portfolio,
          'portfolio_title1' =>$request->portfolio_title1,
          'portfolio_date1' =>$request->portfolio_date1,

          'portfolio_title2' =>$request->portfolio_title2,
          'portfolio_date2' =>$request->portfolio_date2,
          'portfolio_title3' =>$request->portfolio_title3,
          'portfolio_date3' =>$request->portfolio_date3,
          'color' =>$request->color,
          'alt1' =>$request->alt1,
          'alt2' =>$request->alt2,
          'alt3' =>$request->alt3,
          'alt4' =>$request->alt4,
          'alt1_desc' =>$request->alt1_desc,
          'alt2_desc' =>$request->alt2_desc,
          'alt3_desc' =>$request->alt3_desc,

          'alt1_portfolio' =>$request->alt1_portfolio,
          'alt2_portfolio' =>$request->alt2_portfolio,
          'alt3_portfolio' =>$request->alt3_portfolio,
          'alt_shape' =>$request->alt_shape,
        ]);
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return  redirect()->route('nousConnaitreCms');
    }
}
