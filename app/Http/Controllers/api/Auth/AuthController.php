<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\registerRequest;
use App\Models\Acount;
use App\Models\Chemist;
use App\Traits\ResponseApi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use Throwable; 

class AuthController extends Controller
{

    use ResponseApi;
    
    public function login(LoginRequest $request)
    {
        try{
            if(!Auth::guard('api')->attempt($request->only(['email','password'])))
            {
                return $this->responseError('Password & Email does not match with', 401);
            } 
            
            $Acount = Acount::where('email', $request->email)->first();
            $token = $Acount->createToken('clinic')->plainTextToken;
            
            return $this->responseSuccess('Acount logged In successfully',$token);

        }catch(Throwable $th){
            return $this->responseException($th->getMessage());
        }
    }

    public function register(registerRequest $request)
   {
    //$this->call(LaratrustSeeder::class);
    try {
        $Acount = new Acount();
        $Acount->name = $request->input('name');
        $Acount->email = $request->input('email');
        $Acount->password = Hash::make($request->input('password'));
        $Acount->save();
        $Acount->addRole('patient'); 
        $token = $Acount->createToken('clinic')->plainTextToken;
        return $this->responseSuccess('Acount registered successfully', $token);
    } catch (Throwable $th) {
       // return $this->responseException($th->getMessage());
    } 
}
 
    public function update(LoginRequest $request)
    {
        try{
            $Acount = Auth::user();
            $Acount->update($request->all());
            return $this->responseSuccess('successfully!',[]);
        }catch(Throwable $th){
            return $this->responseException($th->getMessage());
        }
    }
}
 