<?php namespace Bantenprov\RasioGMSdMi\Http\Middleware;

use Closure;

/**
 * The RasioGMSdMiMiddleware class.
 *
 * @package Bantenprov\RasioGMSdMi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioGMSdMiMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
