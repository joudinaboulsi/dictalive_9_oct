<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
class SettingsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $settings = Settings::where('id',1)->first();
        return view('cms.settings',compact('settings'));
    }



    public function store(Request $request){

        
        $logo_header='';
        if($request->hasFile('logo_header')){
            $photo = $request->file('logo_header');
                $logo_header = str_replace(
                    '/[^A-Za-z0-9]/',
                    '-',
                    time() . $photo->getClientOriginalName()
                );
                $photo->move('assets/logo/', $logo_header);

                Settings::where('id',1)->update([
                    'logo_header'=>$logo_header,
                ]);

         }

           $logo_footer='';
           if($request->hasFile('logo_footer')){
               $photo = $request->file('logo_footer');
                   $logo_footer = str_replace(
                       '/[^A-Za-z0-9]/',
                       '-',
                       time() . $photo->getClientOriginalName()
                   );
                   $photo->move('assets/logo/', $logo_footer);

                   Settings::where('id',1)->update([
                       'logo_footer'=>$logo_footer,
                   ]);

            }

           

             
           $icon_email='';
           if($request->hasFile('icon_email')){
               $photo = $request->file('icon_email');
                   $icon_email = str_replace(
                       '/[^A-Za-z0-9]/',
                       '-',
                       time() . $photo->getClientOriginalName()
                   );
                   $photo->move('assets/logo/', $icon_email);

                   Settings::where('id',1)->update([
                       'icon_email'=>$icon_email,
                   ]);

            }

            $icon_phone='';
            if($request->hasFile('icon_phone')){
                $photo = $request->file('icon_phone');
                    $icon_phone = str_replace(
                        '/[^A-Za-z0-9]/',
                        '-',
                        time() . $photo->getClientOriginalName()
                    );
                    $photo->move('assets/logo/', $icon_phone);
 
                    Settings::where('id',1)->update([
                        'icon_phone'=>$icon_phone,
                    ]);
 
             }


     
     Settings::where('id',1)->update([

       
        'description' => $request->description,
        'address' => $request->address,
        'email' => $request->email,
        'phone' => $request->phone,
     
        'phone2' => $request->phone2,
        'fb' => $request->fb,
        'insta' => $request->insta,
        'linkedin' => $request->linkedin,
        'title_contact' => $request->title_contact,
        'link_contact' => $request->link_contact,
        'url' => $request->url,
        'tel1' => $request->tel1,
        'tel2' => $request->tel2,
        'alt_header' => $request->alt_header,
        'alt_footer' => $request->alt_footer,
        'alt_email' => $request->alt_email,
        'alt_phone' => $request->alt_phone,
      
    ]);

     toastr()->success('Data has been saved successfully!', 'Congrats');
     return  redirect()->route('settingsCms');
     
    }
}
