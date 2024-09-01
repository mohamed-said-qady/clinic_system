<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Http\Resources\PatientResource;
use App\Traits\ResponseApi;
use App\Http\Controllers\Controller;

class PatienttController extends Controller
{

    use ResponseApi;

    public function index()
    {
        $Patient = Patient::paginate(20);    
         return $this->responseSuccess('show all Patient ',PatientResource($Patient));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
            $Patient = Patient::create($request->safe()->all());
            return $this->responseSuccess('Patient has been created successfully!',new PatientResource($Patient));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Patient = Patient::find($id);
        if(!$Patient)
        {
            return $this->responseError('not found Patient this is id',404);
        }
        return $this->responseSuccess('show one Patient',new PatientResource($Patient));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, string $id)
    {
        $Patient = Patient::find($id);
        if(!$Patient)
        {
            return $this->responseError('not found Patient this is id',404);
        }
        $Patient->update($request->safe()->all());
        return $this->responseSuccess('Patient has been updated successfully!',new PatientResource($Patient));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Patient = Patient::find($id);
        if(!$Patient)
        {
            return $this->responseError('you can\'t deleted',404);
        }
        $Patient->delete();
        return $this->responseSuccess('Patient has been deleted successfully!',[]);
    }
}
