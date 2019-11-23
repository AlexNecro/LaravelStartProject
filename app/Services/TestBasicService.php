<?php


namespace App\Services;


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
    public function setProp1($prop1)
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
    public function setProp2($prop2)
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
    public function setProp3($prop3)
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

class TestBasicService {

    protected $testOne;
    public function __construct(TestOne $testOne)
    {
        $this->testOne = $testOne;
        //$this->testOne = new TestOne('none', false, 0);
    }

    public function getOne() {
        return $this->testOne->getAll();
    }

    public function setOne($prop1, $prop2, $prop3) {
        $this->testOne->setProp1($prop1);
        $this->testOne->setProp2($prop2);
        $this->testOne->setProp3($prop3);
    }

}
