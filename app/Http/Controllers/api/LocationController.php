<?php

namespace App\Http\Controllers\api;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use App\Http\Resources\LocationResource;
use App\Traits\ResponseApi;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    use ResponseApi;

    public function index()
    {
        $Location = Location::paginate(20);    
         return $this->responseSuccess('show all Location ',LocationResource($Location));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLocationRequest $request)
    {
            $Location = Location::create($request->safe()->all());
            return $this->responseSuccess('Location has been created successfully!',new LocationResource($Location));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Location = Location::find($id);
        if(!$Location)
        {
            return $this->responseError('not found Location this is id',404);
        }
        return $this->responseSuccess('show one Location',new LocationResource($Location));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLocationRequest $request, string $id)
    {
        $Location = Location::find($id);
        if(!$Location)
        {
            return $this->responseError('not found Location this is id',404);
        }
        $Location->update($request->safe()->all());
        return $this->responseSuccess('Location has been updated successfully!',new LocationResource($Location));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Location = Location::find($id);
        if(!$Location)
        {
            return $this->responseError('you can\'t deleted',404);
        }
        $Location->delete();
        return $this->responseSuccess('Location has been deleted successfully!',[]);
    }
}
