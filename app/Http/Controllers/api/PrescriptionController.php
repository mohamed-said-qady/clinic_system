<?php

namespace App\Http\Controllers\api;

use App\Models\Prescription;
use Illuminate\Http\Request;
use App\Http\Requests\StorePrescriptionRequest;
use App\Http\Requests\UpdatePrescriptionRequest;
use App\Http\Resources\PrescriptionResource;
use App\Traits\ResponseApi;
use App\Http\Controllers\Controller;

class PrescriptionController extends Controller
{
    use ResponseApi;

    public function index()
    {
        $Prescription = Prescription::paginate(20);    
         return $this->responseSuccess('show all Prescription ',PrescriptionResource($Prescription));
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Prescription = Prescription::find($id);
        if(!$Prescription)
        {
            return $this->responseError('not found Prescription this is id',404);
        }
        return $this->responseSuccess('show one Prescription',new PrescriptionResource($Prescription));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrescriptionRequest $request, string $id)
    {
        $Prescription = Prescription::find($id);
        if(!$Prescription)
        {
            return $this->responseError('not found Prescription this is id',404);
        }
        $Prescription->update($request->safe()->all());
        return $this->responseSuccess('Prescription has been updated successfully!',new PrescriptionResource($Prescription));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Prescription = Prescription::find($id);
        if(!$Prescription)
        {
            return $this->responseError('you can\'t deleted',404);
        }
        $Prescription->delete();
        return $this->responseSuccess('Prescription has been deleted successfully!',[]);
    }
}
