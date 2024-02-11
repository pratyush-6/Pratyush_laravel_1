<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\social;
use Illuminate\Support\Facades\DB;
use DateTime;
use Validator;

class SocialController extends Controller
{
    //
    public function addsocial(){
        $edit=social::all();
        // dd($edit);
        return view('social',['value'=>$edit]);
    }
    public function editsocial($id){
        $edit=social::find($id);
        return view ('editsocial',['value'=>$edit]);

    }
    public function updatesocial(Request $request ,$id){
    //    dd('hello');
        $name=$request->input('name');
        $link=$request->input('link');
        $class=$request->input('class');
        DB::table('socials')->where('id',$id)->update([         
            
            'name'=>$name,
            'link'=>$link,    
            'class'=>$class,       
            'updated_at'=>now()
    
        ]);
       
    
       

    }
}
