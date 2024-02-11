<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Response;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use DateTime;
use Validator;


class CourseController extends Controller
{
    //
   
    public function addcourses(Request $request){
        $name=$request->input('name');
            $images=$request->file('image');
            $imageName = rand(11111, 99999) . '.' . $images->getClientOriginalExtension();
            $images->move(public_path('/uploads'), $imageName);
        $image=$imageName;  
        $title=$request->input('title');
        $description=$request->input('description');
        $coursetype=$request->input('coursetype');
 
        DB::table('courses')->insert([
            'name'=>$name,
            'image'=>$image,
            'title'=>$title,
            'description'=>$description,
            'coursetype'=>$coursetype,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
    public function editcourse($id){
        $edit=course::find($id);
        return view('editcourse',['value'=>$edit]);
    }
    public function updatecourse(Request $request,$id){
        
     $name=$request->input('name');
    $images=$request->file('image');
        $imageName = rand(11111, 99999) . '.' . $images->getClientOriginalExtension();
        $images->move(public_path('/uploads'), $imageName);
    $image=$imageName;  
    $title=$request->input('title');
    $description=$request->input('description');
    $coursetype=$request->input('coursetype');
    DB::table('courses')->where('id',$id)->update([
        'name'=>$name,
        'image'=>$image,
        'title'=>$title,
        'description'=>$description,
        'coursetype'=>$coursetype,
        'updated_at'=>now()

    ]);
    return redirect()->route('courselist')->with('success', 'Record updated successfully');
    }
}
       // dd($image);
        // $course=new Course();
        // $course->name=$name;
        // $course->image=$image;         
        // $course->title=$title;
        // $course->description=$description;
        // $course->coursetype=$coursetype;
        // $course->save();