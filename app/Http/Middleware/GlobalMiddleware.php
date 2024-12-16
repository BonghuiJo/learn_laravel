<?php

namespace App\Http\Middleware;

use App\Service\MessageFacade;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class GlobalMiddleware
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
	 */
	public function handle(Request $request, Closure $next): Response
	{
		MessageFacade::addMessage("Global Middleware");
		return $next($request);
	}
}
