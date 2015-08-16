<?php namespace KingsVilleApp\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Auth;
class AuthMiddleWare {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	 public function handle($request, Closure $next){

	 	if(Auth::check()){
            if (Auth::user()->usergroup == 'admin'){
            	return $next($request);
            }
            else  if (Auth::user()->usergroup == 'homeowner'){
            	return $next($request);
            }
	    }else{
	    	return new RedirectResponse('/session/login');
	    }
    }

}
