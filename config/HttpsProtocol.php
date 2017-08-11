<?php
/**
 * Created by PhpStorm.
 * User: JGONZALES
 * Date: 11/08/2017
 * Time: 4:38
 */

namespace App\Http\Middleware;

use Closure;


class HttpsProtocol
{
    public function handle($request, Closure $next)
    {
        if (!$request->secure() && env('APP_ENV') === 'production') {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}