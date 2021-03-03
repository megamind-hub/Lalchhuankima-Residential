<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;
use Auth;

class Handler extends ExceptionHandler
{

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        if ($request->is('csc') || $request->is('csc/*')) {
            return redirect()->guest('/login/csc');
        }
        if ($request->is('forwarder') || $request->is('forwarder/*')) {
            return redirect()->guest('/login/forwarder');
        }
        if ($request->is('circle_officer') || $request->is('circle_officer/*')) {
            return redirect()->guest('/login/circle_officer');
        }
        if ($request->is('mandal_officer') || $request->is('mandal_officer/*')) {
            return redirect()->guest('/login/mandal_officer');
        }
        return redirect()->guest(route('login'));
    }
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
