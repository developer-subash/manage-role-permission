<?php

namespace App\Http\Middleware;

use Closure;

class checkRole
{
    
    public function handle($request, Closure $next)
    {
        dd($request->user());
        if($request->user() === null )
        {
            return response()->json(['message' => "Insufficent Permission"]);
        }
       
        $actions = $request->route()->getAction();
       
        $roles = isset($actions['roles']) ? $actions['roles'] : null;
        
        if($request->user()->hasAnyRoles($roles) || $roles)
        {
            return $next($request);
        }
         
        return response()->json(['message' => "Insufficent Permission"]);
    }
}
