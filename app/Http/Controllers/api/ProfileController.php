<?php

namespace App\Http\Controllers\api;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Resources\ProfileResource;
use App\Traits\ResponseApi;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    use ResponseApi;

    public function index()
    {
        $Profile = Profile::paginate(20);    
         return $this->responseSuccess('show all Profile ',ProfileResource($Profile));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {
            $Profile = Profile::create($request->safe()->all());
            return $this->responseSuccess('Profile has been created successfully!',new ProfileResource($Profile));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Profile = Profile::find($id);
        if(!$Profile)
        {
            return $this->responseError('not found Profile this is id',404);
        }
        return $this->responseSuccess('show one Profile',new ProfileResource($Profile));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request, string $id)
    {
        $Profile = Profile::find($id);
        if(!$Profile)
        {
            return $this->responseError('not found Profile this is id',404);
        }
        $Profile->update($request->safe()->all());
        return $this->responseSuccess('Profile has been updated successfully!',new ProfileResource($Profile));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Profile = Profile::find($id);
        if(!$Profile)
        {
            return $this->responseError('you can\'t deleted',404);
        }
        $Profile->delete();
        return $this->responseSuccess('Profile has been deleted successfully!',[]);
    }
}
