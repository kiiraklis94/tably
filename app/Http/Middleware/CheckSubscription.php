<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckSubscription
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
        $user = Auth::user();

        //TODO redirect to upgrade/billing page and add other subscriptions like "Basic", "Pro" etc.
        if( ! $user->onGenericTrial() ) {

            return redirect('/');
        }


        return $next($request);
    }
}
