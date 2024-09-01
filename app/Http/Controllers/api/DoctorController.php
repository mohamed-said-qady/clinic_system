<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\Acount;
use Illuminate\Http\Request;
use App\Models\Consultation;
use App\Models\Prescription;
use App\Traits\ResponseApi;
use App\Http\Resources\PrescriptionResource;
use App\Http\Resources\ConsultationResource;
use App\Http\Requests\StoreConsultationRequest;
use App\Http\Requests\StorePrescriptionRequest;
use App\Http\Requests\UpdateConsultationRequest;
use App\Http\Requests\UpdatePrescriptionRequest;

use Illuminate\Support\Facades\Auth;


class DoctorController extends Controller
{

    use ResponseApi;
     public function __construct(){
        $this->middleware('role:Doctor');
     }

     
   
}
