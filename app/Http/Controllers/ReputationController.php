<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reputation;
class ReputationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index(){
        $service= Reputation::where('id',1)->first();
        return view('cms.reputation',compact('service'));
    }





    public function store(Request $request){


        $image_section1='';
        if($request->hasFile('image_section1')){
            $photo = $request->file('image_section1');
             $image_section1 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $image_section1);

            Reputation::where('id',1)->update([
                'image_section1'=>$image_section1,
            ]);
        }

        $icon1_section2='';
        if($request->hasFile('icon1_section2')){
            $photo = $request->file('icon1_section2');
             $icon1_section2 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $icon1_section2);

            Reputation::where('id',1)->update([
                'icon1_section2'=>$icon1_section2,
            ]);
        }


        $icon2_section2='';
        if($request->hasFile('icon2_section2')){
            $photo = $request->file('icon2_section2');
             $icon2_section2 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $icon2_section2);

            Reputation::where('id',1)->update([
                'icon2_section2'=>$icon2_section2,
            ]);
        }

        $icon3_section2='';
        if($request->hasFile('icon3_section2')){
            $photo = $request->file('icon3_section2');
             $icon3_section2 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $icon3_section2);

            Reputation::where('id',1)->update([
                'icon3_section2'=>$icon3_section2,
            ]);
        }

        $icon4_section2='';
        if($request->hasFile('icon4_section2')){
            $photo = $request->file('icon4_section2');
             $icon4_section2 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $icon4_section2);

            Reputation::where('id',1)->update([
                'icon4_section2'=>$icon4_section2,
            ]);
        }

        $icon5_section2='';
        if($request->hasFile('icon5_section2')){
            $photo = $request->file('icon5_section2');
             $icon5_section2 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $icon5_section2);

            Reputation::where('id',1)->update([
                'icon5_section2'=>$icon5_section2,
            ]);
        }

        $image_section3='';
        if($request->hasFile('image_section3')){
            $photo = $request->file('image_section3');
             $image_section3 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $image_section3);

            Reputation::where('id',1)->update([
                'image_section3'=>$image_section3,
            ]);
        }

        $image1_section3='';
        if($request->hasFile('image1_section3')){
            $photo = $request->file('image1_section3');
             $image1_section3 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $image1_section3);

            Reputation::where('id',1)->update([
                'image1_section3'=>$image1_section3,
            ]);
        }

        $image1_section4='';
        if($request->hasFile('image_section4')){
            $photo = $request->file('image_section4');
             $image_section4 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $image_section4);

            Reputation::where('id',1)->update([
                'image_section4'=>$image_section4,
            ]);
        }
        $image1_section4='';
        if($request->hasFile('image1_section4')){
            $photo = $request->file('image1_section4');
             $image1_section4 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $image1_section4);

            Reputation::where('id',1)->update([
                'image1_section4'=>$image1_section4,
            ]);
        }

        $image_section5='';
        if($request->hasFile('image_section5')){
            $photo = $request->file('image_section5');
             $image_section5 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $image_section5);

            Reputation::where('id',1)->update([
                'image_section5'=>$image_section5,
            ]);
        }

        $image1_section5='';
        if($request->hasFile('image1_section5')){
            $photo = $request->file('image1_section5');
             $image1_section5 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $image1_section5);

            Reputation::where('id',1)->update([
                'image1_section5'=>$image1_section5,
            ]);
        }

        $image_section6='';
        if($request->hasFile('image_section6')){
            $photo = $request->file('image_section6');
             $image_section6 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $image_section6);

            Reputation::where('id',1)->update([
                'image_section6'=>$image_section6,
            ]);
        }

        $image1_section6='';
        if($request->hasFile('image1_section6')){
            $photo = $request->file('image1_section6');
             $image1_section6 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $image1_section6);

            Reputation::where('id',1)->update([
                'image1_section6'=>$image1_section6,
            ]);
        }

        $image_section7='';
        if($request->hasFile('image_section7')){
            $photo = $request->file('image_section7');
             $image_section7 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $image_section7);

            Reputation::where('id',1)->update([
                'image_section7'=>$image_section7,
            ]);
        }
        $image1_section7='';
        if($request->hasFile('image1_section7')){
            $photo = $request->file('image1_section7');
             $image1_section7 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $image1_section7);

            Reputation::where('id',1)->update([
                'image1_section7'=>$image1_section7,
            ]);
        }


        $image_section8='';
        if($request->hasFile('image_section8')){
            $photo = $request->file('image_section8');
             $image_section8 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $image_section8);

            Reputation::where('id',1)->update([
                'image_section8'=>$image_section8,
            ]);
        }
        
        $image1_section8='';
        if($request->hasFile('image1_section8')){
            $photo = $request->file('image1_section8');
             $image1_section8 = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/service/', $image1_section8);

            Reputation::where('id',1)->update([
                'image1_section8'=>$image1_section8,
            ]);
        }



  

     
     Reputation::where('id',1)->update([

        'title_page'                    => $request->title_page,
        'subtitle_page'                    => $request->subtitle_page,
        'title_section1'                => $request->title_section1,
        'subtitle_section1'             => $request->subtitle_section1,
       
        'text_section1'                 => $request->text_section1,
        'color'                         => $request->color,
        'color3'                         => $request->color3,
        'title_section2'                => $request->title_section2,
        'subtitle_section2'             => $request->subtitle_section2,
        'li1_section2'                  => $request->li1_section2,
        'li2_section2'                  => $request->li2_section2,


        'li3_section2'                  => $request->li3_section2,
        'li4_section2'                  => $request->li4_section2,
        'li5_section2'                  => $request->li5_section2,

        'title1_section2'               => $request->title1_section2,
        'subtitle1_section2'            => $request->subtitle1_section2,
        'percent1_section2'             => $request->percent1_section2,
        'title2_section2'               => $request->title2_section2,
        'subtitle2_section2'            => $request->subtitle2_section2,
        'percent2_section2'             => $request->percent2_section2,
        'color2'                        => $request->color2,
        'title_section3'                => $request->title_section3,
        'text_section3'                 => $request->text_section3,
      
        'li1_section3'                  => $request->li1_section3,
        'li2_section3'                  => $request->li2_section3,
        'title_section4'                => $request->title_section4,
        'text_section4'                 => $request->text_section4,
      
        'li1_section4'                  => $request->li1_section4,
        'li2_section4'                  => $request->li2_section4,

        'title_section5'                => $request->title_section5,
        'text_section5'                 => $request->text_section5,
     
        'li1_section5'                  => $request->li1_section5,
        'li2_section5'                  => $request->li2_section5,

        'title_section6'                => $request->title_section6,
        'text_section6'                 => $request->text_section6,
      
        'li1_section6'                  => $request->li1_section6,
        'li2_section6'                  => $request->li2_section6,

        'title_section7'                => $request->title_section7,
        'text_section7'                 => $request->text_section7,
   
        'li1_section7'                  => $request->li1_section7,
        'li2_section7'                  => $request->li2_section7,

        'title_section8'                => $request->title_section8,
        'text_section8'                 => $request->text_section8,
       
        'li1_section8'                  => $request->li1_section8,
        'li2_section8'                  => $request->li2_section8,
        'title_section9'                => $request->title_section9,
        'text_section9'                 => $request->text_section9,
        'link_section9'                 => $request->link_section9,
        'url_section9'                  => $request->url_section9,
        'alt_image_s1' => $request->alt_image_s1,
        'alt_image_s3' => $request->alt_image_s3,
        'alt_image_s4' => $request->alt_image_s4,
        'alt_image_s5' => $request->alt_image_s5,
        'alt_image_s6' => $request->alt_image_s6,
        'alt_image_s7' => $request->alt_image_s7,
      

     ]);


     
     toastr()->success('Data has been saved successfully!', 'Congrats');
     return  redirect()->route('reputationsCms');
     
    }
}
