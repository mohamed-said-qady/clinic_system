<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Lab;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLabRequest;
use App\Http\Requests\UpdateLabRequest;
use App\Http\Resources\LabResource;
use App\Traits\ResponseApi;
class LabtController extends Controller
{

    use ResponseApi;

    public function index()
    {
        $Lab = Lab::paginate(20);    
         return $this->responseSuccess('show all Lab ',LabResource($Lab));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLabRequest $request)
    {
            $Lab = Lab::create($request->safe()->all());
            return $this->responseSuccess('Lab has been created successfully!',new LabResource($Lab));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Lab = Lab::find($id);
        if(!$Lab)
        {
            return $this->responseError('not found Lab this is id',404);
        }
        return $this->responseSuccess('show one Lab',new LabResource($Lab));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLabRequest $request, string $id)
    {
        $Lab = Lab::find($id);
        if(!$Lab)
        {
            return $this->responseError('not found Lab this is id',404);
        }
        $Lab->update($request->safe()->all());
        return $this->responseSuccess('Lab has been updated successfully!',new LabResource($Lab));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Lab = Lab::find($id);
        if(!$Lab)
        {
            return $this->responseError('you can\'t deleted',404);
        }
        $Lab->delete();
        return $this->responseSuccess('Lab has been deleted successfully!',[]);
    }
}
