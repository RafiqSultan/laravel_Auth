<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function login(){
        return view('admin.login');
    } 
    public function home(Request $request){
        echo $request->input('email-username');
        echo "<br>";
        echo $request->input('password');
        echo "<br>";
        echo $request->password;
        

    } 
    public function register(){

    } 
    public function resetPassword(){

    } 
    public function logout(){

    } 

}
