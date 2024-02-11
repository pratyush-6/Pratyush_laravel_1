<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use Illuminate\Support\Facades\DB;
use DateTime;
use Validator;

class AboutController extends Controller
{
    //
    public function aboutlist(){
        $about=about::all();
        return view('aboutme',['about'=>$about]);
    }
    public function updateabout($id){
        $edit=about::find($id);
        return view('updateaboutme',['value'=>$edit]);
    }
    public function aboutlistupdate( Request $request,$id){
        $name=$request->input('name');
        $images=$request->file('image');
            $imageName = rand(11111, 99999). '.' . $images->getClientOriginalExtension();
            $images->move(public_path('/about'), $imageName);
        $image=$imageName;  
        $age=$request->input('age');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $city=$request->input('city');
        $degree=$request->input('degree');

        DB::table('abouts')->where('id',$id)->update([         
            'name'=>$name,
            'image'=>$image,
            'age'=>$age,
            'email'=>$email,
            'phone'=>$phone,
            'city'=>$city,
            'degree'=>$degree,           
            'updated_at'=>now()
    
        ]);
    }
}
