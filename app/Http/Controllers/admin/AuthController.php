<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class AuthController extends Controller
{
    
    public function login(){
        return view('admin.login');
    } 
    public function home(Request $request){
        Validator::validate($request->all(),
        [
            'email-username'=>['required','min:3','max:10'],
            'password'=>['required','min:8','max:10'],
        ],[

            'email-username.required'=>'This field requried',
            'password.min'=>'Password less 6 character',

        ]);
        // insert into DB
        // $insert=new User();
        // $insert->name=$request.Input('email-username');
        // $insert->save();
    } 
   

    public function register(){
        return view('admin.users.register');
    } 
    public function userHome( Request $request){
        Validator::validate($request->all(),
        [
            'user_fullname'=>['required','min:3','max:20'],
            'user_email'=>['required','min:3','max:30','unique:users,email'],
            'user_password'=>['required','min:8','max:20'],
            'user_conf_password'=>['required','same:user_password'],
        ],[

            'user_fullname.required'=>'This field requried',
            'password.min'=>'Password less 6 character',
            'user_conf_password'=>'password dont match',
            'user_email'=>'email not validate'

        ]);
        // insert into DB
        $insert=new User();
        $insert->name=$request->user_fullname;
        $insert->email=$request->user_email;
        $insert->password=$request->user_password;
         if($insert->save())
        //  return redirect()->route('user-home')->with(['success'=>'Create user successful']);
        // return back()->with(['error'=>'error']);
        return view('admin.dashboard');
        return back();
    } 

        
    

    public function resetPassword(){

    } 
    public function logout(){

    } 

}
