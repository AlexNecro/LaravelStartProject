<?php


namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static getFacadeAccessor()
 * @method static getOne()
 * @method static setOne($prop1, $prop2, $prop3)
 * @see \App\Services\TestBasicService
 * @see https://ru.wikipedia.org/wiki/Костыль_(программирование)
 */
class TestBasicServiceFacade extends Facade
{
    protected static function getFacadeAccessor()    {
        return 'service.testbasic';
    }

    public static function setOne($prop1, $prop2, $prop3) {
        parent::getFacadeRoot()->setOne($prop1, $prop2, $prop3);
    }

    public static function getOne()
    {
        return parent::getFacadeRoot()->getOne();
    }
}
