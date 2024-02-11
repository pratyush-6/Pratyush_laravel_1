<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\DB;
use DateTime;
use Validator;

class CustomerController extends Controller
{
    //
    public function addcustomer(){
        return view('addcustomer');
    }
    public function pratyush(Request $request){
        // dd('hello');
        $name=$request->input('name');
        $lastname=$request->input('lastname');
        $email=$request->input('email');
        $mobile=$request->input('mobile');
        $age=$request->input('age');
        $gender=$request->input('gender');
        $occupation=$request->input('occupation');
        $religion=$request->input('religion');
        $mothername=$request->input('mothername');
        $fathername=$request->input('fathername');
        $maritialstatus=$request->input('maritialstatus');
        $anniversary=$request->input('anniversary');
        
        $images1=$request->file('profilepic');
            $imageName1 = rand(11111, 99999). '.' . $images1->getClientOriginalExtension();
            $images1->move(public_path('/profilepic'), $imageName1);
        $proimage=$imageName1;

        $images2=$request->file('aadharcard');
            $imageName2= rand(11111, 99999). '.' . $images2->getClientOriginalExtension();
            $images2->move(public_path('/aadharcard'), $imageName2);
        $aadimage=$imageName2;

        $images3=$request->file('signature');
            $imageName3 = rand(11111, 99999). '.' . $images3->getClientOriginalExtension();
            $images3->move(public_path('/signature'), $imageName3);
        $signimage=$imageName3;
         
        $customer=new customer();
        $customer->name=$name;
        $customer->lastname=$lastname;
        $customer->email=$email;
        $customer->mobile=$mobile;
        $customer->age=$age;
        $customer->gender=$gender;
        $customer->occupation=$occupation;
        $customer->religion=$religion;
        $customer->mothername=$mothername;
        $customer->fathername=$fathername;
        $customer->maritialstatus=$maritialstatus;
        $customer->anniversary=$anniversary;
        $customer->profilepic=$proimage;
        $customer->aadharcard=$aadimage;
        $customer->signature=$signimage;
        $customer->save();
    }
    public function listmem(){
        $edit=customer::all();
        return view('listcustomer',['value'=>$edit]);
    }
    public function editcustomer($id){
        $edit=customer::find($id);
        return view('editcustomer',['value'=>$edit]);

    }
    public function upadatecustomer(Request $request,$id)
    {
        $name=$request->input('name');
        $lastname=$request->input('lastname');
        $email=$request->input('email');
        $mobile=$request->input('mobile');
        $age=$request->input('age');
        $gender=$request->input('gender');
        $occupation=$request->input('occupation');
        $religion=$request->input('religion');
        $mothername=$request->input('mothername');
        $fathername=$request->input('fathername');
        $maritialstatus=$request->input('maritialstatus');
        $anniversary=$request->input('anniversary');
        
        $images1=$request->file('profilepic');
            $imageName1 = rand(11111, 99999). '.' . $images1->getClientOriginalExtension();
            $images1->move(public_path('/profilepic'), $imageName1);
        $proimage=$imageName1;

        $images2=$request->file('aadharcard');
            $imageName2= rand(11111, 99999). '.' . $images2->getClientOriginalExtension();
            $images2->move(public_path('/aadharcard'), $imageName2);
        $aadimage=$imageName2;

        $images3=$request->file('signature');
            $imageName3 = rand(11111, 99999). '.' . $images3->getClientOriginalExtension();
            $images3->move(public_path('/signature'), $imageName3);
        $signimage=$imageName3;
        $customer=new customer();
        $customer->name=$name;
        $customer->lastname=$lastname;
        $customer->email=$email;
        $customer->mobile=$mobile;
        $customer->age=$age;
        $customer->gender=$gender;
        $customer->occupation=$occupation;
        $customer->religion=$religion;
        $customer->mothername=$mothername;
        $customer->fathername=$fathername;
        $customer->maritialstatus=$maritialstatus;
        $customer->anniversary=$anniversary;
        $customer->profilepic=$proimage;
        $customer->aadharcard=$aadimage;
        $customer->signature=$signimage;
        $customer->save();

    }
    public function memberdetails($id){
        $edit=customer::find($id);
        return view('seemember',['value'=>$edit]);
    }
}
