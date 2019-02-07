<?php

namespace Object505\Boilerplate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Object505\Boilerplate\Skeleton\SkeletonClass
 */
class BoilerplateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'boilerplate';
    }
}
