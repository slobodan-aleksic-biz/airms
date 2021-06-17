<?php

namespace App\Http\Middleware;

use App\Enums\UserRoleEnum;
use Closure;

class AirMSAuthorization
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role, $guard = null)
    {
        $isGuest = auth($guard)->guest();
        $isAjaxOrWantsJson = $request->ajax() || $request->wantsJson();
        if ($isGuest && $isAjaxOrWantsJson) {
            // TODO: A redirecton to an error page should be implemented
            return response('Unauthorized', 401);
        }
        $isAuthenticated = auth()->check();

        if (!$isAuthenticated) {
            return redirect()->route('auth.login');
        }

        $user = auth()->user();
        $userDoesntHaveExpectedRole = $user->role !== $role;
        if ($userDoesntHaveExpectedRole) {
            return getLoginRedirection($user->role);
        }

        $userIsDisabled = $user->is_active;
        if (!$userIsDisabled) {
            return $this->logoutAndRedirectToLogin();
        }

        return $next($request);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function logoutAndRedirectToLogin()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
