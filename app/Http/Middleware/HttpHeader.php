<?php

namespace App\Http\Middleware;

use Closure;

class HttpHeader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, string $text = '')
    {
        $response = $next($request);
        $response->header('X-JOBS', $text);
        return $response;
    }
}
