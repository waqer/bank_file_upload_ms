<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Administrator;
use App\Applicationuser;
use Session;

class LoginController extends Controller
{
    //
    public function index(Request $request){
       //php $stories=Administrator::first();
       //
       $user_id=$request->input('user_id');
       $password=$request->input('password');
       
       $user=Applicationuser::where('user_id',$user_id)
       ->where('password', "$password")
       ->first();

       if ($user === null) {             
        dd("invalid");
         }
       else{
        Session::put('user_id', $user_id);

        if($user['is_admin']==1){

            return redirect()->route('Admin.index');
           
        }

        else if($user['is_bank']==1){
            Session::put('client_id', $user->client_id);
            return redirect()->route('bank.index');
        }

        else if($user['is_parent']==1){
            Session::put('client_id', $user->client_id);
            
            return redirect()->route('bankcontactperson.index');
        }
        else{

            Session::put('client_id', $user->client_id);
            
           // return redirect()->route('bankcontactperson.index');
            dd("child");
        }
        
       }

       
    }
    
}
