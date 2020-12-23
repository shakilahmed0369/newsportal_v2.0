<?php

namespace Bitfumes\Multiauth\Http\Middleware;

use Auth;
use Closure;

class redirectIfAuthenticatedAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect(route('admin.dashboard'));
                }
                break;

            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/dashboard');
                }
                break;
        }

        return $next($request);
    }
}
