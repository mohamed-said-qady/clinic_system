<?php

namespace App\Http\Controllers\api;

use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHospitalRequest;
use App\Http\Requests\UpdateHospitalRequest;
use App\Http\Resources\HospitalResource;
use App\Traits\ResponseApi;
use App\Http\Controllers\Controller;

class HospitalController extends Controller
{
    use ResponseApi;

    public function index()
    {
        $Hospital = Hospital::paginate(20);    
         return $this->responseSuccess('show all Hospital ',HospitalResource($Hospital));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHospitalRequest $request)
    {
            $Hospital = Hospital::create($request->safe()->all());
            return $this->responseSuccess('Hospital has been created successfully!',new HospitalResource($Hospital));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Hospital = Hospital::find($id);
        if(!$Hospital)
        {
            return $this->responseError('not found Hospital this is id',404);
        }
        return $this->responseSuccess('show one Hospital',new HospitalResource($Hospital));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHospitalRequest $request, string $id)
    {
        $Hospital = Hospital::find($id);
        if(!$Hospital)
        {
            return $this->responseError('not found Hospital this is id',404);
        }
        $Hospital->update($request->safe()->all());
        return $this->responseSuccess('Hospital has been updated successfully!',new HospitalResource($Hospital));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Hospital = Hospital::find($id);
        if(!$Hospital)
        {
            return $this->responseError('you can\'t deleted',404);
        }
        $Hospital->delete();
        return $this->responseSuccess('Hospital has been deleted successfully!',[]);
    }
}
