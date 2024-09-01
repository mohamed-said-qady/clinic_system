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


class AdminController extends Controller
{

    use ResponseApi;
    public function __construct(){
            
    }
    public function store(StoreAcountRequest $request)
    {
        $request['password'] = Hash::make($request->password);
        $Acount = Acount::create($request->safe()->all());
        $Acount->addRole($request->description);
        return $this->responseSuccess('successfully created a new Acount',AcountResourse($Acount));
    }
}
