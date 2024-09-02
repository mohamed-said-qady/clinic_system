<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\Acount;
use Illuminate\Http\Request;
use App\Models\Consultation;
use App\Models\Prescription;
use App\Models\Specialisity; 
use App\Traits\ResponseApi;
use App\Http\Resources\PrescriptionResource;
use App\Http\Resources\ConsultationResource;
use App\Http\Resources\SpecialisityResource;
use App\Http\Requests\StoreConsultationRequest;
use App\Http\Requests\StorePrescriptionRequest;
use App\Http\Requests\UpdateConsultationRequest;
use App\Http\Requests\UpdatePrescriptionRequest;
use App\Http\Requests\StoreSpecialisityRequest;
use App\Http\Requests\UpdateSpecialisityRequest;

use Illuminate\Support\Facades\Auth;


class DoctorController extends Controller
{

    use ResponseApi;
     public function __construct(){
        $this->middleware('role:Doctor');
     }

     public function storeConsultation(StoreConsultationRequest $request)
     {
             $Consultation = Consultation::create($request->safe()->all());
             return $this->responseSuccess('Consultation has been created successfully!',new ConsultationResource($Consultation));
     }

     public function storePrescription(StorePrescriptionRequest $request)
     {
             $Prescription = Prescription::create($request->safe()->all());
             return $this->responseSuccess('Prescription has been created successfully!',new PrescriptionResource($Prescription));
     }
   
}
