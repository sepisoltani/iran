<?php


namespace Sepisoltani\Iran\Facades;


use Illuminate\Support\Facades\Facade;

class Iran extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'iran';
    }
}
