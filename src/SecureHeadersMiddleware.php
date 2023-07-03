<?php

namespace SpringfieldClinic\SecureHeaders;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SecureHeadersMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $headers = Cache::remember('secure-headers', 300, function () {
            return (new SecureHeaders(\config('secure-headers', [])))->headers();
        });

        foreach ($headers as $key => $value) {
            $response->headers->set($key, $value, true);
        }

        return $response;
    }
}
