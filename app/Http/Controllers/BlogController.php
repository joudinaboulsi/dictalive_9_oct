<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(){
     $blog= Blog::where('id',1)->first();
        return view('cms.blog_content',compact('blog'));
    }



    public function store(Request $request){


        Blog::where('id',1)->update([
            'title_blog'          =>$request->title_blog,
            'text_blog'           =>$request->text_blog,
            'text_read_more'      =>$request->text_read_more,
        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return  redirect()->route('blogCms');
        

    }
}
