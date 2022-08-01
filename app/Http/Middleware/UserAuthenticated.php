<?php
use closure;
use Illuminate\http\Request;
use Illuminate\support\facades\Auth;
class userAthenticated
{
    public function handle(Request $request, closur $next): mixed
    {
        if (Auth::guard(name:'user')->guest()){
            if ($request->ajax() || $request->wntsjson()){
                if (\auth()->user()->status == 0)
                {
                    return abort(code:403);
                }
            }else{
                return redirect(route(name:'user.login.show'));
            }
        }
        return $next($request);
    }
}

