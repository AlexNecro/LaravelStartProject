<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request as Request;

class TestOne {
    protected $prop1;
    protected $prop2;
    protected $prop3;

    /**
     * @return mixed
     */
    public function getProp1()
    {
        return $this->prop1;
    }

    /**
     * @param mixed $prop1
     */
    public function setProp1($prop1): void
    {
        $this->prop1 = $prop1;
    }

    /**
     * @return mixed
     */
    public function getProp2()
    {
        return $this->prop2;
    }

    /**
     * @param mixed $prop2
     */
    public function setProp2($prop2): void
    {
        $this->prop2 = $prop2;
    }

    /**
     * @return mixed
     */
    public function getProp3()
    {
        return $this->prop3;
    }

    /**
     * @param mixed $prop3
     */
    public function setProp3($prop3): void
    {
        $this->prop3 = $prop3;
    }

    function __construct($prop1, $prop2, $prop3)
    {
        $this->prop1 = (string)$prop1;
        $this->prop2 = (bool)$prop2;
        $this->prop3 = (int)$prop3;
    }

    function getAll() {
        return array('prop1' => $this->prop1, 'prop2' => $this->prop2, 'prop3' => $this->prop3);
    }
}

class TestController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $testOne;

    public function getOne(Request $request) {
        $this->testOne = new TestOne('Uno', true, 666);
        dd($this->testOne->getAll());
    }

    public function setOne(Request $request) {
        try
        {
            $this->testOne = new TestOne($request->prop1, $request->prop2, $request->prop3);
        }
        catch (Exception $e)
        {
            echo ('В параметры передан какой-то отстой, но, слава аллаху, мы это обработали!');
            return;
        }
        return response()->json ($this->testOne->getAll());
    }
}
