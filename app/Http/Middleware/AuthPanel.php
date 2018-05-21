<?php

namespace simpleTicket\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthPanel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param array $roles
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $first = collect(request()->segments())->first();

        if (!Auth::check())
            return $next($request);

//        Log::info(print_r($request->user()->getRoles(), true));

        $request->user()->setCurrentPanel(session()->get('panel', 'guest'));

        if ($request->user()->getCurrentPanel() == 'guest') {
            if ($request->user()->hasRole('user'))
                $request->user()->setCurrentPanel('user');

            if ($request->user()->hasRole('expert'))
                $request->user()->setCurrentPanel('expert');

            if ($request->user()->hasRole('admin'))
                $request->user()->setCurrentPanel('admin');
        }
        foreach ($roles as $role)
            if ($request->user()->hasRole($role))
                return $next($request);
        return abort(403, 'Unauthorized action.');
    }
}
