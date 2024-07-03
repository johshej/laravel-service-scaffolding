<?php

namespace CringeJPG\LaravelServiceScaffolding\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CringeJPG\LaravelServiceScaffolding\LaravelServiceScaffolding
 */
class LaravelServiceScaffolding extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \CringeJPG\LaravelServiceScaffolding\LaravelServiceScaffolding::class;
    }
}
