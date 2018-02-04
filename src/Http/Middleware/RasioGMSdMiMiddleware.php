<?php namespace Bantenprov\RKSJenPenDas\Http\Middleware;

use Closure;

/**
 * The RKSJenPenDasMiddleware class.
 *
 * @package Bantenprov\RKSJenPenDas
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RKSJenPenDasMiddleware
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
