<?php

namespace App\Http\Controllers\api;

use App\Models\Specialisity;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateSpecialisityRequest;
use App\Http\Requests\StoreSpecialisityRequest;
use App\Http\Resources\SpecialisityResource;
use App\Traits\ResponseApi;
use App\Http\Controllers\Controller;

class SpecialisityController extends Controller
{

    use ResponseApi;

    public function index()
    {
        $Specialisity = Specialisity::paginate(20);    
         return $this->responseSuccess('show all Specialisity ',SpecialisityResource($Specialisity));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSpecialisityRequest $request)
    {
            $Specialisity = Specialisity::create($request->safe()->all());
            return $this->responseSuccess('Specialisity has been created successfully!',new SpecialisityResource($Specialisity));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Specialisity = Specialisity::find($id);
        if(!$Specialisity)
        {
            return $this->responseError('not found Specialisity this is id',404);
        }
        return $this->responseSuccess('show one Specialisity',new SpecialisityResource($Specialisity));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSpecialisityRequest $request, string $id)
    {
        $Specialisity = Specialisity::find($id);
        if(!$Specialisity)
        {
            return $this->responseError('not found Specialisity this is id',404);
        }
        $Specialisity->update($request->safe()->all());
        return $this->responseSuccess('Specialisity has been updated successfully!',new SpecialisityResource($Specialisity));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Specialisity = Specialisity::find($id);
        if(!$Specialisity)
        {
            return $this->responseError('you can\'t deleted',404);
        }
        $Specialisity->delete();
        return $this->responseSuccess('Specialisity has been deleted successfully!',[]);
    }
}
