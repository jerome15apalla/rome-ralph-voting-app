<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("layout.login");
    }
    public function registration()
    {
        return view("layout.registration");
    }
    public function registerVoter(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'mname'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'height'=>'required',
            'weight'=>'required',
            'birthMonth'=>'required',
            'birthCity'=>'required',
            'birthProvince'=>'required',
            'province'=>'required',
            'city'=>'required',
            'barangay'=>'required',
            'houseNo'=>'required',
            'citizenship'=>'required',
            'typeOfCitizenship'=>'required',
            'civilStatus'=>'required',
            'job'=>'required',
            'fathername'=>'required',
            'mothername'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|max:24'
        ]);
        $user = new User();
        $user->fname = $request->fname;
        $user->mname = $request->mname;
        $user->lname = $request->lname;
        $user->gender = $request->gender;
        $user->height = $request->height;
        $user->weight = $request->weight;
        $user->birthMonth = $request->birthMonth;
        $user->birthCity = $request->birthCity;
        $user->birthProvince = $request->birthProvince;
        $user->province = $request->province;
        $user->city = $request->city;
        $user->barangay = $request->barangay;
        $user->houseNo = $request->houseNo;
        $user->citizenship = $request->citizenship;
        $user->typeOfCitizenship = $request->typeOfCitizenship;
        $user->civilStatus = $request->civilStatus;
        $user->job = $request->job;
        $user->fathername = $request->fathername;
        $user->mothername = $request->mothername;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','You are now a registered Voter.');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
    public function loginVoter(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|max:24'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('voting');
            }else {
                return back()->with('fail','The password is incorrect.');
            }
        }else {
            return back()->with('fail','This email is not registered.');
        }
    }
    public function profile()
    {
        $user = DB::table('users')->first();
        return view('profile',['user'=>$user]);
    }
    public function voting(Request $request)
    {
        return view("voting");
    }
    public function statistics()
    {
        return view("statistics");
    }
    public function finished(Request $request)
    {
        $request->validate([
            'president'=>'required',
            'vice_president'=>'required',
            'senator'=>'required|max:12'
        ]);
    }
    public function voterstat()
    {
        return view("voterstatistics");
    }
}
