<?php

namespace App\Http\Middleware;

use App\Models\Pageview;
use Closure;
use Illuminate\Http\Request;
use App\Jobs\LogPageviews;
use Illuminate\Support\Facades\Cookie;
use Jenssegers\Agent\Facades\Agent;

class AffilateTracking
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->query('shout')) {
            if($request->hasCookie('shout')) {
                return $next($request);    
            }else{
                LogPageviews::dispatch([
                    'os' => Agent::platform(),
                    'device' => Agent::device(),
                    'utm_source' => $request->query('utm_source'),
                    'utm_medium' => $request->query('utm_medium'),
                    'utm_campaign' => $request->query('utm_campaign'),
                    'utm_content' => $request->query('utm_content'),
                    'utm_term' => $request->query('utm_term'),
                    'affiliate'  => $request->query('shout'), 
                ]);
                $response = $next($request);
                return $response->withCookie(Cookie::make('shout',$request->query('shout'),30));
            }

        }
        
        return $next($request);  
    }
}