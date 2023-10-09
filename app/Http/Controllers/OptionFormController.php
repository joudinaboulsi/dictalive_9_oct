<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\optionForm;
class OptionFormController extends Controller
{
    //
    public function index(){

        $options = optionForm::all();
        return view('cms.options_form.index',compact('options'));
    }


    public function create(){
        return view('cms.options_form.create');
    }

    public function store(Request $request){

        OptionForm::insert([
            'option' => $request->option
        ]);
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return  redirect()->route('optionContactCms');
    }

    public function edit($id){
        $option = optionForm::where('id',$id)->first();
        return view('cms.options_form.edit',compact('option'));
    }


    public function update(Request $request, $id){
        OptionForm::where('id',$id)->update([
            'option' => $request->option
        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return  redirect()->route('optionContactCms');
    }

    public function delete($id){

        OptionForm::where('id',$id)->delete();
        toastr()->success('Data has been deleted successfully!');

        return redirect()->route('optionContactCms');
    }
}
