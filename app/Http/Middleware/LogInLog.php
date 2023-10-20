<?php

namespace App\Http\Middleware;

use App\Events\UserLoggedInEvent;
use Closure;
use Illuminate\Http\Request;
use Livewire\Features\SupportEvents\Event;
use Symfony\Component\HttpFoundation\Response;

class LogInLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (auth()->check()) {
            \Illuminate\Support\Facades\Event::dispatch(new UserLoggedInEvent(auth()->user()));
        }

        return $response;
    }
}
