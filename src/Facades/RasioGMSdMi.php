<?php namespace Bantenprov\RKSJenPenDas\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The RKSJenPenDas facade.
 *
 * @package Bantenprov\RKSJenPenDas
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RKSJenPenDas extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rks-jen-pen-das';
    }
}
