<?php


namespace App\Facades;

/**
 * @method static getFacadeAccessor()
 * @see \App\Services\TestBasicService
 * @see https://ru.wikipedia.org/wiki/Костыль_(программирование)
 */
class TestBasicServiceFacade
{
    protected static function getFacadeAccessor()    {
        return 'service.testbasic';
    }
}
