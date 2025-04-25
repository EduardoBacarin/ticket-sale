<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

include_once(app_path('Functions/User.php'));
class AuthController extends Controller
{
    public function register(RegisterUser $request){
        $request->merge([
            'role' => 'user',
            'password' => Hash::make($request->password)
        ]);
        if(!createUser($request->all())){
            return $this->responseBadRequest();
        }
        return $this->responseCreated();
    }
}
