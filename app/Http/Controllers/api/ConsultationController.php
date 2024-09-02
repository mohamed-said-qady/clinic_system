<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\Consultation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConsultationRequest;
use App\Http\Requests\UpdateConsultationRequest;
use App\Http\Resources\ConsultationResource;
use App\Traits\ResponseApi;
class ConsultationController extends Controller
{

    use ResponseApi; 

    public function index()
    {
        $Consultation = Consultation::paginate(20);    
         return $this->responseSuccess('show all Consultation ',ConsultationResource($Consultation));
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Consultation = Consultation::find($id);
        if(!$Consultation)
        {
            return $this->responseError('not found Consultation this is id',404);
        }
        return $this->responseSuccess('show one Consultation',new ConsultationResource($Consultation));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConsultationRequest $request, string $id)
    {
        $Consultation = Consultation::find($id);
        if(!$Consultation)
        {
            return $this->responseError('not found Consultation this is id',404);
        }
        $Consultation->update($request->safe()->all());
        return $this->responseSuccess('Consultation has been updated successfully!',new ConsultationResource($Consultation));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Consultation = Consultation::find($id);
        if(!$Consultation)
        {
            return $this->responseError('you can\'t deleted',404);
        }
        $Consultation->delete();
        return $this->responseSuccess('Consultation has been deleted successfully!',[]);
    }
}
