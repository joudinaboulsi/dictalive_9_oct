<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderText;
class SliderTextController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $slider = SliderText::where('id',1)->first();
        return view('cms.slider',compact('slider'));
    }


    public function store(Request $request){
        SliderText::where('id',1)->update([
            'slider1'=>$request->slider1,
            'slider2'=>$request->slider2,
            'slider3'=>$request->slider3,
            'slider4'=>$request->slider4,
            'slider5'=>$request->slider5,
            'slider6'=>$request->slider6,
            'slider7'=>$request->slider7,
            'slider8'=>$request->slider8,
            'slider9'=>$request->slider9,
            'slider10'=>$request->slider10,
            'slider11'=>$request->slider11,
            'slider12'=>$request->slider12,
            'slider13'=>$request->slider13,
            'slider14'=>$request->slider14,

            'slider15'=>$request->slider15,
            'slider16'=>$request->slider16,
            'slider17'=>$request->slider17,
            'slider18'=>$request->slider18,
            'color'=>$request->color,
            'color2'=>$request->color2,
            
           

         

          
        ]);
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return  redirect()->route('sliderCms');
    }

   



}
