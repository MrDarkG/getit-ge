<?php

class DepartmentController extends Controller
{
    public function list(DepartmentListRequest $request, DepartmentService $service): JsonResponse
    {
        $source = env('source');
        $list = $service->list($request, $source);
        $resource = new DepartmentListResource($list);

        return $resource->response()->setStatusCode(Response::HTTP_OK);
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }


    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = strtolower($value);
    }
}
