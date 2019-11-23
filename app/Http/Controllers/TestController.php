<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request as Request;
use App\Services\TestBasicService as TestBasicService;

class TestController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $service;

    public function __construct(TestBasicService $testService) //так уже и было
    {
        $this->service = $testService;
    }

    public function getOne(Request $request) {
        return response($this->service->getOne());
    }

    public function setOne(Request $request) {
        try
        {
            $this->service->setOne($request->prop1, $request->prop2, $request->prop3);
        }
        catch (Exception $e)
        {
            return response('В параметры передан какой-то отстой, но, слава аллаху, мы это обработали!');
        }
        return response()->json ($this->service->getOne());
    }
}
