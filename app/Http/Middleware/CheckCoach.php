<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCoach
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!(auth()->user()->account_type=='coach')){
                return response('ليس لديك حق الوصول......');
        }
        if (auth()->user()->coach->approved =='look') {
            return response('لم يتم الموافقة بعد .....');
        }
            // 
        return $next($request);
    }
}
