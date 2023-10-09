<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogDetail;
class BlogDetailController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        $blogs = BlogDetail::all();
        return view('cms.blog.index', compact('blogs'));
    }



    public function create(){
        return view('cms.blog.create');
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
             $photo->move('assets/blog/', $image);
             
         }

         $image_box='';
        if($request->hasFile('image_box')){
           $photo = $request->file('image_box');
             $image_box = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/blog/', $image_box);
             
         }


        


        BlogDetail::insert([
            'title'        =>$request->title,
            'date'         =>$request->date,
            'text'         =>$request->text,
            'image'         =>$image,
            'image_box'     =>$image_box,
            'alt_image_box' =>$request->alt_image_box1,
            
            'alt_image'     =>$request->alt_image,
          

         
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('blogDetailCms');

    }


    public function edit($id){
        $blog = BlogDetail::where('id',$id)->first();
        return view('cms.blog.edit',compact('blog'));

    }

    public function update(Request $request,$id){

        $image='';
        if($request->hasFile('image')){
           $photo = $request->file('image');
             $image = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/blog/', $image);
             BlogDetail::where('id',$id)->update([ 'image' =>$image,]);
         }
         $image_box='';
         if($request->hasFile('image_box')){
            $photo = $request->file('image_box');
              $image_box = str_replace(
                  '/[^A-Za-z0-9]/',
                  '-',
                  time() . $photo->getClientOriginalName()
              );
              $photo->move('assets/blog/', $image_box);
              BlogDetail::where('id',$id)->update([ 'image_box' =>$image_box]);
              
          }


          

      

        BlogDetail::where('id',$id)->update([
            'title'        =>$request->title,
            'date'         =>$request->date,
            'alt_image_box' =>$request->alt_image_box,
           
            'alt_image'     =>$request->alt_image,
            'text'     =>$request->text,
         
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('blogDetailCms');

        
    }


    public function delete($id){
        BlogDetail::where('id',$id)->delete();
        toastr()->success('Data has been deleted successfully!');

        return redirect()->route('blogDetailCms');
    }
}
