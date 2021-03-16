<?php


namespace App;


class Postcard
{
//    public static function any()
//    {
//        dump('inside');
//    }
    protected static function resolveFacade($name)
    {
        return app()[$name];
    }
    public static function __callStatic($method, $arguments)
    {
        //dd($method);
        //dd(app()['Postcard']);
        //dump($arguments);
        return (self::resolveFacade('Postcard'))
            ->$method(...$arguments);
    }
}
