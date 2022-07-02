<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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

    } 
    public function resetPassword(){

    } 
    public function logout(){

    } 

}
