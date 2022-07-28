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
        return response()->json([
            'success'=>true,
            'data'=>$users,
            'message'=>'Your data loaded successfully',
            'status'=>200
        ]);
    }
    public function user($id){
        $user = User::find($id);
        if($user){
            return $this->responseWithSuccess($user,"your data loaded successfully");
        }
        else{
            return $this->responseWithError($user,"your data can't be loaded");
        }
    }
    public function delete($id){
        $user = User::find($id);
        // dd($user);

        if($user){
            $user->delete();
            return $this->responseWithSuccess($user,"Your data deleted successfully");
        }
        else {
            return $this->responseWithError($user,"your data can't delete");
        }
    }
    public function create(Request $request){
        try {
            $user = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password)
            ]);
            return $this->responseWithSuccess($user,"your user created successfully");
        } catch (\Throwable $th) {
            return $this->responseWithError([],$th->getMessage());
        }

    }

}
