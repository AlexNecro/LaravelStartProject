<?php


namespace App\Http\Middleware;

use Closure;

class ApiKeyMiddleware
{
    public function handle($request, Closure $next)     {
        if ($request->header('x-api-key') == env('API_KEY')) {
            return $next($request);
        } else {
            return response('Не угадал: ' . $request->header('x-api-key') . ' !== ' . env('API_KEY'), 401);
        }
    }

}
