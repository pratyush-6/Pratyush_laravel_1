<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;
use DateTime;
use Validator;

class BannerController extends Controller
{
    public function banner(){
        return view('add_banner');
    }
    public function addbanner(Request $request){
        // dd('hello');
  
        $images=$request->file('image');
        $imageName = rand(11111, 99999) . '.' . $images->getClientOriginalExtension();
        $images->move(public_path('/banner'), $imageName);
    $image=$imageName;  
    $title=$request->input('title');
    $description=$request->input('description');
    
    $banner =new Banner();
    $banner->image=$image;
    $banner->title=$title;
    $banner->description=$description;
    $banner->save();
    }
    public function editbanner($id){
        $edit=Banner::find($id);
        return view('editbanner',['value'=>$edit]);
   
    }
    public function updatebanner(Request $request,$id){
        $images=$request->file('image');
            $imageName = rand(11111, 99999). '.' . $images->getClientOriginalExtension();
            $images->move(public_path('/banner'), $imageName);
        $image=$imageName;  
        $title=$request->input('title');
        $description=$request->input('description');
       
        DB::table('banners')->where('id',$id)->update([         
            'image'=>$image,
            'title'=>$title,
            'description'=>$description,           
            'updated_at'=>now()
    
        ]);
        return redirect()->route('courselist')->with('success', 'Record updated successfully');
        
    }
}
