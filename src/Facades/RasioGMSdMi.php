<?php namespace Bantenprov\RasioGMSdMi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The RasioGMSdMi facade.
 *
 * @package Bantenprov\RasioGMSdMi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioGMSdMi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rasio-guru-murid-sd-mi';
    }
}
