<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IncompleteUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user = auth()->user()->load(['city', 'country', 'state', 'image']);
        if($user->firstname == null || $user->lastname == null || $user-> phone == null || $user->house == null || $user->address == null || $user->postal == null || $user->city_id == null || $user->country_id == null || $user->state_id == null || $user->card_id == null) {
            return to_route('editProfile')
            ->withErrors([
                'profile' => 'Complete User Information to Proceed'
            ]);
        }
        
        return $next($request);
    }
}
