<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function index(){
        $users = User::all();
        // dd($users);
        if($users){
            return $this->responseWithSuccess($users);
        }
        else{
            return $this->responseWithError();
        }

    }
}
