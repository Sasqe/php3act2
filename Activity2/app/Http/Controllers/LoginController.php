<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserModel;
use App\Services\Business\SecurityService;
class LoginController extends Controller
{
    //
    public function index(Request $request)
    {
        $credentials = new UserModel(request()->get('username'), request()->get('password'));
         
        
        //put all form values in array called 'formValues'
       $serviceLogin = new SecurityService();
       $isValid = $serviceLogin->login($credentials);
       // $userName = request()->input('username');
     //  return request()->get('username');
     echo($isValid);
     return view('loginPassed2');
       }
    }

