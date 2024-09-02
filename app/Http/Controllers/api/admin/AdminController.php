<?php

namespace App\Http\Controllers\api\admin;

use Illuminate\Http\Request;
use App\Traits\ResponseApi;
use App\Http\Controllers\Controller;
use App\Models\Acount;
use App\Http\Requests\StoreAcountRequest;
use App\Http\Requests\UpdateAcountRequest; 
use App\Http\Resources\AcountResourse;
use App\Traits;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{ 

    use ResponseApi; 
    public function __construct(){
        $this->middleware('role:Admin'); 
    } 
    public function store(StoreAcountRequest $request)
    {
        $request['password'] = Hash::make($request->password);
        $Acount = Acount::create($request->all());
        $Acount->addRole($request->description);
        return $this->responseSuccess('successfully created a new Acount',new AcountResourse($Acount));
    }
}
