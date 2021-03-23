<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formController extends Controller
{
    function insert(Request $req){
            $form = new Form;
            $form->name=$req->name;
            $form->age=$req->age;
            $form->gender=$req->gender;
            $form->mobile=$req->mobile;
            $form->place=$req->place;
            $form->save();
            return redirect('viewdata/');
    }
    function show(){
            $data = Form::all();
            return view('viewform',['data'=>$data]);
    }
    function updateform($id){
            $data = Form::find($id);
            return view('updateform',['data'=>$data]);
    }

    function updatedata(Request $req)
    {
        $data = Form::find($req->id);
        $data->name=$req->name;
        $data->age=$req->age;
        $data->gender=$req->gender;
        $data->mobile=$req->mobile;
        $data->place=$req->place;
        $data->save();
        return redirect('viewdata/');
    }
    function deletedata($id){
        $data = Form::find($id);
        $data->delete();
        return redirect('viewdata/');
    }
}
